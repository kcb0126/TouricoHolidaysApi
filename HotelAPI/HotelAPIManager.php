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

require_once('Request/AmendRoomReserveInfo.php');
require_once('Request/ArrayOfChildAge.php');
require_once('Request/ArrayOfDestinationIdInfo.php');
require_once('Request/ArrayOfFeature.php');
require_once('Request/ArrayOfHotelID.php');
require_once('Request/ArrayOfHotelIdInfo.php');
require_once('Request/ArrayOfInt.php');
require_once('Request/ArrayOfReservationType.php');
require_once('Request/ArrayOfRoomInfo.php');
require_once('Request/ArrayOfRoomReserveInfo.php');
require_once('Request/ArrayOfSuppAges.php');
require_once('Request/ArrayOfSupplementInfo.php');
require_once('Request/BookHotelV3.php');
require_once('Request/BookV3Request.php');
require_once('Request/CheckAvailabilityAndPrices.php');
require_once('Request/ChildAge.php');
require_once('Request/ClientCreditCardInfo.php');
require_once('Request/ContactPassenger.php');
require_once('Request/CostAmend.php');
require_once('Request/CostAmendRequest.php');
require_once('Request/CyberSourceParams.php');
require_once('Request/DestinationIdInfo.php');
require_once('Request/Feature.php');
require_once('Request/GetHotelDetailsV3.php');
require_once('Request/HotelID.php');
require_once('Request/HotelIdInfo.php');
require_once('Request/ReservationType.php');
require_once('Request/RoomInfo.php');
require_once('Request/RoomReserveInfo.php');
require_once('Request/SearchHotels.php');
require_once('Request/SearchHotelsByDestinationIds.php');
require_once('Request/SearchHotelsByDestinationIdsRequest.php');
require_once('Request/SearchHotelsById.php');
require_once('Request/SearchHotelsByIdRequest.php');
require_once('Request/SearchRequest.php');
require_once('Request/SelectedBoardBase.php');
require_once('Request/SuppAges.php');
require_once('Request/SupplementInfo.php');

require_once('Response/BaseArray.php');
require_once('Response/BaseObject.php');

require_once('Response/AmendInfo.php');
require_once('Response/AmendResult.php');
require_once('Response/AmendRoomExtraInfo.php');
require_once('Response/Amenity.php');
require_once('Response/AmountPercentType.php');
require_once('Response/ArrayOfAmenity.php');
require_once('Response/ArrayOfAvailability.php');
require_once('Response/ArrayOfBoardbase.php');
require_once('Response/ArrayOfCancelPenaltyType.php');
require_once('Response/ArrayOfChildAge.php');
require_once('Response/ArrayOfDescription.php');
require_once('Response/ArrayOfFormattedTextType.php');
require_once('Response/ArrayOfHotel.php');
require_once('Response/ArrayOfImage.php');
require_once('Response/ArrayOfMovie.php');
require_once('Response/ArrayOfOccupancy.php');
require_once('Response/ArrayOfOption.php');
require_once('Response/ArrayOfParagraphType.php');
require_once('Response/ArrayOfPrice.php');
require_once('Response/ArrayOfReservation.php');
require_once('Response/ArrayOfReservationResType.php');
require_once('Response/ArrayOfRoom.php');
require_once('Response/ArrayOfRoomType.php');
require_once('Response/ArrayOfSupplement.php');
require_once('Response/ArrayOfTax.php');
require_once('Response/Availability.php');
require_once('Response/BillingType.php');
require_once('Response/Boardbase.php');
require_once('Response/BoardBaseType.php');
require_once('Response/BookHotelV3Response.php');
require_once('Response/BookInfo.php');
require_once('Response/CancellationPoliciesType.php');
require_once('Response/CancelPenaltyType.php');
require_once('Response/CheckAvailabilityAndPricesResponse.php');
require_once('Response/ChildAge.php');
require_once('Response/CostAmendResponse.php');
require_once('Response/Description.php');
require_once('Response/Descriptions.php');
require_once('Response/DrivingDirections.php');
require_once('Response/FormattedTextType.php');
require_once('Response/FreeTextShortDescription.php');
require_once('Response/GetHotelDetailsV3Response.php');
require_once('Response/GetHotelDetailsV3Result.php');
require_once('Response/Home.php');
require_once('Response/Hotel.php');
require_once('Response/Hotel_1.php');
require_once('Response/HotelExtraInfo.php');
require_once('Response/HotelLocation.php');
require_once('Response/HotelPolicyType.php');
require_once('Response/Image.php');
require_once('Response/Location.php');
require_once('Response/LongDescription.php');
require_once('Response/Media.php');
require_once('Response/Movie.php');
require_once('Response/Occupancy.php');
require_once('Response/Option.php');
require_once('Response/ParagraphType.php');
require_once('Response/Passenger.php');
require_once('Response/PolicyType.php');
require_once('Response/Price.php');
require_once('Response/PriceType.php');
require_once('Response/Promotion.php');
require_once('Response/RefPoints.php');
require_once('Response/Reservation.php');
require_once('Response/ReservationResType.php');
require_once('Response/ResGroup.php');
require_once('Response/ResGroupType.php');
require_once('Response/RGInfoResults.php');
require_once('Response/Room.php');
require_once('Response/RoomInfo.php');
require_once('Response/RoomType.php');
require_once('Response/RoomTypePolicyType.php');
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

