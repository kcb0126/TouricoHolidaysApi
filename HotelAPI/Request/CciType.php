<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 6:48 PM
 */

namespace HotelApi\Request;


class CciType extends BaseObject
{
    /**
     * @var
     */
    public $SecurityIssue;

    public function __construct(string $SecurityIssue)
    {
        $this->SecurityIssue = $SecurityIssue;
    }
}