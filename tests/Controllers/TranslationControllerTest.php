<?php
/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Tests;

use VoiceApiCallLib\Exceptions\ApiException;
use VoiceApiCallLib\Exceptions;
use VoiceApiCallLib\ApiHelper;
use VoiceApiCallLib\Models;
use PHPUnit\Framework\TestCase;

class TranslationControllerTest extends TestCase
{
    /**
     * @var \VoiceApiCallLib\Controllers\TranslationController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected static $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$httpResponse = new HttpCallBackCatcher();
        self::$controller = ClientFactory::create(self::$httpResponse)->getTranslationController();
    }


    /**
     * Todo Add description for test testTranslationSetup
     */
    public function testTranslationSetup()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{
  "from_number": "[FROM_NUMBER]",
  "caller_didgateway": "[DID_GATEWAY]",
  "called' .
            '_didgateway": "[DID_GATEWAY]",
  "destination_number": "[DESTINATION]",
  "external_id' .
            '": "[EXTERNAL_ID]"
}'),
            'VoiceApiCallLib\Models\\TranslationSetupRequest'
        );

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->translationSetup($body);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = null ;
        $headers['Date'] = null ;
        $headers['Server'] = null ;
        $headers['X-Powered-By'] = null ;
        $headers['Content-Length'] = null ;
        $headers['ETag'] = null ;
        $headers['Keep-Alive'] = null ;
        $headers['Connection'] = null ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, self::$httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertTrue(
            TestHelper::isJsonObjectProperSubsetOf(
                '{
  "respose": true,
  "action": "setup",
  "transaction_id": "cf54bfa60c73851557' .
                '4809998f71bd62",
  "external_id": "1000",
  "from_number": "62811949736",
  "dest' .
                'ination_number": "6285161422932",
  "caller_didgateway": "6285757920463",
  "calle' .
                'd_didgateway": "6285757920463"
}',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }
}
