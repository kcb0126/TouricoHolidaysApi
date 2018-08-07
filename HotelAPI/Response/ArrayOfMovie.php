<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 8:23 PM
 */

namespace HotelApi\Response;


class ArrayOfMovie extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Movie';

    /**
     * @var Movie
     */
    public $Movie;
}