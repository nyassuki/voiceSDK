<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class IntentQueryRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $aiName;

    /**
     * @var string
     */
    private $trainingPhrases;

    /**
     * @param string $aiName
     * @param string $trainingPhrases
     */
    public function __construct(string $aiName, string $trainingPhrases)
    {
        $this->aiName = $aiName;
        $this->trainingPhrases = $trainingPhrases;
    }

    /**
     * Returns Ai Name.
     */
    public function getAiName(): string
    {
        return $this->aiName;
    }

    /**
     * Sets Ai Name.
     *
     * @required
     * @maps ai_name
     */
    public function setAiName(string $aiName): void
    {
        $this->aiName = $aiName;
    }

    /**
     * Returns Training Phrases.
     */
    public function getTrainingPhrases(): string
    {
        return $this->trainingPhrases;
    }

    /**
     * Sets Training Phrases.
     *
     * @required
     * @maps training_phrases
     */
    public function setTrainingPhrases(string $trainingPhrases): void
    {
        $this->trainingPhrases = $trainingPhrases;
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
        $json['ai_name']          = $this->aiName;
        $json['training_phrases'] = $this->trainingPhrases;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
