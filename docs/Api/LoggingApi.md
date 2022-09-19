# OpenAPI\Client\LoggingApi

All URIs are relative to https://api.prod.ehelply.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSubjectLogs()**](LoggingApi.md#getSubjectLogs) | **GET** /sam/logging/logs/services/{service}/subjects/{subject} | Getsubjectlogs


## `getSubjectLogs()`

```php
getSubjectLogs($service, $subject, $date_start, $date_end, $desc, $limit, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\LoggingDynamo[]
```

Getsubjectlogs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoggingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = 'service_example'; // string
$subject = 'subject_example'; // string
$date_start = 'date_start_example'; // string
$date_end = 'date_end_example'; // string
$desc = true; // bool
$limit = 50; // int
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->getSubjectLogs($service, $subject, $date_start, $date_end, $desc, $limit, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingApi->getSubjectLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**|  |
 **subject** | **string**|  |
 **date_start** | **string**|  | [optional]
 **date_end** | **string**|  | [optional]
 **desc** | **bool**|  | [optional] [default to true]
 **limit** | **int**|  | [optional] [default to 50]
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\LoggingDynamo[]**](../Model/LoggingDynamo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
