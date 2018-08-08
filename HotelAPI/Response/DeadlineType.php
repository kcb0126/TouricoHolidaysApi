<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 5:02 PM
 */

namespace HotelApi\Response;


class DeadlineType extends BaseObject
{
    /**
     * @var int
     */
    public $offsetUnitMultiplier;

    /**
     * @var string
     */
    public $offsetDropTime;

    /**
     * @var string
     */
    public $absoluteDeadline;

    /**
     * @var string
     */
    public $offsetTimeUnit;
}