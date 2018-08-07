<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:13 AM
 */

namespace HotelApi\Response;


use Exception;

class BookHotelV3Response extends BaseObject
{
    /**
     * @var RGInfoResults
     */
    public $BookHotelV3Result;

    /**
     * BookHotelV3Response constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->BookHotelV3Result = new RGInfoResults(null);

        parent::__construct($object);
    }
}