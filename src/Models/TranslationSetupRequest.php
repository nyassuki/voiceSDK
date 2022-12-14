<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class TranslationSetupRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $fromNumber;

    /**
     * @var string
     */
    private $callerDidgateway;

    /**
     * @var string
     */
    private $calledDidgateway;

    /**
     * @var string
     */
    private $destinationNumber;

    /**
     * @var string
     */
    private $externalId;

    /**
     * @param string $fromNumber
     * @param string $callerDidgateway
     * @param string $calledDidgateway
     * @param string $destinationNumber
     * @param string $externalId
     */
    public function __construct(
        string $fromNumber,
        string $callerDidgateway,
        string $calledDidgateway,
        string $destinationNumber,
        string $externalId
    ) {
        $this->fromNumber = $fromNumber;
        $this->callerDidgateway = $callerDidgateway;
        $this->calledDidgateway = $calledDidgateway;
        $this->destinationNumber = $destinationNumber;
        $this->externalId = $externalId;
    }

    /**
     * Returns From Number.
     */
    public function getFromNumber(): string
    {
        return $this->fromNumber;
    }

    /**
     * Sets From Number.
     *
     * @required
     * @maps from_number
     */
    public function setFromNumber(string $fromNumber): void
    {
        $this->fromNumber = $fromNumber;
    }

    /**
     * Returns Caller Didgateway.
     */
    public function getCallerDidgateway(): string
    {
        return $this->callerDidgateway;
    }

    /**
     * Sets Caller Didgateway.
     *
     * @required
     * @maps caller_didgateway
     */
    public function setCallerDidgateway(string $callerDidgateway): void
    {
        $this->callerDidgateway = $callerDidgateway;
    }

    /**
     * Returns Called Didgateway.
     */
    public function getCalledDidgateway(): string
    {
        return $this->calledDidgateway;
    }

    /**
     * Sets Called Didgateway.
     *
     * @required
     * @maps called_didgateway
     */
    public function setCalledDidgateway(string $calledDidgateway): void
    {
        $this->calledDidgateway = $calledDidgateway;
    }

    /**
     * Returns Destination Number.
     */
    public function getDestinationNumber(): string
    {
        return $this->destinationNumber;
    }

    /**
     * Sets Destination Number.
     *
     * @required
     * @maps destination_number
     */
    public function setDestinationNumber(string $destinationNumber): void
    {
        $this->destinationNumber = $destinationNumber;
    }

    /**
     * Returns External Id.
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

    /**
     * Sets External Id.
     *
     * @required
     * @maps external_id
     */
    public function setExternalId(string $externalId): void
    {
        $this->externalId = $externalId;
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
        $json['from_number']        = $this->fromNumber;
        $json['caller_didgateway']  = $this->callerDidgateway;
        $json['called_didgateway']  = $this->calledDidgateway;
        $json['destination_number'] = $this->destinationNumber;
        $json['external_id']        = $this->externalId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
