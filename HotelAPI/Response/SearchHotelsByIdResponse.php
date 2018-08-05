<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/5/2018
 * Time: 6:23 PM
 */

namespace HotelApi\Response;


use Exception;

class SearchHotelsByIdResponse extends BaseObject
{
    /**
     * @var SearchResult
     */
    public $SearchHotelsByIdResult;

    /**
     * SearchHotelsByIdResponse constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->SearchHotelsByIdResult = new SearchResult(null);

        parent::__construct($object);
    }
}