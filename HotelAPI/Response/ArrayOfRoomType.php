<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 3:42 PM
 */

namespace HotelApi\Response;

class ArrayOfRoomType extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\RoomType';

    /**
     * @var array of RoomType
     */
    public $RoomType;
}