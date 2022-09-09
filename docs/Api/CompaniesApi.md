# OpenAPI\Client\CompaniesApi

All URIs are relative to https://api.prod.ehelply.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCompanyPlacesCompaniesPost()**](CompaniesApi.md#createCompanyPlacesCompaniesPost) | **POST** /places/companies | Create Company
[**deleteCompanyPlacesCompaniesCompanyUuidDelete()**](CompaniesApi.md#deleteCompanyPlacesCompaniesCompanyUuidDelete) | **DELETE** /places/companies/{company_uuid} | Delete Company
[**getCompanyPlacesCompaniesCompanyUuidGet()**](CompaniesApi.md#getCompanyPlacesCompaniesCompanyUuidGet) | **GET** /places/companies/{company_uuid} | Get Company
[**searchCompaniesPlacesCompaniesGet()**](CompaniesApi.md#searchCompaniesPlacesCompaniesGet) | **GET** /places/companies | Search Companies
[**updateCompanyPlacesCompaniesCompanyUuidPut()**](CompaniesApi.md#updateCompanyPlacesCompaniesCompanyUuidPut) | **PUT** /places/companies/{company_uuid} | Update Company


## `createCompanyPlacesCompaniesPost()`

```php
createCompanyPlacesCompaniesPost($company_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\CompanyResponse
```

Create Company

Creates a company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_base = new \OpenAPI\Client\Model\CompanyBase(); // \OpenAPI\Client\Model\CompanyBase
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->createCompanyPlacesCompaniesPost($company_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->createCompanyPlacesCompaniesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_base** | [**\OpenAPI\Client\Model\CompanyBase**](../Model/CompanyBase.md)|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CompanyResponse**](../Model/CompanyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCompanyPlacesCompaniesCompanyUuidDelete()`

```php
deleteCompanyPlacesCompaniesCompanyUuidDelete($company_uuid, $soft_delete, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): mixed
```

Delete Company

Deletes the company with the given ID and returns True if successful

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_uuid = 'company_uuid_example'; // string
$soft_delete = true; // bool
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->deleteCompanyPlacesCompaniesCompanyUuidDelete($company_uuid, $soft_delete, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->deleteCompanyPlacesCompaniesCompanyUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_uuid** | **string**|  |
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

## `getCompanyPlacesCompaniesCompanyUuidGet()`

```php
getCompanyPlacesCompaniesCompanyUuidGet($company_uuid, $with_meta, $with_catalog, $with_reviews, $with_schedule, $with_blog, $with_tags, $with_categories, $with_places, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\CompanyResponse
```

Get Company

Gets the company information given the Place ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_uuid = 'company_uuid_example'; // string
$with_meta = false; // bool
$with_catalog = false; // bool
$with_reviews = false; // bool
$with_schedule = false; // bool
$with_blog = false; // bool
$with_tags = false; // bool
$with_categories = false; // bool
$with_places = false; // bool
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->getCompanyPlacesCompaniesCompanyUuidGet($company_uuid, $with_meta, $with_catalog, $with_reviews, $with_schedule, $with_blog, $with_tags, $with_categories, $with_places, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanyPlacesCompaniesCompanyUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_uuid** | **string**|  |
 **with_meta** | **bool**|  | [optional] [default to false]
 **with_catalog** | **bool**|  | [optional] [default to false]
 **with_reviews** | **bool**|  | [optional] [default to false]
 **with_schedule** | **bool**|  | [optional] [default to false]
 **with_blog** | **bool**|  | [optional] [default to false]
 **with_tags** | **bool**|  | [optional] [default to false]
 **with_categories** | **bool**|  | [optional] [default to false]
 **with_places** | **bool**|  | [optional] [default to false]
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CompanyResponse**](../Model/CompanyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCompaniesPlacesCompaniesGet()`

```php
searchCompaniesPlacesCompaniesGet($project_uuid, $name, $email, $is_public, $is_deleted, $with_places, $with_meta, $with_catalog, $with_reviews, $with_schedule, $with_blog, $with_tags, $with_categories, $page, $page_size, $sort_on, $sort_desc, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\Page
```

Search Companies

Search all companies and returns paginated results with Companies being stored in items field. Can search by `project_uuid, name, email` string fields or the `is_public and is_deleted` boolean fields. To search with these fields use query params with string values. For sorting fill out \"sort_desc\" field with either true/false and the \"sort_on\" query parameter with column you want to sort on (ex: name). Max pagination items per page is 50. Item return format: ``` {     uuid                                **type:** string     project_uuid                        **type:** string or None      meta_uuid                           **type:** string or None      catalog_data                        **type:** dict or None      review_group_data                   **type:** dict or None      schedule_data                       **type:** dict or None      blog_data                           **type:** dict or None      tags                                **type:** [TagBase] or None      categories                          **type:** [CategoryBase] or None      places                              **type:** PlaceBase or None      created_at                          **type:** string or None      updated_at                          **type:** string or None      deleted_at                          **type:** string or None  } ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_uuid = 'project_uuid_example'; // string
$name = 'name_example'; // string
$email = 'email_example'; // string
$is_public = true; // bool
$is_deleted = false; // bool
$with_places = false; // bool
$with_meta = false; // bool
$with_catalog = false; // bool
$with_reviews = false; // bool
$with_schedule = false; // bool
$with_blog = false; // bool
$with_tags = false; // bool
$with_categories = false; // bool
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
    $result = $apiInstance->searchCompaniesPlacesCompaniesGet($project_uuid, $name, $email, $is_public, $is_deleted, $with_places, $with_meta, $with_catalog, $with_reviews, $with_schedule, $with_blog, $with_tags, $with_categories, $page, $page_size, $sort_on, $sort_desc, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->searchCompaniesPlacesCompaniesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_uuid** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **is_public** | **bool**|  | [optional] [default to true]
 **is_deleted** | **bool**|  | [optional] [default to false]
 **with_places** | **bool**|  | [optional] [default to false]
 **with_meta** | **bool**|  | [optional] [default to false]
 **with_catalog** | **bool**|  | [optional] [default to false]
 **with_reviews** | **bool**|  | [optional] [default to false]
 **with_schedule** | **bool**|  | [optional] [default to false]
 **with_blog** | **bool**|  | [optional] [default to false]
 **with_tags** | **bool**|  | [optional] [default to false]
 **with_categories** | **bool**|  | [optional] [default to false]
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

## `updateCompanyPlacesCompaniesCompanyUuidPut()`

```php
updateCompanyPlacesCompaniesCompanyUuidPut($company_uuid, $company_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\CompanyResponse
```

Update Company

Update company with given info, only updating the fields supplied. Company Uuid must be sent however.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_uuid = 'company_uuid_example'; // string
$company_base = new \OpenAPI\Client\Model\CompanyBase(); // \OpenAPI\Client\Model\CompanyBase
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->updateCompanyPlacesCompaniesCompanyUuidPut($company_uuid, $company_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->updateCompanyPlacesCompaniesCompanyUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_uuid** | **string**|  |
 **company_base** | [**\OpenAPI\Client\Model\CompanyBase**](../Model/CompanyBase.md)|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CompanyResponse**](../Model/CompanyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
