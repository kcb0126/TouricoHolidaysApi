<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/4/2018
 * Time: 1:05 AM
 */

namespace HotelApi\Request;


class ArrayOfHotelIdInfo extends BaseArray
{
    /**
     * @var HotelIdInfo
     */
    public $HotelIdInfo;

    /**
     * ArrayOfHotelIdInfo constructor.
     * @param array $arr_of_HotelIdInfo
     */
    public function __construct(array $arr_of_HotelIdInfo)
    {
        $this->HotelIdInfo = $arr_of_HotelIdInfo;
    }
}