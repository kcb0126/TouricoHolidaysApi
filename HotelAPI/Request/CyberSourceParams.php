<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 2:42 AM
 */

namespace HotelApi\Request;


class CyberSourceParams extends BaseObject
{
    /**
     * @var string
     */
    public $UserId;

    /**
     * @var string
     */
    public $DomainName;

    /**
     * @var string
     */
    public $HttpBrowserCookiesAccepted;

    /**
     * @var string
     */
    public $HttpBrowserType;

    /**
     * @var string
     */
    public $IpAddress;

    /**
     * @var string
     */
    public $HttpBrowserEmail;

    /**
     * CyberSourceParams constructor.
     * @param string $UserId
     * @param string $DomainName
     * @param string $HttpBrowserCookiesAccepted
     * @param string $HttpBrowserType
     * @param string $IpAddress
     * @param string $HttpBrowserEmail
     */
    public function __construct(
        string $UserId
        , string $DomainName
        , string $HttpBrowserCookiesAccepted
        , string $HttpBrowserType
        , string $IpAddress
        , string $HttpBrowserEmail
    )
    {
        $this->UserId = $UserId;
        $this->DomainName = $DomainName;
        $this->HttpBrowserCookiesAccepted = $HttpBrowserCookiesAccepted;
        $this->HttpBrowserType = $HttpBrowserType;
        $this->IpAddress = $IpAddress;
        $this->HttpBrowserEmail = $HttpBrowserEmail;
    }
}