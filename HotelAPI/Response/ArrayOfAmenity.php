<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 8:27 PM
 */

namespace HotelApi\Response;


class ArrayOfAmenity extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Amenity';

    /**
     * @var array of Amenity
     */
    public $Amenity;
}