<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 5:35 PM
 */

namespace HotelApi\Response;


class GetHotelDetailsV3Response extends BaseObject
{
    /**
     * @var GetHotelDetailsV3Result
     */
    public $GetHotelDetailsV3Result;

    public function __construct($object)
    {
        $this->GetHotelDetailsV3Result = new GetHotelDetailsV3Result(null);

        parent::__construct($object);
    }
}