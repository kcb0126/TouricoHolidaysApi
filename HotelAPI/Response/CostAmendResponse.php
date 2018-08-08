<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 3:24 PM
 */

namespace HotelApi\Response;


class CostAmendResponse extends BaseObject
{
    /**
     * @var AmendResult
     */
    public $CostAmendResult;

    /**
     * CostAmendResponse constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->CostAmendResult = new AmendResult(null);

        parent::__construct($object);
    }
}