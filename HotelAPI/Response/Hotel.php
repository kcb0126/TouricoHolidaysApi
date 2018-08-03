<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 3:02 PM
 */

namespace HotelApi\Response;

class Hotel extends BaseObject
{
    /**
     * @var HotelLocation
     */
    public $Location;

    /**
     * @var ArrayOfRoomType
     */
    public $RoomTypes;

    /**
     * @var int
     */
    public $brandId = 0;

    /**
     * @var string
     */
    public $brandName = '';

    /**
     * @var string
     */
    public $category = '';

    /**
     * @var string
     */
    public $PropertySubType = '';

    /**
     * @var int
     */
    public $NumOfRoom = 0;

    /**
     * @var float
     */
    public $minAverPublishPrice = 0.0;

    /**
     * @var string
     */
    public $PropertyType = '';

    /**
     * @var string
     */
    public $name = '';

    /**
     * @var bool
     */
    public $bestValue = false;

    /**
     * @var int
     */
    public $hotelId = 0;

    /**
     * @var string
     */
    public $provider = '';

    /**
     * @var string
     */
    public $thumb = '';

    /**
     * @var string
     */
    public $currency = '';

    /**
     * @var float
     */
    public $minAverPrice = 0.0;

    /**
     * @var int
     */
    public $starsLevel = 0;

    /**
     * @var string
     */
    public $desc = '';

    public function __construct($object)
    {
        $this->Location = new HotelLocation(null);
        $this->RoomTypes = new ArrayOfRoomType(null);

        parent::__construct($object);
    }

    /**
     * @param $object
     * @return Hotel
     */
    public static function enableDoc($object) {
        return $object;
    }
}