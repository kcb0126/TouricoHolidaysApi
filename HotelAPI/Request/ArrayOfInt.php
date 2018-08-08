<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:56 AM
 */

namespace HotelApi\Request;


class ArrayOfInt extends BaseArray
{
    /**
     * @var array of int
     */
    public $ChildAge;

    /**
     * ArrayOfInt constructor.
     * @param array $arr_of_int
     */
    public function __construct(array $arr_of_int)
    {
        $this->ChildAge = $arr_of_int;
    }
}