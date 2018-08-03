<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 5:12 PM
 */

namespace HotelApi\Response;

class Tax extends BaseObject
{
    /**
     * @var string CanadianTaxType
     */
    public $type = '';

    /**
     * @var float
     */
    public $value = 0.0;

    /**
     * @param $object
     * @return Tax
     */
    public static function enableDoc($object) {
        return $object;
    }
}

