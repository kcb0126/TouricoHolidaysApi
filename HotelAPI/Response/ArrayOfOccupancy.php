<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 4:22 PM
 */

namespace HotelApi\Response;

class ArrayOfOccupancy extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Occupancy';

    /**
     * @var array of Occupancy
     */
    public $Occupancy;
}