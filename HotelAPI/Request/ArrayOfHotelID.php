<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 2:03 AM
 */

namespace HotelApi\Request;


class ArrayOfHotelID extends BaseArray
{
    /**
     * @var array of HotelID
     */
    public $HotelID;

    /**
     * ArrayOfHotelID constructor.
     * @param array $arr_of_HotelID
     */
    public function __construct(array $arr_of_HotelID)
    {
        $this->HotelID = $arr_of_HotelID;
    }
}