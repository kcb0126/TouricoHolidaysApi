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
require_once('Request/ArrayOfDestinationIdInfo.php');
require_once('Request/ArrayOfFeature.php');
require_once('Request/ArrayOfHotelID.php');
require_once('Request/ArrayOfHotelIdInfo.php');
require_once('Request/ArrayOfRoomInfo.php');
require_once('Request/ChildAge.php');
require_once('Request/DestinationIdInfo.php');
require_once('Request/Feature.php');
require_once('Request/GetHotelDetailsV3.php');
require_once('Request/HotelID.php');
require_once('Request/HotelIdInfo.php');
require_once('Request/RoomInfo.php');
require_once('Request/SearchHotels.php');
require_once('Request/SearchHotelsByDestinationIds.php');
require_once('Request/SearchHotelsByDestinationIdsRequest.php');
require_once('Request/SearchHotelsById.php');
require_once('Request/SearchHotelsByIdRequest.php');
require_once('Request/SearchRequest.php');

require_once('Response/BaseArray.php');
require_once('Response/BaseObject.php');

require_once('Response/Amenity.php');
require_once('Response/ArrayOfAmenity.php');
require_once('Response/ArrayOfAvailability.php');
require_once('Response/ArrayOfBoardbase.php');
require_once('Response/ArrayOfDescription.php');
require_once('Response/ArrayOfHotel.php');
require_once('Response/ArrayOfImage.php');
require_once('Response/ArrayOfMovie.php');
require_once('Response/ArrayOfOccupancy.php');
require_once('Response/ArrayOfOption.php');
require_once('Response/Option.php');
require_once('Response/ArrayOfPrice.php');
require_once('Response/ArrayOfRoom.php');
require_once('Response/ArrayOfRoomType.php');
require_once('Response/ArrayOfSupplement.php');
require_once('Response/ArrayOfTax.php');
require_once('Response/Availability.php');
require_once('Response/Boardbase.php');
require_once('Response/BookInfo.php');
require_once('Response/Description.php');
require_once('Response/Descriptions.php');
require_once('Response/DrivingDirections.php');
require_once('Response/FreeTextShortDescription.php');
require_once('Response/GetHotelDetailsV3Response.php');
require_once('Response/GetHotelDetailsV3Result.php');
require_once('Response/Home.php');
require_once('Response/Hotel.php');
require_once('Response/Hotel_1.php');
require_once('Response/HotelLocation.php');
require_once('Response/Image.php');
require_once('Response/Location.php');
require_once('Response/LongDescription.php');
require_once('Response/Media.php');
require_once('Response/Movie.php');
require_once('Response/Occupancy.php');
require_once('Response/Option.php');
require_once('Response/Price.php');
require_once('Response/Promotion.php');
require_once('Response/RefPoints.php');
require_once('Response/Room.php');
require_once('Response/RoomType.php');
require_once('Response/SearchHotelsByDestinationIdsResponse.php');
require_once('Response/SearchHotelsByIdResponse.php');
require_once('Response/SearchHotelsResponse.php');
require_once('Response/SearchResult.php');
require_once('Response/ShortDescription.php');
require_once('Response/StatusCode.php');
require_once('Response/Supplement.php');
require_once('Response/Tax.php');
require_once('Response/TWS_HotelDetailsV3.php');

use Exception;
use SoapClient;
use SoapHeader;

use HotelApi\Request\ArrayOfChildAge;
use HotelApi\Request\ArrayOfDestinationIdInfo;
use HotelApi\Request\ArrayOfFeature;
use HotelApi\Request\ArrayOfHotelID;
use HotelApi\Request\ArrayOfHotelIdInfo;
use HotelApi\Request\ArrayOfRoomInfo;
use HotelApi\Request\ChildAge;
use HotelApi\Request\DestinationIdInfo;
use HotelApi\Request\Feature;
use HotelApi\Request\GetHotelDetailsV3;
use HotelApi\Request\HotelID;
use HotelApi\Request\HotelIdInfo;
use HotelApi\Request\RoomInfo;
use HotelApi\Request\SearchHotels;
use HotelApi\Request\SearchHotelsByDestinationIds;
use HotelApi\Request\SearchHotelsByDestinationIdsRequest;
use HotelApi\Request\SearchHotelsById;
use HotelApi\Request\SearchHotelsByIdRequest;
use HotelApi\Request\SearchRequest;

