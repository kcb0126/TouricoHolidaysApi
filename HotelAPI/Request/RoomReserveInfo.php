<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 1:36 AM
 */

namespace HotelApi\Request;


class RoomReserveInfo extends BaseObject
{
    /**
     * @var int
     */
    public $RoomId;

    /**
     * @var ContactPassenger
     */
    public $ContactPassenger;

    /**
     * @var SelectedBoardBase
     */
    public $SelectedBoardBase;

    /**
     * @var ArrayOfSupplementInfo
     */
    public $SelectedSupplements;

    /**
     * @var string
     */
    public $Bedding;

    /**
     * @var string
     */
    public $Note;

    /**
     * @var int
     */
    public $AdultNum;

    /**
     * @var int
     */
    public $ChildNum;

    /**
     * @var ArrayOfChildAge
     */
    public $ChildAges;

    /**
     * RoomReserveInfo constructor.
     * @param int $RoomId
     * @param ContactPassenger $ContactPassenger
     * @param SelectedBoardBase $SelectedBoardBase
     * @param ArrayOfSupplementInfo $SelectedSupplements
     * @param string $Bedding
     * @param string $Note
     * @param int $AdultNum
     * @param int $ChildNum
     * @param ArrayOfChildAge $ChildAges
     */
    public function __construct(
        int $RoomId
        , ContactPassenger $ContactPassenger
        , SelectedBoardBase $SelectedBoardBase
        , ArrayOfSupplementInfo $SelectedSupplements
        , string $Bedding
        , string $Note
        , int $AdultNum
        , int $ChildNum
        , ArrayOfChildAge $ChildAges
    )
    {
        $this->RoomId = $RoomId;
        $this->ContactPassenger = $ContactPassenger;
        $this->SelectedBoardBase = $SelectedBoardBase;
        $this->SelectedSupplements = $SelectedSupplements;
        $this->Bedding = $Bedding;
        $this->Note = $Note;
        $this->AdultNum = $AdultNum;
        $this->ChildNum = $ChildNum;
        $this->ChildAges = $ChildAges;
    }
}