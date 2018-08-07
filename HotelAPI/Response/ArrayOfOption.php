<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 11:04 PM
 */

namespace HotelApi\Response;


class ArrayOfOption extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Option';

    /**
     * @var Option
     */
    public $Option;
}