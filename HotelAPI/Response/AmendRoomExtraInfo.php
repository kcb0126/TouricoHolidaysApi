<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 3:44 PM
 */

namespace HotelApi\Response;


use Exception;

class AmendRoomExtraInfo extends BaseObject
{
    /**
     * @var BoardBaseType
     */
    public $boardBase;

    /**
     * @var ArrayOfSupplement
     */
    public $Supplements;

    /**
     * @var RoomInfo
     */
    public $roomInfo;

    /**
     * @var int
     */
    public $hotelRoomTypeId;

    /**
     * @var int
     */
    public $roomId;

    /**
     * @var int
     */
    public $roomTypeCategoryId;

    /**
     * @var string
     */
    public $roomTypeCategory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $dblBed;

    /**
     * @var string
     */
    public $occupId;

    /**
     * @var int
     */
    public $NumOfBathrooms;

    /**
     * AmendRoomExtraInfo constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->boardBase = new BoardBaseType(null);
        $this->Supplements = new ArrayOfSupplement(null);
        $this->roomInfo = new RoomInfo(null);

        parent::__construct($object);
    }
}