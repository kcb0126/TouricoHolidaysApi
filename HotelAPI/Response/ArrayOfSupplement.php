<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 7:07 PM
 */

namespace HotelApi\Response;

class ArrayOfSupplement extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Supplement';

    /**
     * @var array of Supplement
     */
    public $Supplement;
}