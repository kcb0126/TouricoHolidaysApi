<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 2:20 PM
 */

namespace HotelApi\Response;

use Exception;

class SearchHotelsResponse extends BaseObject
{
    /**
     * @var SearchResult
     */
    public $SearchHotelsResult;

    /**
     * SearchHotelsResponse constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->SearchHotelsResult = new SearchResult(null);

        parent::__construct($object);
    }
}