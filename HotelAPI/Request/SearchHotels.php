<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 12:22 AM
 */

namespace HotelApi\Request;

class SearchHotels extends BaseObject
{
    /**
     * @var SearchRequest
     */
    public $request;

    /**
     * @var ArrayOfFeature
     */
    public $features;

    /**
     * SearchHotels constructor.
     * @param $request SearchRequest
     * @param $features ArrayOfFeature
     */
    public function __construct(SearchRequest $request, ArrayOfFeature $features)
    {
        $this->request = $request;
        $this->features = $features;
    }
}