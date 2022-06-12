# OpenAPI\Client\MonitorApi

All URIs are relative to https://api.prod.ehelply.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**acknowledgeAlarm()**](MonitorApi.md#acknowledgeAlarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/acknowledge | Acknowledgealarm
[**assignAlarm()**](MonitorApi.md#assignAlarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/assign | Assignalarm
[**attachAlarmNote()**](MonitorApi.md#attachAlarmNote) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/note | Attachalarmnote
[**attachAlarmTicket()**](MonitorApi.md#attachAlarmTicket) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/ticket | Attachalarmticket
[**clearAlarm()**](MonitorApi.md#clearAlarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/clear | Clearalarm
[**getService()**](MonitorApi.md#getService) | **GET** /sam/monitor/services/{service} | Getservice
[**getServiceAlarm()**](MonitorApi.md#getServiceAlarm) | **GET** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid} | Getservicealarm
[**getServiceAlarms()**](MonitorApi.md#getServiceAlarms) | **GET** /sam/monitor/services/{service}/stages/{stage}/alarms | Getservicealarms
[**getServiceHeartbeat()**](MonitorApi.md#getServiceHeartbeat) | **GET** /sam/monitor/services/{service}/stages/{stage}/heartbeats | Getserviceheartbeat
[**getServiceKpis()**](MonitorApi.md#getServiceKpis) | **GET** /sam/monitor/services/{service}/kpis | Getservicekpis
[**getServiceSpec()**](MonitorApi.md#getServiceSpec) | **GET** /sam/monitor/services/{service}/specs/{spec} | Getservicespec
[**getServiceSpecs()**](MonitorApi.md#getServiceSpecs) | **GET** /sam/monitor/services/{service}/specs | Getservicespecs
[**getServiceVitals()**](MonitorApi.md#getServiceVitals) | **GET** /sam/monitor/services/{service}/stages/{stage}/vitals | Getservicevitals
[**getServices()**](MonitorApi.md#getServices) | **GET** /sam/monitor/services | Getservices
[**getServicesWithSpecs()**](MonitorApi.md#getServicesWithSpecs) | **GET** /sam/monitor/specs/services | Getserviceswithspecs
[**hideService()**](MonitorApi.md#hideService) | **POST** /sam/monitor/services/{service}/stages/{stage}/hide | Hideservice
[**ignoreAlarm()**](MonitorApi.md#ignoreAlarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/ignore | Ignorealarm
[**registerService()**](MonitorApi.md#registerService) | **POST** /sam/monitor/services | Registerservice
[**searchAlarms()**](MonitorApi.md#searchAlarms) | **GET** /sam/monitor/services/{service}/alarms | Searchalarms
[**showService()**](MonitorApi.md#showService) | **POST** /sam/monitor/services/{service}/stages/{stage}/show | Showservice
[**terminateAlarm()**](MonitorApi.md#terminateAlarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/terminate | Terminatealarm
[**triggerAlarm()**](MonitorApi.md#triggerAlarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms | Triggeralarm


## `acknowledgeAlarm()`

```php
acknowledgeAlarm($service, $stage, $alarm_uuid, $alarm_acknowledge): \OpenAPI\Client\Model\AlarmResponse
```

Acknowledgealarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$alarm_uuid = 'alarm_uuid_example'; // string
$alarm_acknowledge = new \OpenAPI\Client\Model\AlarmAcknowledge(); // \OpenAPI\Client\Model\AlarmAcknowledge

try {
    $result = $apiInstance->acknowledgeAlarm($service, $stage, $alarm_uuid, $alarm_acknowledge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->acknowledgeAlarm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **alarm_uuid** | **string**|  |
 **alarm_acknowledge** | [**\OpenAPI\Client\Model\AlarmAcknowledge**](../Model/AlarmAcknowledge.md)|  |

### Return type

[**\OpenAPI\Client\Model\AlarmResponse**](../Model/AlarmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignAlarm()`

```php
assignAlarm($service, $stage, $alarm_uuid, $alarm_assign): \OpenAPI\Client\Model\AlarmResponse
```

Assignalarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$alarm_uuid = 'alarm_uuid_example'; // string
$alarm_assign = new \OpenAPI\Client\Model\AlarmAssign(); // \OpenAPI\Client\Model\AlarmAssign

try {
    $result = $apiInstance->assignAlarm($service, $stage, $alarm_uuid, $alarm_assign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->assignAlarm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **alarm_uuid** | **string**|  |
 **alarm_assign** | [**\OpenAPI\Client\Model\AlarmAssign**](../Model/AlarmAssign.md)|  |

### Return type

[**\OpenAPI\Client\Model\AlarmResponse**](../Model/AlarmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachAlarmNote()`

```php
attachAlarmNote($service, $stage, $alarm_uuid, $alarm_note): \OpenAPI\Client\Model\AlarmResponse
```

Attachalarmnote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$alarm_uuid = 'alarm_uuid_example'; // string
$alarm_note = new \OpenAPI\Client\Model\AlarmNote(); // \OpenAPI\Client\Model\AlarmNote

try {
    $result = $apiInstance->attachAlarmNote($service, $stage, $alarm_uuid, $alarm_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->attachAlarmNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **alarm_uuid** | **string**|  |
 **alarm_note** | [**\OpenAPI\Client\Model\AlarmNote**](../Model/AlarmNote.md)|  |

### Return type

[**\OpenAPI\Client\Model\AlarmResponse**](../Model/AlarmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachAlarmTicket()`

```php
attachAlarmTicket($service, $stage, $alarm_uuid, $alarm_ticket): \OpenAPI\Client\Model\AlarmResponse
```

Attachalarmticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$alarm_uuid = 'alarm_uuid_example'; // string
$alarm_ticket = new \OpenAPI\Client\Model\AlarmTicket(); // \OpenAPI\Client\Model\AlarmTicket

try {
    $result = $apiInstance->attachAlarmTicket($service, $stage, $alarm_uuid, $alarm_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->attachAlarmTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **alarm_uuid** | **string**|  |
 **alarm_ticket** | [**\OpenAPI\Client\Model\AlarmTicket**](../Model/AlarmTicket.md)|  |

### Return type

[**\OpenAPI\Client\Model\AlarmResponse**](../Model/AlarmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clearAlarm()`

```php
clearAlarm($service, $stage, $alarm_uuid): \OpenAPI\Client\Model\AlarmResponse
```

Clearalarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$alarm_uuid = 'alarm_uuid_example'; // string

try {
    $result = $apiInstance->clearAlarm($service, $stage, $alarm_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->clearAlarm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **alarm_uuid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\AlarmResponse**](../Model/AlarmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getService()`

```php
getService($service, $heartbeats, $heartbeat_limit, $alarms, $alarm_limit, $stage): \OpenAPI\Client\Model\ServiceResponse
```

Getservice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$heartbeats = false; // bool
$heartbeat_limit = 5; // int
$alarms = false; // bool
$alarm_limit = 5; // int
$stage = 'stage_example'; // string

try {
    $result = $apiInstance->getService($service, $heartbeats, $heartbeat_limit, $alarms, $alarm_limit, $stage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->getService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **heartbeats** | **bool**|  | [optional] [default to false]
 **heartbeat_limit** | **int**|  | [optional] [default to 5]
 **alarms** | **bool**|  | [optional] [default to false]
 **alarm_limit** | **int**|  | [optional] [default to 5]
 **stage** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ServiceResponse**](../Model/ServiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceAlarm()`

```php
getServiceAlarm($service, $stage, $alarm_uuid): \OpenAPI\Client\Model\AlarmResponse
```

Getservicealarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$alarm_uuid = 'alarm_uuid_example'; // string

try {
    $result = $apiInstance->getServiceAlarm($service, $stage, $alarm_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->getServiceAlarm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **alarm_uuid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\AlarmResponse**](../Model/AlarmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceAlarms()`

```php
getServiceAlarms($service, $stage, $history, $include_terminated, $include_cleared): \OpenAPI\Client\Model\AlarmResponse[]
```

Getservicealarms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$history = 5; // int
$include_terminated = false; // bool
$include_cleared = false; // bool

try {
    $result = $apiInstance->getServiceAlarms($service, $stage, $history, $include_terminated, $include_cleared);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->getServiceAlarms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **history** | **int**|  | [optional] [default to 5]
 **include_terminated** | **bool**|  | [optional] [default to false]
 **include_cleared** | **bool**|  | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\AlarmResponse[]**](../Model/AlarmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceHeartbeat()`

```php
getServiceHeartbeat($service, $stage, $history): \OpenAPI\Client\Model\HeartbeatResponse[]
```

Getserviceheartbeat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$history = 5; // int

try {
    $result = $apiInstance->getServiceHeartbeat($service, $stage, $history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->getServiceHeartbeat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **history** | **int**|  | [optional] [default to 5]

### Return type

[**\OpenAPI\Client\Model\HeartbeatResponse[]**](../Model/HeartbeatResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceKpis()`

```php
getServiceKpis($service, $history): \OpenAPI\Client\Model\KpiResponse[]
```

Getservicekpis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$history = 5; // int

try {
    $result = $apiInstance->getServiceKpis($service, $history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->getServiceKpis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **history** | **int**|  | [optional] [default to 5]

### Return type

[**\OpenAPI\Client\Model\KpiResponse[]**](../Model/KpiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceSpec()`

```php
getServiceSpec($service, $spec, $as_json): \OpenAPI\Client\Model\ResponseGetservicespec
```

Getservicespec

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$spec = 'spec_example'; // string
$as_json = false; // bool

try {
    $result = $apiInstance->getServiceSpec($service, $spec, $as_json);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->getServiceSpec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **spec** | **string**|  |
 **as_json** | **bool**|  | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\ResponseGetservicespec**](../Model/ResponseGetservicespec.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceSpecs()`

```php
getServiceSpecs($service): \OpenAPI\Client\Model\ResponseGetservicespecs
```

Getservicespecs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string

try {
    $result = $apiInstance->getServiceSpecs($service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->getServiceSpecs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ResponseGetservicespecs**](../Model/ResponseGetservicespecs.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceVitals()`

```php
getServiceVitals($service, $stage, $history): \OpenAPI\Client\Model\StatsVitalsResponse[]
```

Getservicevitals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$history = 5; // int

try {
    $result = $apiInstance->getServiceVitals($service, $stage, $history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->getServiceVitals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **history** | **int**|  | [optional] [default to 5]

### Return type

[**\OpenAPI\Client\Model\StatsVitalsResponse[]**](../Model/StatsVitalsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServices()`

```php
getServices($heartbeats, $heartbeat_limit, $alarms, $alarm_limit, $include_hidden, $stage, $key): \OpenAPI\Client\Model\ServiceResponse[]
```

Getservices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$heartbeats = false; // bool
$heartbeat_limit = 5; // int
$alarms = false; // bool
$alarm_limit = 5; // int
$include_hidden = false; // bool
$stage = 'stage_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->getServices($heartbeats, $heartbeat_limit, $alarms, $alarm_limit, $include_hidden, $stage, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->getServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **heartbeats** | **bool**|  | [optional] [default to false]
 **heartbeat_limit** | **int**|  | [optional] [default to 5]
 **alarms** | **bool**|  | [optional] [default to false]
 **alarm_limit** | **int**|  | [optional] [default to 5]
 **include_hidden** | **bool**|  | [optional] [default to false]
 **stage** | **string**|  | [optional]
 **key** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ServiceResponse[]**](../Model/ServiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServicesWithSpecs()`

```php
getServicesWithSpecs(): \OpenAPI\Client\Model\ResponseGetserviceswithspecs
```

Getserviceswithspecs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getServicesWithSpecs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->getServicesWithSpecs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ResponseGetserviceswithspecs**](../Model/ResponseGetserviceswithspecs.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hideService()`

```php
hideService($service, $stage): \OpenAPI\Client\Model\ServiceMessageResponse
```

Hideservice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string

try {
    $result = $apiInstance->hideService($service, $stage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->hideService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ServiceMessageResponse**](../Model/ServiceMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ignoreAlarm()`

```php
ignoreAlarm($service, $stage, $alarm_uuid, $alarm_ignore): \OpenAPI\Client\Model\AlarmResponse
```

Ignorealarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$alarm_uuid = 'alarm_uuid_example'; // string
$alarm_ignore = new \OpenAPI\Client\Model\AlarmIgnore(); // \OpenAPI\Client\Model\AlarmIgnore

try {
    $result = $apiInstance->ignoreAlarm($service, $stage, $alarm_uuid, $alarm_ignore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->ignoreAlarm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **alarm_uuid** | **string**|  |
 **alarm_ignore** | [**\OpenAPI\Client\Model\AlarmIgnore**](../Model/AlarmIgnore.md)|  |

### Return type

[**\OpenAPI\Client\Model\AlarmResponse**](../Model/AlarmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerService()`

```php
registerService($service_create): \OpenAPI\Client\Model\ServiceResponse
```

Registerservice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_create = new \OpenAPI\Client\Model\ServiceCreate(); // \OpenAPI\Client\Model\ServiceCreate

try {
    $result = $apiInstance->registerService($service_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->registerService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_create** | [**\OpenAPI\Client\Model\ServiceCreate**](../Model/ServiceCreate.md)|  |

### Return type

[**\OpenAPI\Client\Model\ServiceResponse**](../Model/ServiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAlarms()`

```php
searchAlarms($service, $page, $page_size, $search, $search_on, $sort_on, $sort_desc): \OpenAPI\Client\Model\Page
```

Searchalarms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$page = 1; // int
$page_size = 25; // int
$search = 'search_example'; // string
$search_on = 'search_on_example'; // string
$sort_on = 'sort_on_example'; // string
$sort_desc = false; // bool

try {
    $result = $apiInstance->searchAlarms($service, $page, $page_size, $search, $search_on, $sort_on, $sort_desc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->searchAlarms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 25]
 **search** | **string**|  | [optional]
 **search_on** | **string**|  | [optional]
 **sort_on** | **string**|  | [optional]
 **sort_desc** | **bool**|  | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\Page**](../Model/Page.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showService()`

```php
showService($service, $stage): \OpenAPI\Client\Model\ServiceMessageResponse
```

Showservice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string

try {
    $result = $apiInstance->showService($service, $stage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->showService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ServiceMessageResponse**](../Model/ServiceMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminateAlarm()`

```php
terminateAlarm($service, $stage, $alarm_uuid, $alarm_terminate): \OpenAPI\Client\Model\AlarmResponse
```

Terminatealarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$alarm_uuid = 'alarm_uuid_example'; // string
$alarm_terminate = new \OpenAPI\Client\Model\AlarmTerminate(); // \OpenAPI\Client\Model\AlarmTerminate

try {
    $result = $apiInstance->terminateAlarm($service, $stage, $alarm_uuid, $alarm_terminate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->terminateAlarm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **alarm_uuid** | **string**|  |
 **alarm_terminate** | [**\OpenAPI\Client\Model\AlarmTerminate**](../Model/AlarmTerminate.md)|  |

### Return type

[**\OpenAPI\Client\Model\AlarmResponse**](../Model/AlarmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `triggerAlarm()`

```php
triggerAlarm($service, $stage, $alarm_create): \OpenAPI\Client\Model\AlarmResponse
```

Triggeralarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$stage = 'stage_example'; // string
$alarm_create = new \OpenAPI\Client\Model\AlarmCreate(); // \OpenAPI\Client\Model\AlarmCreate

try {
    $result = $apiInstance->triggerAlarm($service, $stage, $alarm_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorApi->triggerAlarm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **stage** | **string**|  |
 **alarm_create** | [**\OpenAPI\Client\Model\AlarmCreate**](../Model/AlarmCreate.md)|  |

### Return type

[**\OpenAPI\Client\Model\AlarmResponse**](../Model/AlarmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
