<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 5:07 PM
 */

namespace HotelApi\Response;


use Exception;

class ParagraphType extends BaseObject
{
    /**
     * @var ArrayOfFormattedTextType
     */
    public $items;

    /**
     * @var int
     */
    public $paragraphNumber;

    /**
     * ParagraphType constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->items = new ArrayOfFormattedTextType(null);

        parent::__construct($object);
    }
}