# OpenAPI\Client\ContentApi

All URIs are relative to https://api.prod.ehelply.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFile()**](ContentApi.md#createFile) | **POST** /files/files | Createfile
[**deleteFile()**](ContentApi.md#deleteFile) | **DELETE** /files/files/{file_uuid} | Deletefile
[**getFile()**](ContentApi.md#getFile) | **GET** /files/files/{file_uuid} | Getfile
[**updateFile()**](ContentApi.md#updateFile) | **PUT** /files/files/{file_uuid} | Updatefile


## `createFile()`

```php
createFile($file, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\CreateFile200Response
```

Createfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->createFile($file, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->createFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CreateFile200Response**](../Model/CreateFile200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFile()`

```php
deleteFile($file_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\DeleteFile200Response
```

Deletefile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_uuid = 'file_uuid_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->deleteFile($file_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_uuid** | **string**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DeleteFile200Response**](../Model/DeleteFile200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFile()`

```php
getFile($file_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \SplFileObject
```

Getfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_uuid = 'file_uuid_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->getFile($file_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_uuid** | **string**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFile()`

```php
updateFile($file_uuid, $file, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\UpdateFile200Response
```

Updatefile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_uuid = 'file_uuid_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->updateFile($file_uuid, $file, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_uuid** | **string**|  |
 **file** | **\SplFileObject****\SplFileObject**|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UpdateFile200Response**](../Model/UpdateFile200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
