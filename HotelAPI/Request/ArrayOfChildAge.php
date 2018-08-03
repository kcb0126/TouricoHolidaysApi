<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 5:41 AM
 */


namespace HotelApi\Request;

class ArrayOfChildAge extends BaseArray
{
    /**
     * @var array of ChildAge
     */
    public $ChildAge;

    /**
     * ArrayOfChildAge constructor.
     * @param array $arr_of_ChildAge
     */
    public function __construct(array $arr_of_ChildAge)
    {
        $this->ChildAge = $arr_of_ChildAge;
    }

}