<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 9:08 PM
 */

namespace HotelApi\Response;


use Exception;

class DrivingDirections extends BaseObject
{
    /**
     * @var ArrayOfOption
     */
    public $Options;

    /**
     * DrivingDirections constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->Options = new ArrayOfOption(null);

        $object = is_null($object) ? (object)array() : $object;
        $object->Options = (object)array('Option' => isset($object->Option) ? $object->Option : null);

        parent::__construct($object);
    }
}