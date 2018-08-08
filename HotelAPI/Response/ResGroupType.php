<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 3:29 PM
 */

namespace HotelApi\Response;


use Exception;

class ResGroupType extends BaseObject
{
    /**
     * @var ArrayOfReservationResType
     */
    public $Reservation;

    /**
     * @var BillingType
     */
    public $Billing;

    /**
     * @var int
     */
    public $rGID;

    /**
     * @var string
     */
    public $rgldRefNum;

    /**
     * ResGroupType constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->Reservation = new ArrayOfReservationResType(null);
        $this->Billing = new BillingType(null);

        parent::__construct($object);
    }
}