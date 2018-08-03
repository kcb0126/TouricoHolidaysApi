<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 2:39 PM
 */

namespace HotelApi\Response;

class BookInfo extends BaseObject
{
    /**
     * @var string
     */
    public $version = '';

    /**
     * @var string
     */
    public $culture = '';

    /**
     * @var string
     */
    public $serverTime ='';
}