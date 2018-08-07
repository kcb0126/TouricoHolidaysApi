<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 5:37 PM
 */

namespace HotelApi\Response;


class GetHotelDetailsV3Result extends BaseObject
{
    /**
     * @var TWS_HotelDetailsV3
     */
    public $TWS_HotelDetailsV3;

    public function __construct($object)
    {
        $this->TWS_HotelDetailsV3 = new TWS_HotelDetailsV3(null);

        $object = is_null($object) ? (object)array() : $object;
        $object->TWS_HotelDetailsV3 = isset(($object->any)['TWS_HotelDetailsV3']) ? ($object->any)['TWS_HotelDetailsV3'] : null;

        parent::__construct($object);
    }
}