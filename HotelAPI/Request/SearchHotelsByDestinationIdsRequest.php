<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 12:44 AM
 */

namespace HotelApi\Request;


class SearchHotelsByDestinationIdsRequest extends BaseObject
{
    /**
     * @var ArrayOfDestinationIdInfo
     */
    public $DestinationIdsInfo;

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
     * @var float
     */
    public $StarLevel;

    /**
     * @var bool
     */
    public $AvailableOnly;

    /**
     * @var string
     */
    public $PropertyType;

    /**
     * @var bool
     */
    public $ExactDestination;

    /**
     * SearchHotelsByDestinationIdsRequest constructor.
     * @param ArrayOfDestinationIdInfo $DestinationIdsInfo
     * @param string $CheckIn
     * @param string $CheckOut
     * @param ArrayOfRoomInfo $RoomsInformation
     * @param float $MaxPrice
     * @param float $StarLevel
     * @param bool $AvailableOnly
     * @param string $PropertyType
     * @param bool $ExactDestination
     */
    public function __construct(
        ArrayOfDestinationIdInfo $DestinationIdsInfo
        , string $CheckIn
        , string $CheckOut
        , ArrayOfRoomInfo $RoomsInformation
        , float $MaxPrice
        , float $StarLevel
        , bool $AvailableOnly
        , string $PropertyType
        , bool $ExactDestination
    )
    {
        $this->DestinationIdsInfo = $DestinationIdsInfo;
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