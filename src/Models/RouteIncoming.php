<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class RouteIncoming implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $reponse;

    /**
     * @var string
     */
    private $did;

    /**
     * @var string
     */
    private $destination;

    /**
     * @var string
     */
    private $destinationDetail;

    /**
     * @param bool $reponse
     * @param string $did
     * @param string $destination
     * @param string $destinationDetail
     */
    public function __construct(bool $reponse, string $did, string $destination, string $destinationDetail)
    {
        $this->reponse = $reponse;
        $this->did = $did;
        $this->destination = $destination;
        $this->destinationDetail = $destinationDetail;
    }

    /**
     * Returns Reponse.
     */
    public function getReponse(): bool
    {
        return $this->reponse;
    }

    /**
     * Sets Reponse.
     *
     * @required
     * @maps reponse
     */
    public function setReponse(bool $reponse): void
    {
        $this->reponse = $reponse;
    }

    /**
     * Returns Did.
     */
    public function getDid(): string
    {
        return $this->did;
    }

    /**
     * Sets Did.
     *
     * @required
     * @maps did
     */
    public function setDid(string $did): void
    {
        $this->did = $did;
    }

    /**
     * Returns Destination.
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * Sets Destination.
     *
     * @required
     * @maps destination
     */
    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * Returns Destination Detail.
     */
    public function getDestinationDetail(): string
    {
        return $this->destinationDetail;
    }

    /**
     * Sets Destination Detail.
     *
     * @required
     * @maps destination_detail
     */
    public function setDestinationDetail(string $destinationDetail): void
    {
        $this->destinationDetail = $destinationDetail;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['reponse']            = $this->reponse;
        $json['did']                = $this->did;
        $json['destination']        = $this->destination;
        $json['destination_detail'] = $this->destinationDetail;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
