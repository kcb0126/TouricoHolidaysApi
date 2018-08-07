<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 12:29 AM
 */

namespace HotelApi\Request;


class CheckAvailabilityAndPrices extends BaseObject
{
    /**
     * @var SearchHotelsByIdRequest
     */
    public $request;

    /**
     * @var ArrayOfFeature
     */
    public $features;

    /**
     * CheckAvailabilityAndPrices constructor.
     * @param SearchHotelsByIdRequest $request
     * @param ArrayOfFeature $features
     */
    public function __construct(
        SearchHotelsByIdRequest $request
        , ArrayOfFeature $features
    )
    {
        $this->request = $request;
        $this->features = $features;
    }
}