<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class QueueDeleteRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $queueName;

    /**
     * @param string $queueName
     */
    public function __construct(string $queueName)
    {
        $this->queueName = $queueName;
    }

    /**
     * Returns Queue Name.
     */
    public function getQueueName(): string
    {
        return $this->queueName;
    }

    /**
     * Sets Queue Name.
     *
     * @required
     * @maps queue_name
     */
    public function setQueueName(string $queueName): void
    {
        $this->queueName = $queueName;
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
        $json['queue_name'] = $this->queueName;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
