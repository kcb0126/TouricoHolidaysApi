<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 2:03 AM
 */

namespace HotelApi\Request;


class SuppAges extends BaseObject
{
    /**
     * @var int
     */
    public $suppFrom;

    /**
     * @var int
     */
    public $suppTo;

    /**
     * @var int
     */
    public $suppQuantity;

    /**
     * @var float
     */
    public $suppPrice;

    /**
     * SuppAges constructor.
     * @param int $suppFrom
     * @param int $suppTo
     * @param int $suppQuantity
     * @param float $suppPrice
     */
    public function __construct(
        int $suppFrom
        , int $suppTo
        , int $suppQuantity
        , float $suppPrice
    )
    {
        $this->suppFrom = $suppFrom;
        $this->suppTo = $suppTo;
        $this->suppQuantity = $suppQuantity;
        $this->suppPrice = $suppPrice;
    }
}