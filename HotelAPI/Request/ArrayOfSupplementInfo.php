<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 1:57 AM
 */

namespace HotelApi\Request;


class ArrayOfSupplementInfo extends BaseArray
{
    /**
     * @var array of SupplementInfo
     */
    public $SupplementInfo;

    /**
     * ArrayOfSupplementInfo constructor.
     * @param array $arr_of_SupplementInfo
     */
    public function __construct(array $arr_of_SupplementInfo)
    {
        $this->SupplementInfo = $arr_of_SupplementInfo;
    }
}