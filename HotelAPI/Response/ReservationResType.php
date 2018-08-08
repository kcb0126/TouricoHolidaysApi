<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 3:33 PM
 */

namespace HotelApi\Response;


class ReservationResType extends BaseObject
{
    /**
     * @var HotelExtraInfo
     */
    public $HotelExtraInfo;

    /**
     * @var AmendRoomExtraInfo
     */
    public $RoomExtraInfo;

    /**
     * @var Passenger
     */
    public $Passenger;

    /**
     * @var CancellationPoliciesType
     */
    public $CancellationPolicies;

    /**
     * @var int
     */
    public $reservationId;

    /**
     * @var int
     */
    public $origResId;

    /**
     * @var string
     */
    public $fromDate;

    /**
     * @var string
     */
    public $toDate;

    /**
     * @var float
     */
    public $amendmentPrice;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $tranNum;

    /**
     * @var string
     */
    public $agentRefNum;

    /**
     * ReservationResType constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->HotelExtraInfo = new HotelExtraInfo(null);
        $this->RoomExtraInfo = new AmendRoomExtraInfo(null);
        $this->Passenger = new Passenger(null);
        $this->CancellationPolicies = new CancellationPoliciesType(null);

        parent::__construct($object);
    }
}