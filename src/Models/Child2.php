<?php

declare(strict_types=1);

/*
 * VoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceAPILib\Models;

use stdClass;

class Child2 implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $customerCode;

    /**
     * @var string
     */
    private $ivrName;

    /**
     * @var string
     */
    private $ivrTitle;

    /**
     * @var int
     */
    private $ivrParent;

    /**
     * @var string
     */
    private $ivrText;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var int
     */
    private $keyPressed;

    /**
     * @var string
     */
    private $exitKey;

    /**
     * @var int
     */
    private $backMenu;

    /**
     * @var string
     */
    private $mainMenu;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $actionDetail;

    /**
     * @var int
     */
    private $trying;

    /**
     * @var int
     */
    private $isActive;

    /**
     * @param int $id
     * @param string $customerCode
     * @param string $ivrName
     * @param string $ivrTitle
     * @param int $ivrParent
     * @param string $ivrText
     * @param string $language
     * @param string $gender
     * @param int $keyPressed
     * @param string $exitKey
     * @param int $backMenu
     * @param string $mainMenu
     * @param string $action
     * @param string $actionDetail
     * @param int $trying
     * @param int $isActive
     */
    public function __construct(
        int $id,
        string $customerCode,
        string $ivrName,
        string $ivrTitle,
        int $ivrParent,
        string $ivrText,
        string $language,
        string $gender,
        int $keyPressed,
        string $exitKey,
        int $backMenu,
        string $mainMenu,
        string $action,
        string $actionDetail,
        int $trying,
        int $isActive
    ) {
        $this->id = $id;
        $this->customerCode = $customerCode;
        $this->ivrName = $ivrName;
        $this->ivrTitle = $ivrTitle;
        $this->ivrParent = $ivrParent;
        $this->ivrText = $ivrText;
        $this->language = $language;
        $this->gender = $gender;
        $this->keyPressed = $keyPressed;
        $this->exitKey = $exitKey;
        $this->backMenu = $backMenu;
        $this->mainMenu = $mainMenu;
        $this->action = $action;
        $this->actionDetail = $actionDetail;
        $this->trying = $trying;
        $this->isActive = $isActive;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Customer Code.
     */
    public function getCustomerCode(): string
    {
        return $this->customerCode;
    }

    /**
     * Sets Customer Code.
     *
     * @required
     * @maps customer_code
     */
    public function setCustomerCode(string $customerCode): void
    {
        $this->customerCode = $customerCode;
    }

    /**
     * Returns Ivr Name.
     */
    public function getIvrName(): string
    {
        return $this->ivrName;
    }

    /**
     * Sets Ivr Name.
     *
     * @required
     * @maps ivr_name
     */
    public function setIvrName(string $ivrName): void
    {
        $this->ivrName = $ivrName;
    }

    /**
     * Returns Ivr Title.
     */
    public function getIvrTitle(): string
    {
        return $this->ivrTitle;
    }

    /**
     * Sets Ivr Title.
     *
     * @required
     * @maps ivr_title
     */
    public function setIvrTitle(string $ivrTitle): void
    {
        $this->ivrTitle = $ivrTitle;
    }

    /**
     * Returns Ivr Parent.
     */
    public function getIvrParent(): int
    {
        return $this->ivrParent;
    }

    /**
     * Sets Ivr Parent.
     *
     * @required
     * @maps ivr_parent
     */
    public function setIvrParent(int $ivrParent): void
    {
        $this->ivrParent = $ivrParent;
    }

    /**
     * Returns Ivr Text.
     */
    public function getIvrText(): string
    {
        return $this->ivrText;
    }

    /**
     * Sets Ivr Text.
     *
     * @required
     * @maps ivr_text
     */
    public function setIvrText(string $ivrText): void
    {
        $this->ivrText = $ivrText;
    }

    /**
     * Returns Language.
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * Sets Language.
     *
     * @required
     * @maps language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * Returns Gender.
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * Sets Gender.
     *
     * @required
     * @maps gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * Returns Key Pressed.
     */
    public function getKeyPressed(): int
    {
        return $this->keyPressed;
    }

    /**
     * Sets Key Pressed.
     *
     * @required
     * @maps key_pressed
     */
    public function setKeyPressed(int $keyPressed): void
    {
        $this->keyPressed = $keyPressed;
    }

    /**
     * Returns Exit Key.
     */
    public function getExitKey(): string
    {
        return $this->exitKey;
    }

    /**
     * Sets Exit Key.
     *
     * @required
     * @maps exit_key
     */
    public function setExitKey(string $exitKey): void
    {
        $this->exitKey = $exitKey;
    }

    /**
     * Returns Back Menu.
     */
    public function getBackMenu(): int
    {
        return $this->backMenu;
    }

    /**
     * Sets Back Menu.
     *
     * @required
     * @maps back_menu
     */
    public function setBackMenu(int $backMenu): void
    {
        $this->backMenu = $backMenu;
    }

    /**
     * Returns Main Menu.
     */
    public function getMainMenu(): string
    {
        return $this->mainMenu;
    }

    /**
     * Sets Main Menu.
     *
     * @required
     * @maps main_menu
     */
    public function setMainMenu(string $mainMenu): void
    {
        $this->mainMenu = $mainMenu;
    }

    /**
     * Returns Action.
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * Sets Action.
     *
     * @required
     * @maps action
     */
    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    /**
     * Returns Action Detail.
     */
    public function getActionDetail(): string
    {
        return $this->actionDetail;
    }

    /**
     * Sets Action Detail.
     *
     * @required
     * @maps action_detail
     */
    public function setActionDetail(string $actionDetail): void
    {
        $this->actionDetail = $actionDetail;
    }

    /**
     * Returns Trying.
     */
    public function getTrying(): int
    {
        return $this->trying;
    }

    /**
     * Sets Trying.
     *
     * @required
     * @maps trying
     */
    public function setTrying(int $trying): void
    {
        $this->trying = $trying;
    }

    /**
     * Returns Is Active.
     */
    public function getIsActive(): int
    {
        return $this->isActive;
    }

    /**
     * Sets Is Active.
     *
     * @required
     * @maps isActive
     */
    public function setIsActive(int $isActive): void
    {
        $this->isActive = $isActive;
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
        $json['id']            = $this->id;
        $json['customer_code'] = $this->customerCode;
        $json['ivr_name']      = $this->ivrName;
        $json['ivr_title']     = $this->ivrTitle;
        $json['ivr_parent']    = $this->ivrParent;
        $json['ivr_text']      = $this->ivrText;
        $json['language']      = $this->language;
        $json['gender']        = $this->gender;
        $json['key_pressed']   = $this->keyPressed;
        $json['exit_key']      = $this->exitKey;
        $json['back_menu']     = $this->backMenu;
        $json['main_menu']     = $this->mainMenu;
        $json['action']        = $this->action;
        $json['action_detail'] = $this->actionDetail;
        $json['trying']        = $this->trying;
        $json['isActive']      = $this->isActive;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
