<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 1:13 AM
 */

namespace HotelApi\Request;


use HotelApi\Response\Hotel_1;

class BookV3Request extends BaseObject
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
     * @var ArrayOfRoomReserveInfo
     */
    public $RoomsInfo;

    /**
     * @var string
     */
    public $PaymentType;

    /**
     * @var ClientCreditCardInfo
     */
    public $CCI;

    /**
     * @var string
     */
    public $AgentRefNumber;

    /**
     * @var string
     */
    public $ContactInfo;

    /**
     * @var float
     */
    public $RequestedPrice;

    /**
     * @var float
     */
    public $DeltaPrice;

    /**
     * @var string
     */
    public $Currency;

    /**
     * @var bool
     */
    public $IsOnlyAvailable;

    /**
     * @var string
     */
    public $ConfirmationEmail;

    /**
     * @var string
     */
    public $ConfirmationLogo;

    /**
     * BookV3Request constructor.
     * @param int $RecordLocatorId
     * @param int $HotelId
     * @param int $HotelRoomTypeId
     * @param string $CheckIn
     * @param string $CheckOut
     * @param ArrayOfRoomReserveInfo $RoomsInfo
     * @param string $PaymentType
     * @param ClientCreditCardInfo|null $CCI
     * @param string $AgentRefNumber
     * @param string $ContactInfo
     * @param float $RequestedPrice
     * @param float $DeltaPrice
     * @param string $Currency
     * @param bool $IsOnlyAvailable
     * @param string $ConfirmationEmail
     * @param string $ConfirmationLogo
     */
    public function __construct(
        int $RecordLocatorId
        , int $HotelId
        , int $HotelRoomTypeId
        , string $CheckIn
        , string $CheckOut
        , ArrayOfRoomReserveInfo $RoomsInfo
        , string $PaymentType
        , /*ClientCreditCardInfo*/ $CCI
        , string $AgentRefNumber
        , string $ContactInfo
        , float $RequestedPrice
        , float $DeltaPrice
        , string $Currency
        , bool $IsOnlyAvailable
        , string $ConfirmationEmail
        , string $ConfirmationLogo
    )
    {
        $this->RecordLocatorId = $RecordLocatorId;
        $this->HotelId = $HotelId;
        $this->HotelRoomTypeId = $HotelRoomTypeId;
        $this->CheckIn = $CheckIn;
        $this->CheckOut = $CheckOut;
        $this->RoomsInfo = $RoomsInfo;
        $this->PaymentType = $PaymentType;
        $this->CCI = $CCI;
        $this->AgentRefNumber = $AgentRefNumber;
        $this->ContactInfo = $ContactInfo;
        $this->RequestedPrice = $RequestedPrice;
        $this->DeltaPrice = $DeltaPrice;
        $this->Currency = $Currency;
        $this->IsOnlyAvailable = $IsOnlyAvailable;
        $this->ConfirmationEmail = $ConfirmationEmail;
        $this->ConfirmationLogo = $ConfirmationLogo;
    }
}