<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 11:05 PM
 */

namespace HotelApi\Response;


class Option extends BaseObject
{
    /**
     * @var string
     */
    public $DrivingDirectionDesc;

    /**
     * @var int
     */
    public $hotelId;

    /**
     * @var int
     */
    public $seqNum;

    /**
     * @var string
     */
    public $name;
}