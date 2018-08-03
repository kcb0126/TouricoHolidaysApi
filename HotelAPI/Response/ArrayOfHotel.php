<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 2:45 PM
 */

namespace HotelApi\Response;

class ArrayOfHotel extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Hotel';

    /**
     * @var array of Hotel
     */
    public $Hotel;
}