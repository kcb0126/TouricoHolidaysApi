<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:20 PM
 */

namespace HotelApi\Response;


use Exception;

class PolicyType extends BaseObject
{
    /**
     * @var HotelPolicyType
     */
    public $HotelPolicy;

    /**
     * PolicyType constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->HotelPolicy = new HotelPolicyType(null);

        parent::__construct($object);
    }
}