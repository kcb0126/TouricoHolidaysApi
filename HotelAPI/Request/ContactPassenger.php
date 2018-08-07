<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 1:38 AM
 */

namespace HotelApi\Request;


class ContactPassenger extends BaseObject
{
    /**
     * @var string
     */
    public $FirstName;

    /**
     * @var string
     */
    public $MiddleName;

    /**
     * @var string
     */
    public $LastName;

    /**
     * @var string
     */
    public $HomePhone;

    /**
     * @var string
     */
    public $MobilePhone;

    /**
     * ContactPassenger constructor.
     * @param string $FirstName
     * @param string $MiddleName
     * @param string $LastName
     * @param string $HomePhone
     * @param string $MobilePhone
     */
    public function __construct(
        string $FirstName
        , string $MiddleName
        , string $LastName
        , string $HomePhone
        , string $MobilePhone
    )
    {
        $this->FirstName = $FirstName;
        $this->MiddleName = $MiddleName;
        $this->LastName = $LastName;
        $this->HomePhone = $HomePhone;
        $this->MobilePhone = $MobilePhone;
    }
}