use HotelApi\Request\BookHotelV3;
use HotelApi\Request\CheckAvailabilityAndPrices;
use HotelApi\Request\CostAmend;
use HotelApi\Request\GetHotelDetailsV3;
use HotelApi\Request\SearchHotels;
use HotelApi\Request\SearchHotelsByDestinationIds;
use HotelApi\Request\SearchHotelsById;

use HotelApi\Response\BookHotelV3Response;
use HotelApi\Response\CheckAvailabilityAndPricesResponse;
use HotelApi\Response\CostAmendResponse;
use HotelApi\Response\GetHotelDetailsV3Response;
use HotelApi\Response\SearchHotelsByDestinationIdsResponse;
use HotelApi\Response\SearchHotelsByIdResponse;
use HotelApi\Response\SearchHotelsResponse;

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
    public function __construct($LoginName, $Password, $Culture = 'en_US', $Version = 8)
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
     * @return GetHotelDetailsV3Response
     * @throws Exception
     */
    public function GetHotelDetailsV3(GetHotelDetailsV3 $GetHotelDetailsV3) {
        $object = $this->soapClient->__soapCall(
            'GetHotelDetailsV3',
            array($GetHotelDetailsV3->toArray())
        );

        $getHotelDetailsV3Response = new GetHotelDetailsV3Response($object);

        return $getHotelDetailsV3Response;
    }

    /**
     * @param CheckAvailabilityAndPrices $CheckAvailabilityAndPrices
     * @return CheckAvailabilityAndPricesResponse
     * @throws Exception
     */
    public function CheckAvailabilityAndPrices(CheckAvailabilityAndPrices $CheckAvailabilityAndPrices) {
        $object = $this->soapClient->__soapCall(
            'CheckAvailabilityAndPrices',
            array($CheckAvailabilityAndPrices->toArray())
        );

        $checkAvailabilityAndPricesResponse = new CheckAvailabilityAndPricesResponse($object);

        return $checkAvailabilityAndPricesResponse;
    }

    /**
     * @param BookHotelV3 $BookHotelV3
     * @return BookHotelV3Response
     * @throws Exception
     */
    public function BookHotelV3(BookHotelV3 $BookHotelV3) {
        $object = $this->soapClient->__soapCall(
            'BookHotelV3',
            array($BookHotelV3->toArray())
        );

        $bookHotelV3Response = new BookHotelV3Response($object);

        return $bookHotelV3Response;
    }

    /**
     * @param CostAmend $CostAmend
     * @return CostAmendResponse
     * @throws Exception
     */
    public function CostAmend(CostAmend $CostAmend) {
        $array = array($CostAmend->toArray());

        $object = $this->soapClient->__soapCall(
            'CostAmend',
            array($CostAmend->toArray())
        );

        $costAmendResponse = new CostAmendResponse($object);

        return $costAmendResponse;
    }
}