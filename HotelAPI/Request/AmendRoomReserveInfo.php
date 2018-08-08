<?php
/**
 * Created by PhpStorm.
 * User: kcb01
 * Date: 8/8/2018
 * Time: 4:58 AM
 */

namespace HotelApi\Request;


class AmendRoomReserveInfo extends BaseObject
{
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
    public $Note;

    /**
     * AmendRoomReserveInfo constructor.
     * @param ContactPassenger $ContactPassenger
     * @param SelectedBoardBase $SelectedBoardBase
     * @param ArrayOfSupplementInfo $SelectedSupplements
     * @param string $Note
     */
    public function __construct(
        ContactPassenger $ContactPassenger
        , SelectedBoardBase $SelectedBoardBase
        , ArrayOfSupplementInfo $SelectedSupplements
        , string $Note
    )
    {
        $this->ContactPassenger = $ContactPassenger;
        $this->SelectedBoardBase = $SelectedBoardBase;
        $this->SelectedSupplements = $SelectedSupplements;
        $this->Note = $Note;
    }
}