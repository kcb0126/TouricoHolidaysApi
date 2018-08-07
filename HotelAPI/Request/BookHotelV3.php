<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 1:11 AM
 */

namespace HotelApi\Request;


class BookHotelV3 extends BaseObject
{
    /**
     * @var BookV3Request
     */
    public $request;

    /**
     * @var ArrayOfFeature
     */
    public $features;

    /**
     * BookHotelV3 constructor.
     * @param BookV3Request $request
     * @param ArrayOfFeature $features
     */
    public function __construct(
        BookV3Request $request
        , ArrayOfFeature $features
    )
    {
        $this->request = $request;
        $this->features = $features;
    }
}