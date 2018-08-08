<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:53 AM
 */

namespace HotelApi\Request;


use HotelApi\Response\ArrayOfImage;

class ReservationType extends BaseObject
{
    /**
     * @var int
     */
    public $AdultsNum;

    /**
     * @var int
     */
    public $ChildNum;

    /**
     * @var ArrayOfInt
     */
    public $ChildAges;

    /**
     * @var AmendRoomReserveInfo
     */
    public $RoomReserveInfo;

    /**
     * @var int
     */
    public $reservationId;

    /**
     * ReservationType constructor.
     * @param int $AdultsNum
     * @param int $ChildNum
     * @param ArrayOfInt $ChildAges
     * @param AmendRoomReserveInfo $RoomReserveInfo
     * @param int $reservationId
     */
    public function __construct(
        int $AdultsNum
        , int $ChildNum
        , ArrayOfInt $ChildAges
        , AmendRoomReserveInfo $RoomReserveInfo
        , int $reservationId
    )
    {
        $this->AdultsNum = $AdultsNum;
        $this->ChildNum = $ChildNum;
        $this->ChildAges = $ChildAges;
        $this->RoomReserveInfo = $RoomReserveInfo;
        $this->reservationId = $reservationId;
    }
}