<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:18 AM
 */

namespace HotelApi\Response;


class ArrayOfReservation extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Reservation';

    /**
     * @var array of Reservation
     */
    public $Reservation;
}