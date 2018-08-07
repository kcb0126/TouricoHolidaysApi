<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 5:49 PM
 */

namespace HotelApi\Response;


use Exception;

class Hotel_1 extends BaseObject
{
    /**
     * @var Location
     */
    public $Location;

    /**
     * @var RefPoints
     */
    public $RefPoints;

    /**
     * @var Descriptions
     */
    public $Descriptions;

    /**
     * @var Media
     */
    public $Media;

    /**
     * @var ArrayOfAmenity
     */
    public $Amenities;

    /**
     * @var RoomType
     */
    public $RoomType;

    /**
     * @var DrivingDirections
     */
    public $DrivingDirections;

    /**
     * @var int
     */
    public $hotelID;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var int
     */
    public $brandId;

    /**
     * @var int
     */
    public $rooms;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var int
     */
    public $checkInTime;

    /**
     * @var int
     */
    public $checkOutTime;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $thumb;

    /**
     * @var string
     */
    public $hotelPhone;

    /**
     * @var string
     */
    public $hotelFax;

    /**
     * @var float
     */
    public $starLevel;

    /**
     * @var bool
     */
    public $isOpaque;

    /**
     * @var int
     */
    public $ranking;

    /**
     * @var int
     */
    public $bestValue;

    /**
     * @var int
     */
    public $Hotel_Id;

    /**
     * Hotel_1 constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->Location = new Location(null);
        $this->RefPoints = new RefPoints(null);
        $this->Descriptions = new Descriptions(null);
        $this->Media = new Media(null);
        $this->Amenities = new ArrayOfAmenity(null);
        $this->RoomType = new RoomType(null);
        $this->DrivingDirections = new DrivingDirections(null);

        parent::__construct($object);
    }
}