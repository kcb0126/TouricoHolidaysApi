<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 2:02 AM
 */

namespace HotelApi\Request;


class GetHotelDetailsV3 extends BaseObject
{
    /**
     * @var ArrayOfHotelID
     */
    public $HotelIds;

    /**
     * @var ArrayOfFeature
     */
    public $Features;

    public function __construct(ArrayOfHotelID $HotelIds, ArrayOfFeature $Features)
    {
        $this->HotelIds = $HotelIds;
        $this->Features = $Features;
    }
}