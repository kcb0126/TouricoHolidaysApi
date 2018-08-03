<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 1:17 AM
 */

namespace HotelApi\Request;

class SearchRequest extends BaseObject
{
    /**
     * @var string
     */
    public $Destination;

    /**
     * @var string
     */
    public $HotelCityName;

    /**
     * @var string
     */
    public $HotelLocationName;

    /**
     * @var string
     */
    public $HotelName;

    /**
     * @var string
     */
    public $CheckIn;

    /**
     * @var string
     */
    public $CheckOut;

    /**
     * @var ArrayOfRoomInfo
     */
    public $RoomsInformation;

    /**
     * @var float
     */
    public $MaxPrice;

    /**
     * @var int
     */
    public $StarLevel;

    /**
     * @var boolean
     */
    public $AvailableOnly;

    /**
     * @var string
     */
    public $PropertyType;

    /**
     * @var boolean
     */
    public $ExactDestination;

    /**
     * SearchRequest constructor.
     * @param string $Destination : 3 characters
     * @param string $HotelCityName
     * @param string $HotelLocationName
     * @param string $HotelName
     * @param string $CheckIn : YYYY-MM-DD
     * @param string $CheckOut : YYYY-MM-DD
     * @param ArrayOfRoomInfo $RoomsInformation
     * @param float $MaxPrice
     * @param int $StarLevel
     * @param bool $AvailableOnly
     * @param string $PropertyType : 'Hotel'|'Home'|'NotSet'
     * @param bool $ExactDestination
     */
    public function __construct(
        string $Destination
        , string $HotelCityName = ''
        , string $HotelLocationName = ''
        , string $HotelName = ''
        , string $CheckIn
        , string $CheckOut
        , ArrayOfRoomInfo $RoomsInformation
        , float $MaxPrice = 0
        , int $StarLevel = 0
        , bool $AvailableOnly = false
        , string $PropertyType = 'NotSet'
        , bool $ExactDestination = false
    )
    {
        $this->Destination = $Destination;
        $this->HotelCityName = $HotelCityName;
        $this->HotelLocationName = $HotelLocationName;
        $this->HotelName = $HotelName;
        $this->CheckIn = $CheckIn;
        $this->CheckOut = $CheckOut;
        $this->RoomsInformation = $RoomsInformation;
        $this->MaxPrice = $MaxPrice;
        $this->StarLevel = $StarLevel;
        $this->AvailableOnly = $AvailableOnly;
        $this->PropertyType = $PropertyType;
        $this->ExactDestination = $ExactDestination;
    }
}