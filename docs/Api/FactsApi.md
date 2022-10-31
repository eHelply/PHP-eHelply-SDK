# OpenAPI\Client\FactsApi

All URIs are relative to https://api.prod.ehelply.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFact()**](FactsApi.md#deleteFact) | **POST** /sam/facts/facts/{fact_name} | Deletefact
[**deleteFact_0()**](FactsApi.md#deleteFact_0) | **POST** /sam/facts/facts/{fact_name} | Deletefact
[**getFact()**](FactsApi.md#getFact) | **GET** /sam/facts/facts/{fact_name} | Getfact
[**getFact_0()**](FactsApi.md#getFact_0) | **GET** /sam/facts/facts/{fact_name} | Getfact
[**getFacts()**](FactsApi.md#getFacts) | **GET** /sam/facts/facts | Getfacts
[**getFacts_0()**](FactsApi.md#getFacts_0) | **GET** /sam/facts/facts | Getfacts
[**saveFact()**](FactsApi.md#saveFact) | **POST** /sam/facts/facts | Savefact
[**saveFact_0()**](FactsApi.md#saveFact_0) | **POST** /sam/facts/facts | Savefact


## `deleteFact()`

```php
deleteFact($fact_name, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\DeleteFact200Response
```

Deletefact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fact_name = 'fact_name_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->deleteFact($fact_name, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactsApi->deleteFact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fact_name** | **string**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DeleteFact200Response**](../Model/DeleteFact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFact_0()`

```php
deleteFact_0($fact_name, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\DeleteFact200Response
```

Deletefact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fact_name = 'fact_name_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->deleteFact_0($fact_name, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactsApi->deleteFact_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fact_name** | **string**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DeleteFact200Response**](../Model/DeleteFact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFact()`

```php
getFact($fact_name, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\Fact
```

Getfact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fact_name = 'fact_name_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->getFact($fact_name, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactsApi->getFact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fact_name** | **string**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Fact**](../Model/Fact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFact_0()`

```php
getFact_0($fact_name, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\Fact
```

Getfact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fact_name = 'fact_name_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->getFact_0($fact_name, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactsApi->getFact_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fact_name** | **string**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Fact**](../Model/Fact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFacts()`

```php
getFacts($x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\Fact[]
```

Getfacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->getFacts($x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactsApi->getFacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Fact[]**](../Model/Fact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFacts_0()`

```php
getFacts_0($x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\Fact[]
```

Getfacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->getFacts_0($x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactsApi->getFacts_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Fact[]**](../Model/Fact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveFact()`

```php
saveFact($fact_create, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\SaveFact200Response
```

Savefact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fact_create = new \OpenAPI\Client\Model\FactCreate(); // \OpenAPI\Client\Model\FactCreate
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->saveFact($fact_create, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactsApi->saveFact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fact_create** | [**\OpenAPI\Client\Model\FactCreate**](../Model/FactCreate.md)|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SaveFact200Response**](../Model/SaveFact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveFact_0()`

```php
saveFact_0($fact_create, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\SaveFact200Response
```

Savefact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fact_create = new \OpenAPI\Client\Model\FactCreate(); // \OpenAPI\Client\Model\FactCreate
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->saveFact_0($fact_create, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactsApi->saveFact_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fact_create** | [**\OpenAPI\Client\Model\FactCreate**](../Model/FactCreate.md)|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SaveFact200Response**](../Model/SaveFact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
