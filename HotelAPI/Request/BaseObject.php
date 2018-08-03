<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/3/2018
 * Time: 4:54 PM
 */

namespace HotelApi\Request;


abstract class BaseObject
{
    /**
     * @throws \Exception
     */
    public function toArray()
    {
        // initialize return array
        $result = array();

        // get all properties of the subclass
        $properties = get_object_vars($this);

        // append each property to return array
        foreach ($properties as $name => $value) {
            // if the value is null, don't append
            if(is_null($value)) {
                continue;
            }

            if($value instanceof BaseObject || $value instanceof BaseArray) {
                $result[$name] = $value->toArray();
            } else {
                $result[$name] = $value;
            }
        }

        return $result;
    }
}