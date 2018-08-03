<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 2:40 AM
 */

namespace HotelApi\Request;

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
     * @param int $AdultNum
     * @param int $ChildNum
     * @param ArrayOfChildAge $ChildAges
     */
    public function __construct(int $AdultNum, int $ChildNum, ArrayOfChildAge $ChildAges)
    {
        $this->AdultNum = $AdultNum;
        $this->ChildNum = $ChildNum;
        $this->ChildAges = $ChildAges;
    }
}