<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 1:51 AM
 */

namespace HotelApi\Response;


use Exception;

class SearchHotelsByDestinationIdsResponse extends BaseObject
{
    /**
     * @var SearchResult
     */
    public $SearchHotelsByDestinationIdsResult;

    /**
     * SearchHotelsByDestinationIdsResponse constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->SearchHotelsByDestinationIdsResult = new SearchResult(null);

        parent::__construct($object);
    }
}