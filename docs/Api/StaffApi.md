# OpenAPI\Client\StaffApi

All URIs are relative to https://api.prod.ehelply.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStaffPlacesStaffPost()**](StaffApi.md#createStaffPlacesStaffPost) | **POST** /places/staff | Create Staff
[**deleteStaffPlacesStaffStaffUuidDelete()**](StaffApi.md#deleteStaffPlacesStaffStaffUuidDelete) | **DELETE** /places/staff/{staff_uuid} | Delete Staff
[**getStaffPlacesStaffStaffUuidGet()**](StaffApi.md#getStaffPlacesStaffStaffUuidGet) | **GET** /places/staff/{staff_uuid} | Get Staff
[**searchStaffPlacesStaffGet()**](StaffApi.md#searchStaffPlacesStaffGet) | **GET** /places/staff | Search Staff
[**updateStaffPlacesStaffStaffUuidPut()**](StaffApi.md#updateStaffPlacesStaffStaffUuidPut) | **PUT** /places/staff/{staff_uuid} | Update Staff


## `createStaffPlacesStaffPost()`

```php
createStaffPlacesStaffPost($staff_create, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\StaffDb
```

Create Staff

Creates a staff member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$staff_create = new \OpenAPI\Client\Model\StaffCreate(); // \OpenAPI\Client\Model\StaffCreate
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->createStaffPlacesStaffPost($staff_create, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->createStaffPlacesStaffPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_create** | [**\OpenAPI\Client\Model\StaffCreate**](../Model/StaffCreate.md)|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\StaffDb**](../Model/StaffDb.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStaffPlacesStaffStaffUuidDelete()`

```php
deleteStaffPlacesStaffStaffUuidDelete($staff_uuid, $soft_delete, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): mixed
```

Delete Staff

Deletes the staff member with the given ID and returns True if successful

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$staff_uuid = 'staff_uuid_example'; // string
$soft_delete = true; // bool
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->deleteStaffPlacesStaffStaffUuidDelete($staff_uuid, $soft_delete, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->deleteStaffPlacesStaffStaffUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_uuid** | **string**|  |
 **soft_delete** | **bool**|  | [optional] [default to true]
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

## `getStaffPlacesStaffStaffUuidGet()`

```php
getStaffPlacesStaffStaffUuidGet($staff_uuid, $with_places, $with_companies, $with_catalog, $with_schedule, $with_roles, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\StaffResponse
```

Get Staff

Gets the staff member information given the staff ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$staff_uuid = 'staff_uuid_example'; // string
$with_places = false; // bool
$with_companies = false; // bool
$with_catalog = false; // bool
$with_schedule = false; // bool
$with_roles = false; // bool
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->getStaffPlacesStaffStaffUuidGet($staff_uuid, $with_places, $with_companies, $with_catalog, $with_schedule, $with_roles, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->getStaffPlacesStaffStaffUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_uuid** | **string**|  |
 **with_places** | **bool**|  | [optional] [default to false]
 **with_companies** | **bool**|  | [optional] [default to false]
 **with_catalog** | **bool**|  | [optional] [default to false]
 **with_schedule** | **bool**|  | [optional] [default to false]
 **with_roles** | **bool**|  | [optional] [default to false]
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\StaffResponse**](../Model/StaffResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchStaffPlacesStaffGet()`

```php
searchStaffPlacesStaffGet($project_uuid, $first_name, $last_name, $is_deleted, $with_companies, $with_places, $with_schedule, $with_catalog, $with_reviews, $with_roles, $page, $page_size, $sort_on, $sort_desc, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\Page
```

Search Staff

TODO Item return format: ``` {     uuid                                **type:** string     project_uuid                        **type:** string or None      entity                              **type:** string or None      place                               **type:** dict or None      company                             **type:** dict or None      schedule                            **type:** dict or None      catalog                             **type:** dict or None      reviews                             **type:** dict or None      created_at                          **type:** string or None      updated_at                          **type:** string or None      deleted_at                          **type:** string or None  } ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_uuid = 'project_uuid_example'; // string
$first_name = 'first_name_example'; // string
$last_name = 'last_name_example'; // string
$is_deleted = false; // bool
$with_companies = false; // bool
$with_places = false; // bool
$with_schedule = false; // bool
$with_catalog = false; // bool
$with_reviews = false; // bool
$with_roles = false; // bool
$page = 1; // int
$page_size = 25; // int
$sort_on = 'sort_on_example'; // string
$sort_desc = false; // bool
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->searchStaffPlacesStaffGet($project_uuid, $first_name, $last_name, $is_deleted, $with_companies, $with_places, $with_schedule, $with_catalog, $with_reviews, $with_roles, $page, $page_size, $sort_on, $sort_desc, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->searchStaffPlacesStaffGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_uuid** | **string**|  | [optional]
 **first_name** | **string**|  | [optional]
 **last_name** | **string**|  | [optional]
 **is_deleted** | **bool**|  | [optional] [default to false]
 **with_companies** | **bool**|  | [optional] [default to false]
 **with_places** | **bool**|  | [optional] [default to false]
 **with_schedule** | **bool**|  | [optional] [default to false]
 **with_catalog** | **bool**|  | [optional] [default to false]
 **with_reviews** | **bool**|  | [optional] [default to false]
 **with_roles** | **bool**|  | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 25]
 **sort_on** | **string**|  | [optional]
 **sort_desc** | **bool**|  | [optional] [default to false]
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

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

## `updateStaffPlacesStaffStaffUuidPut()`

```php
updateStaffPlacesStaffStaffUuidPut($staff_uuid, $staff_create, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\StaffResponse
```

Update Staff

Update staff with given info, only updating the fields supplied. Staff Uuid must be sent however.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$staff_uuid = 'staff_uuid_example'; // string
$staff_create = new \OpenAPI\Client\Model\StaffCreate(); // \OpenAPI\Client\Model\StaffCreate
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->updateStaffPlacesStaffStaffUuidPut($staff_uuid, $staff_create, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->updateStaffPlacesStaffStaffUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_uuid** | **string**|  |
 **staff_create** | [**\OpenAPI\Client\Model\StaffCreate**](../Model/StaffCreate.md)|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\StaffResponse**](../Model/StaffResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
