<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 7:12 PM
 */

namespace HotelApi\Response;

class Supplement extends BaseObject
{
    /**
     * @var int
     */
    public $suppId = 0;

    /**
     * @var string
     */
    public $suppName = '';

    /**
     * @var int
     */
    public $supptType = 0;

    /**
     * @var bool
     */
    public $suppIsMandatory = false;

    /**
     * @var string
     */
    public $suppChargeType = '';

    /**
     * @var float
     */
    public $price = 0.0;

    /**
     * @var float
     */
    public $publishPrice = 0.0;

    /**
     * @param $object
     * @return Supplement
     */
    public static function enableDoc($object) {
        return $object;
    }
}