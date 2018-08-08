<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 3:26 PM
 */

namespace HotelApi\Response;


use HotelApi\Request\AmendRoomReserveInfo;

class AmendResult extends BaseObject
{
    /**
     * @var BookInfo
     */
    public $Info;

    /**
     * @var AmendInfo
     */
    public $AmendInfo;

    /**
     * AmendResult constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->Info = new BookInfo(null);
        $this->AmendInfo = new AmendInfo(null);

        parent::__construct($object);
    }
}