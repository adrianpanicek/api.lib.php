<?php

namespace Rentlio\Api\Request;

/**
 * Class GetInvoicesByReservation
 * @package Rentlio\Api\Request
 *
 * GET Request for listing invoices associated with the reservation
 * https://docs.rentl.io/#invoices-get-invoices-by-reservation
 */
class GetReservationDetailsRequest extends AbstractRequest
{
    public function __construct($id)
    {
        parent::__construct("GET", "/reservations/" . $id . "/details");
    }

    /**
     * @return array
     */
    public function getQueryParams()
    {
        return [];
    }
}