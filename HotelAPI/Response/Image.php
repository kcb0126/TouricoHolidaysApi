<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 8:15 PM
 */

namespace HotelApi\Response;


class Image extends BaseObject
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $hotelID;

    /**
     * @var int
     */
    public $HotelImgID;
}