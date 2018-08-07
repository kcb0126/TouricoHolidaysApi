<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 2:41 AM
 */

namespace HotelApi\Request;


class ClientCreditCardInfo extends BaseObject
{
    /**
     * @var CyberSourceParams
     */
    public $System;

    /**
     * @var string
     */
    public $CreditCardToken;

    public function __construct(CyberSourceParams $System, string $CreditCardToken)
    {
        $this->System = $System;
        $this->CreditCardToken = $CreditCardToken;
    }
}