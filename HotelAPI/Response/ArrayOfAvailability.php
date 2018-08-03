<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 4:06 PM
 */

namespace HotelApi\Response;

class ArrayOfAvailability extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\Availability';

    /**
     * @var array of Availability
     */
    public $Availability;
}
