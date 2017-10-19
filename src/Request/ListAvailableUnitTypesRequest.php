<?php

namespace Rentlio\Api\Request;

class ListAvailableUnitTypesRequest extends AbstractRequest
{
    protected $dateFrom;
    protected $dateTo;
    protected $rooms;

    public function __construct($id)
    {
        parent::__construct("GET", "/properties/" . $id . "/unit-types/available");
    }

    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
    }

    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
    }

    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * @return array
     */
    public function getQueryParams()
    {
        return [
            'dateFrom' => $this->dateFrom,
            'dateTo'   => $this->dateTo,
            'rooms'    => $this->rooms
        ];
    }
}