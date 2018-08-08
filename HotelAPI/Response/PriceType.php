<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 5:16 PM
 */

namespace HotelApi\Response;


class PriceType extends BaseObject
{
    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $currency;
}