<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:54 PM
 */

namespace HotelApi\Response;


use Exception;

class CancelPenaltyType extends BaseObject
{
    /**
     * @var DeadlineType
     */
    public $Deadline;

    /**
     * @var AmountPercentType
     */
    public $AmountPercent;

    /**
     * @var ArrayOfParagraphType
     */
    public $PenaltyDescription;

    /**
     * @var string
     */
    public $confirmClassCode;

    /**
     * @var string
     */
    public $policyCode;

    /**
     * @var
     */
    public $nonRefundable;

    /**
     * CancelPenaltyType constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->Deadline = new DeadlineType(null);
        $this->AmountPercent = new AmountPercentType(null);
        $this->PenaltyDescription = new ArrayOfParagraphType(null);

        parent::__construct($object);
    }
}