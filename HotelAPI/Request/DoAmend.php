<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 6:37 PM
 */

namespace HotelApi\Request;


class DoAmend extends BaseObject
{
    /**
     * @var AmendRequest
     */
    public $request;

    /**
     * @var ArrayOfFeature
     */
    public $features;

    /**
     * DoAmend constructor.
     * @param AmendRequest $request
     * @param ArrayOfFeature $features
     */
    public function __construct(AmendRequest $request, ArrayOfFeature $features)
    {
        $this->request = $request;
        $this->features = $features;
    }
}