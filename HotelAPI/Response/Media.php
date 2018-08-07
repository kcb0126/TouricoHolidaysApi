<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/7/2018
 * Time: 8:11 PM
 */

namespace HotelApi\Response;


use Exception;

class Media extends BaseObject
{
    /**
     * @var ArrayOfImage
     */
    public $Images;

    /**
     * @var ArrayOfMovie
     */
    public $Movies;

    /**
     * Media constructor.
     * @param $object
     * @throws Exception
     */
    public function __construct($object)
    {
        $this->Images = new ArrayOfImage(null);
        $this->Movies = new ArrayOfMovie(null);

        parent::__construct($object);
    }
}