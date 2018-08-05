<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/4/2018
 * Time: 12:52 AM
 */

namespace HotelApi\Request;


use HotelApi\Response\Availability;
use HotelApi\Response\Hotel;

class SearchHotelsById extends BaseObject
{
    /**
     * @var SearchHotelsById
     */
    public $request;

    /**
     * @var ArrayOfFeature
     */
    public $features;

    /**
     * SearchHotelsById constructor.
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