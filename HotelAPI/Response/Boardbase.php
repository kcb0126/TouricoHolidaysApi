<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 7:17 PM
 */

namespace HotelApi\Response;

class Boardbase
{
    /**
     * @var int
     */
    public $bbId = 0;

    /**
     * @var string
     */
    public $bbName = '';

    /**
     * @var float
     */
    public $bbPrice = 0.0;

    /**
     * @var float
     */
    public $bbPublishPrice = 0.0;

    /**
     * @param $object
     * @return Boardbase
     */
    public static function enableDoc($object) {
        return $object;
    }
}