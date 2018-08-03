<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 5:01 PM
 */

namespace HotelApi\Response;

class ArrayOfPrice extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Price';

    /**
     * @var array of Price
     */
    public $Price;
}