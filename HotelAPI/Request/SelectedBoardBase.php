<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 1:56 AM
 */

namespace HotelApi\Request;


class SelectedBoardBase extends BaseObject
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var float
     */
    public $Price;

    /**
     * SelectedBoardBase constructor.
     * @param int $Id
     * @param float $Price
     */
    public function __construct(int $Id, float $Price)
    {
        $this->Id = $Id;
        $this->Price = $Price;
    }
}