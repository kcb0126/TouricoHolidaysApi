<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 11:11 PM
 */

namespace HotelApi\Response;


class Home extends BaseObject
{
    /**
     * @var string
     */
    public $PropertyType;

    /**
     * @var string
     */
    public $PropertySubType;

    /**
     * @var int
     */
    public $NumOfBathrooms;

    /**
     * @var int
     */
    public $HotelId;
}