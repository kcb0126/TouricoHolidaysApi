<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 1:59 AM
 */

namespace HotelApi\Request;


class SupplementInfo extends BaseObject
{
    /**
     * @var ArrayOfSuppAges
     */
    public $SupAgeGroup;

    /**
     * @var int
     */
    public $suppId;

    /**
     * @var float
     */
    public $supTotalPrice;

    /**
     * @var int
     */
    public $suppType;

    /**
     * SupplementInfo constructor.
     * @param ArrayOfSuppAges|null $SupAgeGroup
     * @param int $suppId
     * @param float $supTotalPrice
     * @param int $suppType
     */
    public function __construct(
        /*ArrayOfSuppAges*/ $SupAgeGroup
        , int $suppId
        , float $supTotalPrice
        , int $suppType
    )
    {
        $this->SupAgeGroup = $SupAgeGroup;
        $this->suppId = $suppId;
        $this->supTotalPrice = $supTotalPrice;
        $this->suppType = $suppType;
    }
}