<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/5/2018
 * Time: 3:20 PM
 */

namespace HotelApi\Request;


class SearchHotelsByIdRequest extends BaseObject
{
    /**
     * @var ArrayOfHotelIdInfo
     */
    public $HotelIdsInfo;

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
     * @var bool
     */
    public $AvailableOnly;

    /**
     * SearchHotelsById constructor.
     * @param ArrayOfHotelIdInfo $HotelIdsInfo
     * @param string $CheckIn
     * @param string $CheckOut
     * @param ArrayOfRoomInfo $RoomsInformation
     * @param float $MaxPrice
     * @param int $StarLevel
     * @param bool $AvailableOnly
     */
    public function __construct(
        ArrayOfHotelIdInfo $HotelIdsInfo
        , string $CheckIn
        , string $CheckOut
        , ArrayOfRoomInfo $RoomsInformation
        , float $MaxPrice
        , int $StarLevel
        , bool $AvailableOnly
    )
    {
        $this->HotelIdsInfo = $HotelIdsInfo;
        $this->CheckIn = $CheckIn;
        $this->CheckOut = $CheckOut;
        $this->RoomsInformation = $RoomsInformation;
        $this->MaxPrice = $MaxPrice;
        $this->StarLevel = $StarLevel;
        $this->AvailableOnly = $AvailableOnly;
    }
}