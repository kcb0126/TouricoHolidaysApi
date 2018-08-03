<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/3/2018
 * Time: 4:55 PM
 */

namespace HotelApi\Request;

use Exception;

abstract class BaseArray
{
    /**
     * @throws Exception
     */
    public function toArray() {
        // check if this has one (main) property
        $properties = get_object_vars($this);
        if(count($properties) < 1) {
            throw new Exception('Class ' . get_class($this) . ' should has one (main) property.');
        }

        // main property of class <ArrayOf...>
        reset($properties);
        $main_array = key($properties);

        // wrap the main property as an array
        if(!is_array($this->$main_array)) {
            $this->$main_array = array($this->$main_array);
        }

        // initialize return array
        $result = array();

        foreach ($this->$main_array as $item) {
            // Who knows the thought of all developer?
            if(is_null($item)) {
                continue;
            }

            // check if each item is an instance of BaseObject
            if(!($item instanceof BaseObject)) {
                throw new Exception('The property ' . $main_array . ' of class '
                    . get_class($this) . 'should contain array of instances of BaseObject.');
            }

            $result[] = $item->toArray();
        }

        return $result;
    }
}