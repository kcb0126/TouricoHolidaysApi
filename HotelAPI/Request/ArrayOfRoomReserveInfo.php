<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 1:34 AM
 */

namespace HotelApi\Request;


class ArrayOfRoomReserveInfo extends BaseArray
{
    /**
     * @var array of RoomReserveInfo
     */
    public $RoomReserveInfo;

    /**
     * ArrayOfRoomReserveInfo constructor.
     * @param array $arr_of_RoomReserveInfo
     */
    public function __construct(array $arr_of_RoomReserveInfo)
    {
        $this->RoomReserveInfo = $arr_of_RoomReserveInfo;
    }
}