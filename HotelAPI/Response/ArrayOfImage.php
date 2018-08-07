<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 8:14 PM
 */

namespace HotelApi\Response;


class ArrayOfImage extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Image';

    /**
     * @var Image
     */
    public $Image;
}