<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 7:16 PM
 */

namespace HotelApi\Response;


class ArrayOfBoardbase extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Boardbase';

    /**
     * @var array of Boardbase
     */
    public $Boardbase;
}