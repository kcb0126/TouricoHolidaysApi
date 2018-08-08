<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:51 AM
 */

namespace HotelApi\Request;


class ArrayOfReservationType extends BaseArray
{
    /**
     * @var array of ReservationType
     */
    public $Reservation;

    /**
     * ArrayOfReservationType constructor.
     * @param array $arr_of_ReservationType
     */
    public function __construct(array $arr_of_ReservationType)
    {
        $this->Reservation = $arr_of_ReservationType;
    }
}