<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 3:29 PM
 */

namespace HotelApi\Response;

class HotelLocation extends BaseObject
{
    /**
     * @var string
     */
    public $countryCode = '';

    /**
     * @var string
     */
    public $stateCode = '';

    /**
     * @var string
     */
    public $city = '';

    /**
     * @var string
     */
    public $searchingState = '';

    /**
     * @var string
     */
    public $searchingCity = '';

    /**
     * @var string
     */
    public $location = '';

    /**
     * @var string
     */
    public $address = '';

    /**
     * @var float
     */
    public $longitude = 0.0;

    /**
     * @var float
     */
    public $latitude = 0.0;
}