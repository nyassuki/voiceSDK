<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class AgentLoginRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $actionType;

    /**
     * @var string
     */
    private $agentCode;

    /**
     * @var string
     */
    private $extension;

    /**
     * @var string
     */
    private $agentPassword;

    /**
     * @param string $actionType
     * @param string $agentCode
     * @param string $extension
     * @param string $agentPassword
     */
    public function __construct(string $actionType, string $agentCode, string $extension, string $agentPassword)
    {
        $this->actionType = $actionType;
        $this->agentCode = $agentCode;
        $this->extension = $extension;
        $this->agentPassword = $agentPassword;
    }

    /**
     * Returns Action Type.
     */
    public function getActionType(): string
    {
        return $this->actionType;
    }

    /**
     * Sets Action Type.
     *
     * @required
     * @maps action_type
     */
    public function setActionType(string $actionType): void
    {
        $this->actionType = $actionType;
    }

    /**
     * Returns Agent Code.
     */
    public function getAgentCode(): string
    {
        return $this->agentCode;
    }

    /**
     * Sets Agent Code.
     *
     * @required
     * @maps agent_code
     */
    public function setAgentCode(string $agentCode): void
    {
        $this->agentCode = $agentCode;
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
     * Returns Agent Password.
     */
    public function getAgentPassword(): string
    {
        return $this->agentPassword;
    }

    /**
     * Sets Agent Password.
     *
     * @required
     * @maps agent_password
     */
    public function setAgentPassword(string $agentPassword): void
    {
        $this->agentPassword = $agentPassword;
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
        $json['action_type']    = $this->actionType;
        $json['agent_code']     = $this->agentCode;
        $json['extension']      = $this->extension;
        $json['agent_password'] = $this->agentPassword;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
