<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 5:04 PM
 */

namespace HotelApi\Response;

class Price extends BaseObject
{
    /**
     * @var int
     */
    public $offset = 0;

    /**
     * @var float
     */
    public $value = 0.0;

    /**
     * @var float
     */
    public $valuePublish = 0.0;

    /**
     * @param $object
     * @return Price
     */
    public static function enableDoc($object) {
        return $object;
    }
}