use HotelApi\Response\Amenity;
use HotelApi\Response\ArrayOfAmenity;
use HotelApi\Response\ArrayOfAvailability;
use HotelApi\Response\ArrayOfBoardbase;
use HotelApi\Response\ArrayOfDescription;
use HotelApi\Response\ArrayOfHotel;
use HotelApi\Response\ArrayOfImage;
use HotelApi\Response\ArrayOfOccupancy;
use HotelApi\Response\ArrayOfOption;
use HotelApi\Response\ArrayOfPrice;
use HotelApi\Response\ArrayOfRoom;
use HotelApi\Response\ArrayOfRoomType;
use HotelApi\Response\ArrayOfSupplement;
use HotelApi\Response\ArrayOfTax;
use HotelApi\Response\Availability;
use HotelApi\Response\Boardbase;
use HotelApi\Response\BookInfo;
use HotelApi\Response\Description;
use HotelApi\Response\Descriptions;
use HotelApi\Response\DrivingDirections;
use HotelApi\Response\FreeTextShortDescription;
use HotelApi\Response\GetHotelDetailsV3Response;
use HotelApi\Response\GetHotelDetailsV3Result;
use HotelApi\Response\Home;
use HotelApi\Response\Hotel;
use HotelApi\Response\Hotel_1;
use HotelApi\Response\HotelLocation;
use HotelApi\Response\Image;
use HotelApi\Response\Location;
use HotelApi\Response\LongDescription;
use HotelApi\Response\Media;
use HotelApi\Response\Movie;
use HotelApi\Response\Occupancy;
use HotelApi\Response\Option;
use HotelApi\Response\Price;
use HotelApi\Response\Promotion;
use HotelApi\Response\RefPoints;
use HotelApi\Response\Room;
use HotelApi\Response\RoomType;
use HotelApi\Response\SearchHotelsByDestinationIdsResponse;
use HotelApi\Response\SearchHotelsByIdResponse;
use HotelApi\Response\SearchHotelsResponse;
use HotelApi\Response\SearchResult;
use HotelApi\Response\ShortDescription;
use HotelApi\Response\StatusCode;
use HotelApi\Response\Supplement;
use HotelApi\Response\Tax;
use HotelApi\Response\TWS_HotelDetailsV3;

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

    /**
     * @param SearchHotelsByDestinationIds $SearchHotelsByDestinationIds
     * @return SearchHotelsByDestinationIdsResponse
     * @throws Exception
     */
    public function SearchHotelsByDestinationIds(SearchHotelsByDestinationIds $SearchHotelsByDestinationIds) {
        $object = $this->soapClient->__soapCall(
            'SearchHotelsByDestinationIds',
            array($SearchHotelsByDestinationIds->toArray())
        );

        $searchHotelsByDestinationIdsResponse = new SearchHotelsByDestinationIdsResponse($object);

        return $searchHotelsByDestinationIdsResponse;
    }

    /**
     * @param GetHotelDetailsV3 $GetHotelDetailsV3
     * @throws Exception
     */
    public function GetHotelDetailsV3(GetHotelDetailsV3 $GetHotelDetailsV3) {
        $object = $this->soapClient->__soapCall(
            'GetHotelDetailsV3',
            array('GetHotelDetailsV3' => $GetHotelDetailsV3->toArray())
        );

        $getHotelDetailsV3Response = new GetHotelDetailsV3Response($object);

        return $getHotelDetailsV3Response;
    }
}