<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 2:02 AM
 */

namespace HotelApi\Request;


class ArrayOfSuppAges extends BaseArray
{
    /**
     * @var SuppAges
     */
    public $SuppAges;

    /**
     * ArrayOfSuppAges constructor.
     * @param array $arr_of_SuppAges
     */
    public function __construct(array $arr_of_SuppAges)
    {
        $this->SuppAges = $arr_of_SuppAges;
    }
}