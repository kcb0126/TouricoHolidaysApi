<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 5:44 AM
 */

namespace HotelApi\Request;

class ChildAge extends BaseObject
{
    /**
     * @var int
     */
    public $age;

    /**
     * ChildAge constructor.
     * @param int $age
     */
    public function __construct(int $age)
    {
        $this->age = $age;
    }

}