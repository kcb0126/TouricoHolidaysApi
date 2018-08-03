<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 5:28 PM
 */

namespace HotelApi\Response;

class ArrayOfRoom extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Room';

    /**
     * @var array of Room
     */
    public $Room;
}