<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:14 AM
 */

namespace HotelApi\Response;


use Exception;
use HotelApi\Request\BookHotelV3;

class RGInfoResults extends BaseObject
{
    /**
     * @var BookInfo
     */
    public $Info;

    /**
     * @var ResGroup
     */
    public $ResGroup;

    /**
     * RGInfoResults constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->Info = new BookInfo(null);
        $this->ResGroup = new ResGroup(null);

        parent::__construct($object);
    }
}