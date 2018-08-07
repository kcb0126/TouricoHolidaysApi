<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 1:01 AM
 */

namespace HotelApi\Response;


use Exception;

class CheckAvailabilityAndPricesResponse extends BaseObject
{
    /**
     * @var SearchResult
     */
    public $CheckAvailabilityAndPricesResult;

    /**
     * CheckAvailabilityAndPricesResponse constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->CheckAvailabilityAndPricesResult = new SearchResult(null);

        parent::__construct($object);
    }
}