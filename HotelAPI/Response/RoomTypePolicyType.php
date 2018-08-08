<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:26 PM
 */

namespace HotelApi\Response;


use Exception;

class RoomTypePolicyType extends BaseObject
{
    /**
     * @var ArrayOfCancelPenaltyType
     */
    public $CancelPolicy;

    /**
     * @var int
     */
    public $hotelRoomTypeId;

    /**
     * @var string
     */
    public $checkIn;

    /**
     * @var string
     */
    public $checkOut;

    /**
     * RoomTypePolicyType constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->CancelPolicy = new ArrayOfCancelPenaltyType(null);

        parent::__construct($object);
    }
}