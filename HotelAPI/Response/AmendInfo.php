<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 3:28 PM
 */

namespace HotelApi\Response;


class AmendInfo extends BaseObject
{
    /**
     * @var ResGroupType
     */
    public $ResGroup;

    /**
     * @var string
     */
    public $version;

    /**
     * AmendInfo constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->ResGroup = new ResGroupType(null);

        parent::__construct($object);
    }
}