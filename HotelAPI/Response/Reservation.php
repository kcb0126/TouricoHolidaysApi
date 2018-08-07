<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:20 AM
 */

namespace HotelApi\Response;


use Exception;

class Reservation extends BaseObject
{
    /**
     * @var ArrayOfTax
     */
    public $TaxBreakdown;

    /**
     * @var string
     */
    public $ProductInfo;

    /**
     * @var int
     */
    public $reservationId;

    /**
     * @var string
     */
    public $fromDate;

    /**
     * @var string
     */
    public $toDate;

    /**
     * @var float
     */
    public $totalTax;

    /**
     * @var float
     */
    public $price;

    /**
     * @var float
     */
    public $totalPublishTax;

    /**
     * @var float
     */
    public $publishPrice;

    /**
     * @var bool
     */
    public $isPublish;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $numOfAdults;

    /**
     * @var int
     */
    public $numOfChildren;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $tranNum;

    /**
     * Reservation constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->TaxBreakdown = new ArrayOfTax(null);

        parent::__construct($object);
    }
}