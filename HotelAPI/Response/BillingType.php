<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 5:12 PM
 */

namespace HotelApi\Response;


use Exception;

class BillingType extends BaseObject
{
    /**
     * @var PriceType
     */
    public $OrigPrice;

    /**
     * @var PriceType
     */
    public $NewPrice;

    /**
     * @var PriceType
     */
    public $Paid;

    /**
     * @var PriceType
     */
    public $Balance;

    /**
     * @var ArrayOfTax
     */
    public $OrigTaxBreakdown;

    /**
     * @var ArrayOfTax
     */
    public $NewTaxBreakdown;

    /**
     * BillingType constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->OrigPrice = new PriceType(null);
        $this->NewPrice = new PriceType(null);
        $this->Paid = new PriceType(null);
        $this->Balance = new PriceType(null);
        $this->OrigTaxBreakdown = new ArrayOfTax(null);
        $this->NewTaxBreakdown = new ArrayOfTax(null);

        parent::__construct($object);
    }
}