<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/3/2018
 * Time: 3:29 AM
 */

namespace HotelApi;

require_once('Request/BaseObject.php');
require_once('Request/BaseArray.php');

require_once('Request/ArrayOfChildAge.php');
require_once('Request/ArrayOfFeature.php');
require_once('Request/ArrayOfHotelIdInfo.php');
require_once('Request/ArrayOfRoomInfo.php');
require_once('Request/ChildAge.php');
require_once('Request/Feature.php');
require_once('Request/HotelIdInfo.php');
require_once('Request/RoomInfo.php');
require_once('Request/SearchHotels.php');
require_once('Request/SearchHotelsById.php');
require_once('Request/SearchHotelsByIdRequest.php');
require_once('Request/SearchRequest.php');

require_once('Response/BaseArray.php');
 require_once('Response/BaseObject.php');

require_once('Response/ArrayOfAvailability.php');
require_once('Response/ArrayOfBoardbase.php');
require_once('Response/ArrayOfHotel.php');
require_once('Response/ArrayOfOccupancy.php');
require_once('Response/ArrayOfPrice.php');
require_once('Response/ArrayOfRoom.php');
require_once('Response/ArrayOfRoomType.php');
require_once('Response/ArrayOfSupplement.php');
require_once('Response/ArrayOfTax.php');
require_once('Response/Availability.php');
require_once('Response/Boardbase.php');
require_once('Response/BookInfo.php');
require_once('Response/Hotel.php');
require_once('Response/HotelLocation.php');
require_once('Response/Occupancy.php');
require_once('Response/Price.php');
require_once('Response/Promotion.php');
require_once('Response/Room.php');
require_once('Response/RoomType.php');
require_once('Response/SearchHotelsByIdResponse.php');
require_once('Response/SearchHotelsResponse.php');
require_once('Response/SearchResult.php');
require_once('Response/Supplement.php');
require_once('Response/Tax.php');

use Exception;
use SoapClient;
use SoapHeader;

use HotelApi\Request\ArrayOfChildAge;
use HotelApi\Request\ArrayOfFeature;
use HotelApi\Request\ArrayOfHotelIdInfo;
use HotelApi\Request\ArrayOfRoomInfo;
use HotelApi\Request\ChildAge;
use HotelApi\Request\Feature;
use HotelApi\Request\HotelIdInfo;
use HotelApi\Request\RoomInfo;
use HotelApi\Request\SearchHotels;
use HotelApi\Request\SearchHotelsById;
use HotelApi\Request\SearchHotelsByIdRequest;
use HotelApi\Request\SearchRequest;

use HotelApi\Response\ArrayOfAvailability;
use HotelApi\Response\ArrayOfBoardbase;
use HotelApi\Response\ArrayOfHotel;
use HotelApi\Response\ArrayOfOccupancy;
use HotelApi\Response\ArrayOfPrice;
use HotelApi\Response\ArrayOfRoom;
use HotelApi\Response\ArrayOfRoomType;
use HotelApi\Response\ArrayOfSupplement;
use HotelApi\Response\ArrayOfTax;
use HotelApi\Response\Availability;
use HotelApi\Response\Boardbase;
use HotelApi\Response\BookInfo;
use HotelApi\Response\Hotel;
use HotelApi\Response\HotelLocation;
use HotelApi\Response\Occupancy;
use HotelApi\Response\Price;
use HotelApi\Response\Promotion;
use HotelApi\Response\Room;
use HotelApi\Response\RoomType;
use HotelApi\Response\SearchHotelsByIdResponse;
use HotelApi\Response\SearchHotelsResponse;
use HotelApi\Response\SearchResult;
use HotelApi\Response\Supplement;
use HotelApi\Response\Tax;

class HotelAPIManager
{
    const WSDL = 'http://demo-hotelws.touricoholidays.com/HotelFlow.svc?wsdl';

    const CLIENT_NAMESPACE = 'http://schemas.tourico.com/webservices/hotelv3';

    const AUTH_NAMESPACE = 'http://schemas.tourico.com/webservices/authentication';

    /**
     * @var SoapClient
     */
    private $soapClient;

    /**
     * HotelAPIManager constructor.
     * @param string $LoginName
     * @param string $Password
     * @param string $Culture
     * @param int $Version
     */
    public function __construct($LoginName, $Password, $Culture = 'en_US', $Version = 5)
    {
        $this->soapClient = new SoapClient(self::WSDL, array('uri' => self::CLIENT_NAMESPACE));

        $authBody = array(
            'LoginName' => $LoginName,
            'Password' => $Password,
            'Culture' => $Culture,
            'Version' => $Version
        );

        $authHeader = new SoapHeader(self::AUTH_NAMESPACE, 'AuthenticationHeader', $authBody);

        $this->soapClient->__setSoapHeaders($authHeader);
    }

    /**
     * @param SearchHotels $SearchHotels
     * @return SearchHotelsResponse
     * @throws Exception
     */
    public function SearchHotels(SearchHotels $SearchHotels) {
        $object = $this->soapClient->__soapCall(
            'SearchHotels',
            array($SearchHotels->toArray())
        );

        $searchHotelsResponse = new SearchHotelsResponse($object);

        return $searchHotelsResponse;
    }

    /**
     * @param SearchHotelsById $SearchHotelsById
     * @return SearchHotelsByIdResponse
     * @throws Exception
     */
    public function SearchHotelsById(SearchHotelsById $SearchHotelsById) {
        $object = $this->soapClient->__soapCall(
            'SearchHotelsById',
            array($SearchHotelsById->toArray())
        );

        $searchHotelsByIdResponse = new SearchHotelsByIdResponse($object);

        return $searchHotelsByIdResponse;
    }
}