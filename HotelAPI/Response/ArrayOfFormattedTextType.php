<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 5:08 PM
 */

namespace HotelApi\Response;


class ArrayOfFormattedTextType extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\FormattedTextType';

    /**
     * @var array of FormattedTextType
     */
    public $FormattedTextType;
}