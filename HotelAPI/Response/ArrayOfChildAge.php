<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 3:54 PM
 */

namespace HotelApi\Response;


class ArrayOfChildAge extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\ChildAge';

    /**
     * @var array of ChildAge
     */
    public $ChildAge;
}