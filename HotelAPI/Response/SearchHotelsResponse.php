<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 2:20 PM
 */

namespace HotelApi\Response;

class SearchHotelsResponse extends BaseObject
{
    /**
     * @var SearchResult
     */
    public $SearchHotelsResult;

    public function __construct($object)
    {
        $this->SearchHotelsResult = new SearchResult(null);

        parent::__construct($object);
    }

    /**
     * @param $object
     * @return SearchHotelsResponse
     */
    public static function parse($object) {
        return $object;
    }
}