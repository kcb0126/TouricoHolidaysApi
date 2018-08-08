<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 5:03 PM
 */

namespace HotelApi\Response;


class AmountPercentType extends BaseObject
{
    /**
     * @var string
     */
    public $currencyCode;

    /**
     * @var string
     */
    public $nmbrOfNights;

    /**
     * @var string
     */
    public $basisType;

    /**
     * @var float
     */
    public $percent;

    /**
     * @var float
     */
    public $amount;

    /**
     * @var int
     */
    public $decimalPlaces;
}