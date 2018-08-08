<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:01 PM
 */

namespace HotelApi\Response;


use Exception;

class CancellationPoliciesType extends BaseObject
{
    /**
     * @var PolicyType
     */
    public $OrigPolicy;

    /**
     * @var PolicyType
     */
    public $NewPolicy;

    /**
     * CancellationPoliciesType constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->OrigPolicy = new PolicyType(null);
        $this->NewPolicy = new PolicyType(null);

        parent::__construct($object);
    }
}