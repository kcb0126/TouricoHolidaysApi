<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 7:37 PM
 */

namespace HotelApi\Response;


use Exception;

class LongDescription extends BaseObject
{
    /**
     * @var string
     */
    public $FreeTextLongDescription;

    /**
     * @var ArrayOfDescription
     */
    public $Descriptions;

    /**
     * LongDescription constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->Descriptions = new ArrayOfDescription(null);

        $object = is_null($object) ? (object)array() : $object;
        $object->Descriptions = (object)array('Description' => isset($object->Description) ? $object->Description : null);

        parent::__construct($object);
    }
}