<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 7:04 PM
 */

namespace HotelApi\Response;

class Room
{
    /**
     * @var int
     */
    public $AdultNum = 0;

    /**
     * @var int
     */
    public $ChildNum = 0;

    /**
     * @var int
     */
    public $seqNum = 0;

    /**
     * @param $object
     * @return Room
     */
    public static function enableDoc($object) {
        return $object;
    }
}