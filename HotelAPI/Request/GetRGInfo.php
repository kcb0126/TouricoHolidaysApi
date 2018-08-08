<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 6:57 PM
 */

namespace HotelApi\Request;


class GetRGInfo extends BaseObject
{
    /**
     * @var RGInfoRequest
     */
    public $request;

    /**
     * GetRGInfo constructor.
     * @param RGInfoRequest $request
     */
    public function __construct(RGInfoRequest $request)
    {
        $this->request = $request;
    }
}