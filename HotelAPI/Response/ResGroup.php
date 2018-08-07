<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:16 AM
 */

namespace HotelApi\Response;


use Exception;

class ResGroup extends BaseObject
{
    /**
     * @var ArrayOfReservation
     */
    public $Reservations;

    /**
     * @var int
     */
    public $tranNum;

    /**
     * @var string
     */
    public $rgRemark;

    /**
     * @var int
     */
    public $rgId;

    /**
     * @var bool
     */
    public $isPackage;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $totalPrice;

    /**
     * @var float
     */
    public $totalPublishPrice;

    /**
     * ResGroup constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->Reservations = new ArrayOfReservation(null);

        parent::__construct($object);
    }
}