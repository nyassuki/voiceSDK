<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class RouteOutgoingRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $routeName;

    /**
     * @var string
     */
    private $device;

    /**
     * @var string
     */
    private $routeTo;

    /**
     * @var string
     */
    private $routeDetail;

    /**
     * @var string
     */
    private $routePrefix;

    /**
     * @param string $routeName
     * @param string $device
     * @param string $routeTo
     * @param string $routeDetail
     * @param string $routePrefix
     */
    public function __construct(
        string $routeName,
        string $device,
        string $routeTo,
        string $routeDetail,
        string $routePrefix
    ) {
        $this->routeName = $routeName;
        $this->device = $device;
        $this->routeTo = $routeTo;
        $this->routeDetail = $routeDetail;
        $this->routePrefix = $routePrefix;
    }

    /**
     * Returns Route Name.
     */
    public function getRouteName(): string
    {
        return $this->routeName;
    }

    /**
     * Sets Route Name.
     *
     * @required
     * @maps route_name
     */
    public function setRouteName(string $routeName): void
    {
        $this->routeName = $routeName;
    }

    /**
     * Returns Device.
     */
    public function getDevice(): string
    {
        return $this->device;
    }

    /**
     * Sets Device.
     *
     * @required
     * @maps device
     */
    public function setDevice(string $device): void
    {
        $this->device = $device;
    }

    /**
     * Returns Route To.
     */
    public function getRouteTo(): string
    {
        return $this->routeTo;
    }

    /**
     * Sets Route To.
     *
     * @required
     * @maps route_to
     */
    public function setRouteTo(string $routeTo): void
    {
        $this->routeTo = $routeTo;
    }

    /**
     * Returns Route Detail.
     */
    public function getRouteDetail(): string
    {
        return $this->routeDetail;
    }

    /**
     * Sets Route Detail.
     *
     * @required
     * @maps route_detail
     */
    public function setRouteDetail(string $routeDetail): void
    {
        $this->routeDetail = $routeDetail;
    }

    /**
     * Returns Route Prefix.
     */
    public function getRoutePrefix(): string
    {
        return $this->routePrefix;
    }

    /**
     * Sets Route Prefix.
     *
     * @required
     * @maps route_prefix
     */
    public function setRoutePrefix(string $routePrefix): void
    {
        $this->routePrefix = $routePrefix;
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
        $json['route_name']   = $this->routeName;
        $json['device']       = $this->device;
        $json['route_to']     = $this->routeTo;
        $json['route_detail'] = $this->routeDetail;
        $json['route_prefix'] = $this->routePrefix;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
