<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 3:41 PM
 */

namespace HotelApi\Response;


class HotelExtraInfo extends BaseObject
{
    /**
     * @var int
     */
    public $hotelId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $stars;

    /**
     * @var string
     */
    public $hotelPhone;

    /**
     * @var string
     */
    public $hotelFax;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var int
     */
    public $roomId;

    /**
     * @var string
     */
    public $PropertyType;

    /**
     * @var string
     */
    public $PropertySubType;

    /**
     * @var int
     */
    public $NumOfRoom;
}