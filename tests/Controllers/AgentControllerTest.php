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

class AgentControllerTest extends TestCase
{
    /**
     * @var \VoiceApiCallLib\Controllers\AgentController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getAgentController();
    }


    /**
     * ACTION :

\*   new (New agent)
\*   edit (Edit existing Agent)
     */
    public function testAgentNew()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{
  "action": "[ACTION]",
  "agent_code": "[AGENT_CODE]",
  "agent_name": "[AGENT_NAM' .
            'E]",
  "agent_password": "[AGENT_PASSWORD]"
}'),
            'VoiceApiCallLib\Models\\AgentNewRequest'
        );

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->agentNew($body);
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
  "data": {
    "action": "new",
    "agent_code": "10002"' .
                ',
    "agent_name": "queue-152",
    "agent_password": "4321"
  }
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
     * Todo Add description for test testAgentDelete
     */
    public function testAgentDelete()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{
  "agent_code": "[AGENT_CODE]"
}'),
            'VoiceApiCallLib\Models\\AgentDeleteRequest'
        );

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->agentDelete($body);
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
  "data": {
    "agent_code": "10002"
  }
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
     * Todo Add description for test testAgentList
     */
    public function testAgentList()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->agentList();
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
      "id": 34,
      "customer_code": ' .
                '"GOJEK",
      "agent_code": 9610002,
      "agent_name": "queue-152",
      "req' .
                'uire_password": 1,
      "agent_password": 4321,
      "lastlogin": 0,
      "isA' .
                'ctive": 1,
      "isLogin": 0,
      "login_channel": null,
      "login_extensio' .
                'n": null,
      "login_uniqueid": null
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
}
