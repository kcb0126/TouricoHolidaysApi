<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 12:50 AM
 */

namespace HotelApi\Request;


class ArrayOfDestinationIdInfo extends BaseArray
{
    /**
     * @var array of DestinationIdInfo
     */
    public $DestinationIdInfo;

    /**
     * ArrayOfDestinationIdInfo constructor.
     * @param array $arr_of_DestinationIdInfo
     */
    public function __construct(array $arr_of_DestinationIdInfo)
    {
        $this->DestinationIdInfo = $arr_of_DestinationIdInfo;
    }
}