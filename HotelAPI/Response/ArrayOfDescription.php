<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 8:05 PM
 */

namespace HotelApi\Response;


class ArrayOfDescription extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Description';

    /**
     * @var array of Description
     */
    public $Description;
}