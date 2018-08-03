<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/3/2018
 * Time: 12:13 AM
 */

namespace HotelApi\Response;

use Exception;
use ReflectionClass;
use ReflectionException;

abstract class BaseArray
{
    protected $itemClass = '';

    /**
     * BaseArray constructor.
     * In a subclass, their should be only 2 properties: inherited itemClass and main property.
     * main property: a property that will contain an array of Object(instance of BaseObject)
     * itemClass: class name of item in main property. This should be set before parent's constructor is called.
     *  e.g.
     * class ArrayOfMyObject extends BaseArray
     * {
     *     public itemClass = 'MyObject'; // Removing "ArrayOf" from the classname was mentioned, but not now.
     *     public mainProperty; // This can be named anyway(except itemClass).
     *     // nothing more
     * }
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        // make a reflection class based itemClass
        try {
            $reflector = new ReflectionClass($this->itemClass);
        } catch (ReflectionException $e) {
            throw new Exception(get_class($this) . ': You should set itemClass as a valid class name.');
        }

        // remove itemClass from properties list to get main property
        $properties = get_object_vars($this);
        unset($properties['itemClass']);

        if(count($properties) < 1) {
            throw new Exception('Class ' . get_class($this) . ' should have at least one property except itemClass.');
        }

        // main property of class <ArrayOf...>
        reset($properties);
        $main_property = key($properties);

        // initialize main property as an empty array
        $this->$main_property = array();

        // if the inputted object is an array, parse each element as an itemClass, else parse whole object
        if(!isset($object->$main_property)) {
            $this->$main_property = null;
        } else if(is_array($object->$main_property)) {
            foreach ($object->$main_property as $item) {
                $this->$main_property[] = $reflector->newInstance($item);
            }
        } else {
            $this->$main_property[] = $reflector->newInstance($object->$main_property);
        }
    }
}