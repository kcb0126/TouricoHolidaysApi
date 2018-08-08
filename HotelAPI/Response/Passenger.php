<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 3:57 PM
 */

namespace HotelApi\Response;


class Passenger extends BaseObject
{
    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $middleName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $homePhone;

    /**
     * @var string
     */
    public $mobilePhone;

    /**
     * @var int
     */
    public $ageGroup;
}