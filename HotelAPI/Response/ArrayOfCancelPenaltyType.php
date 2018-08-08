<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:53 PM
 */

namespace HotelApi\Response;


class ArrayOfCancelPenaltyType extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\CancelPenaltyType';

    /**
     * @var array of CancelPenaltyType
     */
    public $CancelPenaltyType;
}