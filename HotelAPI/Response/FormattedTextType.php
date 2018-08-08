<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 5:09 PM
 */

namespace HotelApi\Response;


class FormattedTextType extends BaseObject
{
    /**
     * @var bool
     */
    public $formatted;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $value;
}