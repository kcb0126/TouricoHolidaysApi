<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 11:06 PM
 */

namespace HotelApi\Request;


class RGInfoRequest extends BaseObject
{
    /**
     * @var int
     */
    public $RGId;

    /**
     * RGInfoRequest constructor.
     * @param int $RGId
     */
    public function __construct(int $RGId)
    {
        $this->RGId = $RGId;
    }
}