<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 7:10 PM
 */

namespace HotelApi\Response;


use Exception;

class Descriptions extends BaseObject
{
    /**
     * @var string
     */
    public $VoucherRemark;

    /**
     * @var ShortDescription
     */
    public $ShortDescription;

    /**
     * @var FreeTextShortDescription
     */
    public $FreeTextShortDescription;

    /**
     * @var LongDescription
     */
    public $LongDescription;

    /**
     * Descriptions constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->ShortDescription = new ShortDescription(null);
        $this->FreeTextShortDescription = new FreeTextShortDescription(null);
        $this->LongDescription = new LongDescription(null);

        parent::__construct($object);
    }
}