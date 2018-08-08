<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 3:32 PM
 */

namespace HotelApi\Response;


class ArrayOfReservationResType extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\ReservationResType';

    /**
     * @var array of ReservationResType
     */
    public $ReservationResType;
}