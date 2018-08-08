<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 3:53 PM
 */

namespace HotelApi\Response;


use Exception;

class RoomInfo extends BaseObject
{
    /**
     * @var int
     */
    public $AdultNum;

    /**
     * @var int
     */
    public $ChildNum;

    /**
     * @var ArrayOfChildAge
     */
    public $ChildAges;

    /**
     * RoomInfo constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->ChildAges = new ArrayOfChildAge(null);

        parent::__construct($object);
    }
}