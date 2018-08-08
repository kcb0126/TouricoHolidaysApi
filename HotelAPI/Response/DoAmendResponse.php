<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 6:53 PM
 */

namespace HotelApi\Response;


class DoAmendResponse extends BaseObject
{
    /**
     * @var AmendResult
     */
    public $DoAmendResult;

    /**
     * DoAmendResponse constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->DoAmendResult = new AmendResult(null);

        parent::__construct($object);
    }
}