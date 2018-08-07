<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 7:07 PM
 */

namespace HotelApi\Response;


class RefPoints extends BaseObject
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $typeId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $airportCode;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var float
     */
    public $distance;

    /**
     * @var string
     */
    public $unit;
}