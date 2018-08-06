<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 12:54 AM
 */

namespace HotelApi\Request;


class DestinationIdInfo extends BaseObject
{
    /**
     * @var int
     */
    public $id;

    /**
     * DestinationIdInfo constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
}