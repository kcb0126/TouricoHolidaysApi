<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/4/2018
 * Time: 1:08 AM
 */

namespace HotelApi\Request;


class HotelIdInfo extends BaseObject
{
    /**
     * @var int
     */
    public $id;

    /**
     * HotelIdInfo constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
}