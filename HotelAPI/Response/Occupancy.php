<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 4:27 PM
 */

namespace HotelApi\Response;

class Occupancy extends BaseObject
{
    /**
     * @var ArrayOfPrice
     */
    public $PriceBreakdown;

    /**
     * @var ArrayOfTax
     */
    public $TaxBreakdown;

    /**
     * @var ArrayOfTax
     */
    public $TaxBreakdownPublish;

    /**
     * @var ArrayOfRoom
     */
    public $Rooms;

    /**
     * @var ArrayOfSupplement
     */
    public $SelctedSupplements;

    /**
     * @var ArrayOfBoardbase
     */
    public $BoardBases;

    /**
     * @var float
     */
    public $taxPublish = 0.0;

    /**
     * @var float
     */
    public $avrNightPublishPrice = 0.0;

    /**
     * @var string
     */
    public $occupId = '';

    /**
     * @var float
     */
    public $occupPrice = 0.0;

    /**
     * @var float
     */
    public $tax = 0.0;

    /**
     * @var int
     */
    public $maxGuests = 0;

    /**
     * @var int
     */
    public $maxChild = 0;

    /**
     * @var float
     */
    public $avrNightPrice = 0.0;

    /**
     * @var float
     */
    public $occupPublishPrice = 0.0;

    /**
     * @var bool
     */
    public $isPublish = false;

    /**
     * @var string
     */
    public $bedding = '';

    /**
     * Occupancy constructor.
     * @param $object
     * @throws \Exception
     */
    public function __construct($object)
    {
        $this->PriceBreakdown = new ArrayOfPrice(null);
        $this->TaxBreakdown = new ArrayOfTax(null);
        $this->TaxBreakdownPublish = new ArrayOfTax(null);
        $this->Rooms = new ArrayOfRoom(null);
        $this->SelctedSupplements = new ArrayOfSupplement(null);
        $this->BoardBases = new ArrayOfBoardbase(null);

        parent::__construct($object);
    }

    /**
     * @param $object
     * @return Occupancy
     */
    public static function enableDoc($object) {
        return $object;
    }
}