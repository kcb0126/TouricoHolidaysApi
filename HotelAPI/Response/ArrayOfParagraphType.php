<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 5:05 PM
 */

namespace HotelApi\Response;


class ArrayOfParagraphType extends BaseArray
{
    protected $itemClass = 'HotelApi\Response\ParagraphType';

    /**
     * @var array of ParagraphType;
     */
    public $ParagraphType;
}