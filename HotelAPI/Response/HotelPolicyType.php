<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:21 PM
 */

namespace HotelApi\Response;


use Exception;

class HotelPolicyType extends BaseObject
{
    /**
     * @var RoomTypePolicyType
     */
    public $RoomTypePolicy;

    /**
     * @var int
     */
    public $hotelId;

    /**
     * HotelPolicyType constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->RoomTypePolicy = new RoomTypePolicyType(null);

        parent::__construct($object);
    }
}