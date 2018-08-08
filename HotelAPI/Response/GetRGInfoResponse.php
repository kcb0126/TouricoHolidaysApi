<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 11:37 PM
 */

namespace HotelApi\Response;


use Exception;

class GetRGInfoResponse extends BaseObject
{
    /**
     * @var RGInfoResults
     */
    public $GetRGInfoResult;

    /**
     * GetRGInfoResponse constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->GetRGInfoResult = new RGInfoResults(null);

        parent::__construct($object);
    }
}