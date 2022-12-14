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

class ConversationAIControllerTest extends TestCase
{
    /**
     * @var \VoiceApiCallLib\Controllers\ConversationAIController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getConversationAIController();
    }


    /**
     * Todo Add description for test testIntentQuery
     */
    public function testIntentQuery()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{
  "ai_name": "[AI_NAME]",
  "training_phrases": "[TRAINING_PHRASE]"
}'),
            'VoiceApiCallLib\Models\\IntentQueryRequest'
        );

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->intentQuery($body);
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
  "response": true,
  "message_texts": "Saya tidak dengar Anda bilang apa. Bisa ' .
                'ulangi lagi?"
}',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }

    /**
     * Todo Add description for test testIntentList
     */
    public function testIntentList()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->intentList();
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
  "response": true,
  "data": [
    {
      "id": 14,
      "ai_name": "BANK_' .
                'BKKN",
      "display_name": "sahabat",
      "training_phrases": "sahabatmu siapa' .
                '",
      "message_texts": "nggak punya deh",
      "create_date": "2022-08-22T19:5' .
                '9:06.000Z"
    },
    {
      "id": 15,
      "ai_name": "BANK_BKKN",
      "di' .
                'splay_name": "terima kasih",
      "training_phrases": "terima kasih",
      "mess' .
                'age_texts": "pulang saja kamu sana!",
      "create_date": "2022-08-23T14:45:39.000' .
                'Z"
    },
    {
      "id": 16,
      "ai_name": "BANK_BKKN",
      "display_na' .
                'me": "teman",
      "training_phrases": "temanmu siapa",
      "message_texts": "n' .
                'ggak punya juga",
      "create_date": "2022-08-24T02:11:58.000Z"
    },
    {
 ' .
                '     "id": 17,
      "ai_name": "BANK_BKKN",
      "display_name": "kamu siapa yan' .
                'g buat",
      "training_phrases": "kamu siapa yang buat;siapa yang buat;programmer' .
                'mu siapa",
      "message_texts": "Aku lahir dari batu !",
      "create_date": "2' .
                '022-08-25T18:53:35.000Z"
    },
    {
      "id": 19,
      "ai_name": "BANK_BKK' .
                'N",
      "display_name": "Hidayat",
      "training_phrases": "hidayat",
      "' .
                'message_texts": "jelek banget",
      "create_date": "2022-09-01T17:02:54.000Z"
  ' .
                '  }
  ]
}',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }

    /**
     * Todo Add description for test testIntentEdit
     */
    public function testIntentEdit()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{
  "ai_name": "[AI_NAME]",
  "display_name": "[DISPLAY_NAME]",
  "training_phrases":' .
            ' "[TRAINING_PHRASE,SPARATED BY ;]",
  "message_texts": "[RESPONSE_TEXT SPARATED BY ;]"' .
            '
}'),
            'VoiceApiCallLib\Models\\IntentEditRequest'
        );

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->intentEdit($body);
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
  "response": true,
  "message": "Update intent success"
}',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }

    /**
     * Todo Add description for test testAIName
     */
    public function testAIName()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->aIName();
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
  "response": true,
  "data": [
    {
      "id": 1,
      "ai_name": "BANK_B' .
                'KKN",
      "create_date": "2022-08-15T17:13:43.000Z"
    }
  ]
}',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }

    /**
     * Todo Add description for test testIntentDelete
     */
    public function testIntentDelete()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{
  "ai_name": "[AI_NAME]",
  "display_name": "[DISPLAY_NAME]"
}'),
            'VoiceApiCallLib\Models\\IntentDeleteRequest'
        );

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->intentDelete($body);
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
  "response": true,
  "message": "Delete intent success"
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
