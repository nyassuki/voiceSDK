<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class DeviceDeleteRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $extension;

    /**
     * @param string $extension
     */
    public function __construct(string $extension)
    {
        $this->extension = $extension;
    }

    /**
     * Returns Extension.
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * Sets Extension.
     *
     * @required
     * @maps extension
     */
    public function setExtension(string $extension): void
    {
        $this->extension = $extension;
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
        $json['extension'] = $this->extension;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
