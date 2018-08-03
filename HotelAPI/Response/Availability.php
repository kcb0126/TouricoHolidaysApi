<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 4:13 PM
 */

namespace HotelApi\Response;

class Availability extends BaseObject
{
    /**
     * @var int
     */
    public $offset = 0;

    /**
     * @var bool
     */
    public $status = false;

    /**
     * @param $object
     * @return Availability
     */
    public static function enableDoc($object) {
        return $object;
    }
}