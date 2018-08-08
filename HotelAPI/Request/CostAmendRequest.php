<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:47 AM
 */

namespace HotelApi\Request;


class CostAmendRequest extends BaseObject
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
     * @var string
     */
    public $AgentRefNumber;

    /**
     * @var bool
     */
    public $IsOnlyAvailable;

    /**
     * CostAmendRequest constructor.
     * @param int $RecordLocatorId
     * @param int $HotelId
     * @param int $HotelRoomTypeId
     * @param string $CheckIn
     * @param string $CheckOut
     * @param ArrayOfReservationType $SelectedReservations
     * @param string $AgentRefNumber
     * @param bool $IsOnlyAvailable
     */
    public function __construct(
        int $RecordLocatorId
        , int $HotelId
        , int $HotelRoomTypeId
        , string $CheckIn
        , string $CheckOut
        , ArrayOfReservationType $SelectedReservations
        , string $AgentRefNumber
        , bool $IsOnlyAvailable
    )
    {
        $this->RecordLocatorId = $RecordLocatorId;
        $this->HotelId = $HotelId;
        $this->HotelRoomTypeId = $HotelRoomTypeId;
        $this->CheckIn = $CheckIn;
        $this->CheckOut = $CheckOut;
        $this->SelectedReservations = $SelectedReservations;
        $this->AgentRefNumber = $AgentRefNumber;
        $this->IsOnlyAvailable = $IsOnlyAvailable;
    }
}