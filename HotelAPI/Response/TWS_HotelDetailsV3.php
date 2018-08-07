<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 5:44 PM
 */

namespace HotelApi\Response;


use Exception;

class TWS_HotelDetailsV3 extends BaseObject
{
    /**
     * @var StatusCode
     */
    public $StatusCode;

    /**
     * @var Hotel_1
     */
    public $Hotel;

    /**
     * @var Home
     */
    public $Home;

    /**
     * TWS_HotelDetailsV3 constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->StatusCode = new StatusCode(null);
        $this->Hotel = new Hotel_1(null);
        $this->Home = new Home(null);

        parent::__construct($object);
    }
}