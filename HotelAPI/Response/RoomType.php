<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 3:47 PM
 */

namespace HotelApi\Response;

class RoomType extends BaseObject
{
    /**
     * @var ArrayOfAvailability
     */
    public $AvailabilityBreakdown;

    /**
     * @var Promotion
     */
    public $Discount;

    /**
     * @var ArrayOfOccupancy
     */
    public $Occupancies;

    /**
     * @var boolean
     */
    public $isNonRefundable = false;

    /**
     * @var int
     */
    public $NumOfBathrooms = 0;

    /**
     * @var string
     */
    public $roomTypeCategory = '';

    /**
     * @var int
     */
    public $roomTypeCategoryId = 0;

    /**
     * @var int
     */
    public $nights = 0;

    /**
     * @var string
     */
    public $name = '';

    /**
     * @var string
     */
    public $productId = '';

    /**
     * @var string
     */
    public $startDate = '';

    /**
     * @var int
     */
    public $hotelRoomTypeId = 0;

    /**
     * @var int
     */
    public $roomId = 0;

    /**
     * @var bool
     */
    public $isAvailable = false;

    /**
     * RoomType constructor.
     * @param $object
     * @throws \Exception
     */
    public function __construct($object)
    {
        $this->AvailabilityBreakdown = new ArrayOfAvailability(null);
        $this->Discount = new Promotion(null);
        $this->Occupancies = new ArrayOfOccupancy(null);

        parent::__construct($object);
    }

    /**
     * @param $object
     * @return RoomType
     */
    public static function enableDoc($object) {
        return $object;
    }
}