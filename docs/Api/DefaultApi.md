# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.prod.ehelply.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachEntityToAppointment()**](DefaultApi.md#attachEntityToAppointment) | **POST** /appointments/appointments/{appointment_uuid}/entities/{entity_uuid} | Attach Entity To Appointment
[**createAppointment()**](DefaultApi.md#createAppointment) | **POST** /appointments/appointments | Create Appointment
[**deleteAppointment()**](DefaultApi.md#deleteAppointment) | **DELETE** /appointments/appointments/{appointment_uuid} | Delete Appointment
[**detachEntityFromAppointment()**](DefaultApi.md#detachEntityFromAppointment) | **DELETE** /appointments/appointments/{appointment_uuid}/entities/{entity_uuid} | Detach Entity From Appointment
[**getAppointment()**](DefaultApi.md#getAppointment) | **GET** /appointments/appointments/{appointment_uuid} | Get Appointment
[**searchAppointment()**](DefaultApi.md#searchAppointment) | **GET** /appointments/appointments | Search Appointment
[**searchAppointmentEntities()**](DefaultApi.md#searchAppointmentEntities) | **GET** /appointments/appointments/{appointment_uuid}/entities | Search Appointment Entities
[**searchEntityAppointments()**](DefaultApi.md#searchEntityAppointments) | **GET** /appointments/appointments/entities/{entity_uuid}/appointments | Get Entities Appointments
[**updateAppointment()**](DefaultApi.md#updateAppointment) | **PUT** /appointments/appointments/{appointment_uuid} | Update Appointment


## `attachEntityToAppointment()`

```php
attachEntityToAppointment($appointment_uuid, $entity_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): bool
```

Attach Entity To Appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appointment_uuid = 'appointment_uuid_example'; // string
$entity_uuid = 'entity_uuid_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->attachEntityToAppointment($appointment_uuid, $entity_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->attachEntityToAppointment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_uuid** | **string**|  |
 **entity_uuid** | **string**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppointment()`

```php
createAppointment($appointment_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\AppointmentResponse
```

Create Appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appointment_base = new \OpenAPI\Client\Model\AppointmentBase(); // \OpenAPI\Client\Model\AppointmentBase
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->createAppointment($appointment_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAppointment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_base** | [**\OpenAPI\Client\Model\AppointmentBase**](../Model/AppointmentBase.md)|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AppointmentResponse**](../Model/AppointmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppointment()`

```php
deleteAppointment($appointment_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): bool
```

Delete Appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appointment_uuid = 'appointment_uuid_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->deleteAppointment($appointment_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAppointment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_uuid** | **string**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `detachEntityFromAppointment()`

```php
detachEntityFromAppointment($appointment_uuid, $entity_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): bool
```

Detach Entity From Appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appointment_uuid = 'appointment_uuid_example'; // string
$entity_uuid = 'entity_uuid_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->detachEntityFromAppointment($appointment_uuid, $entity_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->detachEntityFromAppointment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_uuid** | **string**|  |
 **entity_uuid** | **string**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppointment()`

```php
getAppointment($appointment_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\AppointmentResponse
```

Get Appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appointment_uuid = 'appointment_uuid_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->getAppointment($appointment_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAppointment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_uuid** | **string**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AppointmentResponse**](../Model/AppointmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAppointment()`

```php
searchAppointment($place_uuid, $exclude_cancelled, $is_deleted, $start_range, $end_range, $page, $page_size, $sort_on, $sort_desc, $search, $search_on, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): mixed
```

Search Appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$place_uuid = 'place_uuid_example'; // string
$exclude_cancelled = false; // bool
$is_deleted = false; // bool
$start_range = 'start_range_example'; // string
$end_range = 'end_range_example'; // string
$page = 1; // int
$page_size = 25; // int
$sort_on = 'sort_on_example'; // string
$sort_desc = false; // bool
$search = 'search_example'; // string
$search_on = 'search_on_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->searchAppointment($place_uuid, $exclude_cancelled, $is_deleted, $start_range, $end_range, $page, $page_size, $sort_on, $sort_desc, $search, $search_on, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchAppointment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **place_uuid** | **string**|  | [optional]
 **exclude_cancelled** | **bool**|  | [optional] [default to false]
 **is_deleted** | **bool**|  | [optional] [default to false]
 **start_range** | **string**|  | [optional]
 **end_range** | **string**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 25]
 **sort_on** | **string**|  | [optional]
 **sort_desc** | **bool**|  | [optional] [default to false]
 **search** | **string**|  | [optional]
 **search_on** | **string**|  | [optional]
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAppointmentEntities()`

```php
searchAppointmentEntities($appointment_uuid, $page, $page_size, $sort_on, $sort_desc, $search, $search_on, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): mixed
```

Search Appointment Entities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appointment_uuid = 'appointment_uuid_example'; // string
$page = 1; // int
$page_size = 25; // int
$sort_on = 'sort_on_example'; // string
$sort_desc = false; // bool
$search = 'search_example'; // string
$search_on = 'search_on_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->searchAppointmentEntities($appointment_uuid, $page, $page_size, $sort_on, $sort_desc, $search, $search_on, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchAppointmentEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_uuid** | **string**|  |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 25]
 **sort_on** | **string**|  | [optional]
 **sort_desc** | **bool**|  | [optional] [default to false]
 **search** | **string**|  | [optional]
 **search_on** | **string**|  | [optional]
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchEntityAppointments()`

```php
searchEntityAppointments($entity_uuid, $start_date, $end_date, $include_cancelled, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): mixed
```

Get Entities Appointments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_uuid = 'entity_uuid_example'; // string
$start_date = 'start_date_example'; // string
$end_date = 'end_date_example'; // string
$include_cancelled = false; // bool
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->searchEntityAppointments($entity_uuid, $start_date, $end_date, $include_cancelled, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchEntityAppointments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_uuid** | **string**|  |
 **start_date** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]
 **include_cancelled** | **bool**|  | [optional] [default to false]
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppointment()`

```php
updateAppointment($appointment_uuid, $appointment_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\AppointmentResponse
```

Update Appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appointment_uuid = 'appointment_uuid_example'; // string
$appointment_base = new \OpenAPI\Client\Model\AppointmentBase(); // \OpenAPI\Client\Model\AppointmentBase
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->updateAppointment($appointment_uuid, $appointment_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAppointment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_uuid** | **string**|  |
 **appointment_base** | [**\OpenAPI\Client\Model\AppointmentBase**](../Model/AppointmentBase.md)|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AppointmentResponse**](../Model/AppointmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
