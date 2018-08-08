<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 6:39 PM
 */

namespace HotelApi\Request;


class AmendRequest extends BaseObject
{
    /**
     * @var int
     */
    public $RecordLocatorId;

    /**
     * @var int
     */
    public $HotelId;

    /**
     * @var int
     */
    public $HotelRoomTypeId;

    /**
     * @var string
     */
    public $CheckIn;

    /**
     * @var string
     */
    public $CheckOut;

    /**
     * @var ArrayOfReservationType
     */
    public $SelectedReservations;

    /**
     * @var CciType
     */
    public $Cci;

    /**
     * @var float
     */
    public $AmendmentPrice;

    /**
     * @var string
     */
    public $AmendType;

    /**
     * @var float
     */
    public $DeltaPrice;

    /**
     * @var string
     */
    public $Currency;

    /**
     * @var string
     */
    public $AgentRefNumber;

    /**
     * @var bool
     */
    public $IsOnlyAvailable;

    /**
     * @var string
     */
    public $RgldRefNum;

    /**
     * @var string
     */
    public $PropertyType;

    public function __construct(
        int $RecordLocatorId
        , int $HotelId
        , int $HotelRoomTypeId
        , string $CheckIn
        , string $CheckOut
        , ArrayOfReservationType $SelectedReservations
        , CciType $Cci
        , float $AmendmentPrice
        , string $AmendType
        , float $DeltaPrice
        , string $Currency
        , string $AgentRefNumber
        , bool $IsOnlyAvailable
        , string $RgldRefNum
        , string $PropertyType
    )
    {
        $this->RecordLocatorId = $RecordLocatorId;
        $this->HotelId = $HotelId;
        $this->HotelRoomTypeId = $HotelRoomTypeId;
        $this->CheckIn = $CheckIn;
        $this->CheckOut = $CheckOut;
        $this->SelectedReservations = $SelectedReservations;
        $this->Cci = $Cci;
        $this->AmendmentPrice = $AmendmentPrice;
        $this->AmendType = $AmendType;
        $this->DeltaPrice = $DeltaPrice;
        $this->Currency = $Currency;
        $this->AgentRefNumber = $AgentRefNumber;
        $this->IsOnlyAvailable = $IsOnlyAvailable;
        $this->RgldRefNum = $RgldRefNum;
        $this->PropertyType = $PropertyType;
    }
}