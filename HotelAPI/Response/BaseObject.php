<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 11:54 PM
 */

namespace HotelApi\Response;

use ReflectionClass;
use ReflectionException;

abstract class BaseObject
{
    /**
     * BaseObject constructor.
     * In the constructor of subclass, all properties should be initialized( with object null or anything)
     * to indicate their types before parent's constructor is called.
     *  e.g.
     * public function __constructor($object)
     * {
     *     this->obj1 = new NewObject(null); // this statement tells me that the type of property obj1 is NewObject
     *     // this->itemCount = 0; // This can be written outside of constructor
     *     ... ... ...
     *     parent::__constructor($object);
     * }
     * If the subclass only contains prototype properties, all the properties can be initialized while declaration
     * and overriding constructor is not needed.
     * @param $object
     */
    public function __construct($object)
    {
        // get all properties of the subclass
        $properties = get_object_vars($this);

        // set value of each property from inputted object
        foreach ($properties as $name => $value) {
            // if there isn't a matching property in the object, set to null
            if(!isset($object->$name)) {
                $this->$name = null;
            } else {
                // if this property is an instance of BaseObject or BaseArray, parse recursively
                if($value instanceof BaseObject || $value instanceof BaseArray) {
                    try {
                        $reflector = new ReflectionClass(get_class($value));
                        $this->$name = $reflector->newInstance($object->$name);
                    } catch (ReflectionException $e) {
                        // $value has a type, so this may be unreachable.
                        $this->$name = null;
                    }
                } else {
                    // maybe a prototype value
                    $this->$name = $object->$name;
                }
            }
        }
    }
}