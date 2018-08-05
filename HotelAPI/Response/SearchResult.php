<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 2:36 PM
 */

namespace HotelApi\Response;

use Exception;

class SearchResult extends BaseObject
{
    /**
     * @var BookInfo
     */
    public $Info;

    /**
     * @var ArrayOfHotel
     */
    public $HotelList;

    /**
     * SearchResult constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->Info = new BookInfo(null);
        $this->HotelList = new ArrayOfHotel(null);

        parent::__construct($object);
    }
}