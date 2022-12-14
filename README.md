
# Getting Started with Voice API

## Introduction

Voice API request

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "provoice/voice-api:1.0"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "provoice/voice-api": "1.0"
}
```

You can also view the package at:
https://packagist.org/packages/provoice/voice-api#1.0

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | Environment | The API environment. <br> **Default: `Environment.MDN`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `username` | `string` |  |
| `password` | `string` |  |

The API client can be initialized as follows:

```php
$client = new VoiceApiCallLib\VoiceApiCallClient([
    // Set authentication parameters
    'username' => 'username',
    'password' => 'password',

    // Set the environment
    'environment' => 'MDN',
]);
```

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:
(Please choose to which partner you are connected to)
### Fields

| Name | Description |
|  --- | --- |
| MDN | **Default** MDN Partner |
| SINTESA | MAIN sintesa |

## Authorization

This API uses `Basic Authentication`.

## List of APIs

* [Conversation AI](doc/controllers/conversation-ai.md)
* [Call](doc/controllers/call.md)
* [Masking](doc/controllers/masking.md)
* [Translation](doc/controllers/translation.md)
* [Device](doc/controllers/device.md)
* [Agent](doc/controllers/agent.md)
* [Queue](doc/controllers/queue.md)
* [Route](doc/controllers/route.md)
* [IVR](doc/controllers/ivr.md)
* [DID](doc/controllers/did.md)

## Classes Documentation

* [ApiException](doc/api-exception.md)
* [HttpRequest](doc/http-request.md)
* [HttpResponse](doc/http-response.md)

