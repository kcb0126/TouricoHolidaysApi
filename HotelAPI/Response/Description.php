<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 11:27 PM
 */

namespace HotelApi\Response;


class Description extends BaseObject
{
    /**
     * @var int
     */
    public $hotelID;

    /**
     * @var int
     */
    public $languageID;

    /**
     * @var int
     */
    public $templateID;

    /**
     * @var int
     */
    public $textFieldType;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $value;
}