<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 7:03 PM
 */

namespace HotelApi\Response;


class Location extends BaseObject
{
    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $searchingCity;

    /**
     * @var string
     */
    public $destinationCode;

    /**
     * @var string
     */
    public $destinationId;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $zip;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var float
     */
    public $latitude;
}