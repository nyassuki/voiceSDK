<?php

declare(strict_types=1);

/*
 * VoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceAPILib\Controllers;

use VoiceAPILib\Exceptions\ApiException;
use VoiceAPILib\ConfigurationInterface;
use VoiceAPILib\ApiHelper;
use VoiceAPILib\Models;
use VoiceAPILib\Http\HttpRequest;
use VoiceAPILib\Http\HttpResponse;
use VoiceAPILib\Http\HttpMethod;
use VoiceAPILib\Http\HttpContext;
use VoiceAPILib\Http\HttpCallBack;
use VoiceAPILib\Server;

class IVRController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * @param Models\IVRNewRequest $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function iVRNew(Models\IVRNewRequest $body): void
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::SERVER_1) . '/ivr/new';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 403) {
            throw $this->createExceptionFromJson(
                '\\VoiceAPILib\\Exceptions\\IVRNewException',
                'Forbidden',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
    }

    /**
     * @param Models\IVRDeleteRequest $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function iVRDelete(Models\IVRDeleteRequest $body): void
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::SERVER_1) . '/ivr/delete';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 404) {
            throw $this->createExceptionFromJson(
                '\\VoiceAPILib\\Exceptions\\IVRDeleteException',
                'Not Found',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
    }

    /**
     * @param Models\IVRDeleteItemRequest $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function iVRDeleteItem(Models\IVRDeleteItemRequest $body): void
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::SERVER_1) . '/ivr/deleteitem';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 404) {
            throw $this->createExceptionFromJson(
                '\\VoiceAPILib\\Exceptions\\IVRDeleteItemException',
                'Not Found',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
    }

    /**
     * @return Models\IVRList Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function iVRList(): Models\IVRList
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::SERVER_1) . '/ivr/list';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'IVRList');
    }

    /**
     * @return Models\IVRLang Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function iVRLang(): Models\IVRLang
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::SERVER_1) . '/ivr/lang';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'IVRLang');
    }
}