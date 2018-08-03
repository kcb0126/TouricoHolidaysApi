<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 5:09 PM
 */

namespace HotelApi\Response;

class ArrayOfTax extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Tax';

    /**
     * @var array of Tax
     */
    public $Tax;
}