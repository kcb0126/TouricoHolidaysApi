<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 8:30 PM
 */

namespace HotelApi\Response;


class Amenity extends BaseObject
{
    /**
     * @var int
     */
    public $hotelID;

    /**
     * @var int
     */
    public $amenityID;

    /**
     * @var string
     */
    public $name;
}