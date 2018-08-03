<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 1:54 AM
 */

namespace HotelApi\Request;

class ArrayOfRoomInfo extends BaseArray
{
    /**
     * @var array of RoomInfo
     */
    public $RoomInfo;

    /**
     * ArrayOfRoomInfo constructor.
     * @param array $arr_of_RoomInfo
     */
    public function __construct(array $arr_of_RoomInfo)
    {
        $this->RoomInfo = $arr_of_RoomInfo;
    }

}