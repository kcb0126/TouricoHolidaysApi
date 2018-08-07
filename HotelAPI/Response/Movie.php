<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 8:25 PM
 */

namespace HotelApi\Response;


class Movie extends BaseObject
{
    /**
     * @var int
     */
    public $MovieId;

    /**
     * @var int
     */
    public $activityId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $path;
}