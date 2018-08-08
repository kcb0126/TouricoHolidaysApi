<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:45 AM
 */

namespace HotelApi\Request;


class CostAmend extends BaseObject
{
    /**
     * @var CostAmendRequest
     */
    public $request;

    /**
     * @var ArrayOfFeature
     */
    public $features;

    /**
     * CostAmend constructor.
     * @param CostAmendRequest $request
     * @param ArrayOfFeature $features
     */
    public function __construct(CostAmendRequest $request, ArrayOfFeature $features)
    {
        $this->request = $request;
        $this->features = $features;
    }
}