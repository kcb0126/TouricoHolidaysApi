<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 12:41 AM
 */

namespace HotelApi\Request;


class SearchHotelsByDestinationIds extends BaseObject
{
    /**
     * @var SearchHotelsByDestinationIdsRequest
     */
    public $request;

    /**
     * @var ArrayOfFeature
     */
    public $features;

    /**
     * SearchHotelsByDestinationIds constructor.
     * @param SearchHotelsByDestinationIdsRequest $request
     * @param ArrayOfFeature $features
     */
    public function __construct(SearchHotelsByDestinationIdsRequest $request, ArrayOfFeature $features)
    {
        $this->request = $request;
        $this->features = $features;
    }
}