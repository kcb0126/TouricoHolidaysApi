<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/2/2018
 * Time: 5:53 AM
 */

namespace HotelApi\Request;

class ArrayOfFeature extends BaseArray
{
    /**
     * @var array of Feature
     */
    public $Feature;

    /**
     * ArrayOfFeature constructor.
     * @param array $arr_of_Feature
     */
    public function __construct(array $arr_of_Feature)
    {
        $this->Feature = $arr_of_Feature;
    }

}