# OpenAPI\Client\SecurityApi

All URIs are relative to https://api.prod.ehelply.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEncryptionKey()**](SecurityApi.md#createEncryptionKey) | **POST** /sam/security/encryption/categories/{category}/keys | Createencryptionkey
[**createKey()**](SecurityApi.md#createKey) | **POST** /sam/security/keys | Createkey
[**deleteKey()**](SecurityApi.md#deleteKey) | **DELETE** /sam/security/keys/{key_uuid} | Deletekey
[**generateToken()**](SecurityApi.md#generateToken) | **POST** /sam/security/tokens | Generatetoken
[**getEncryptionKey()**](SecurityApi.md#getEncryptionKey) | **GET** /sam/security/encryption/categories/{category}/keys | Getencryptionkey
[**getKey()**](SecurityApi.md#getKey) | **GET** /sam/security/keys/{key_uuid} | Getkey
[**searchKeys()**](SecurityApi.md#searchKeys) | **GET** /sam/security/keys | Searchkeys
[**verifyKey()**](SecurityApi.md#verifyKey) | **POST** /sam/security/keys/verify | Verifykey


## `createEncryptionKey()`

```php
createEncryptionKey($category, $ehelply_security_secret_key): \OpenAPI\Client\Model\SecurityEncryptionKeyResponse
```

Createencryptionkey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = 'category_example'; // string
$ehelply_security_secret_key = 'ehelply_security_secret_key_example'; // string

try {
    $result = $apiInstance->createEncryptionKey($category, $ehelply_security_secret_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->createEncryptionKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  |
 **ehelply_security_secret_key** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SecurityEncryptionKeyResponse**](../Model/SecurityEncryptionKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createKey()`

```php
createKey($security_key_create, $access_length, $secret_length): \OpenAPI\Client\Model\ResponseCreatekey
```

Createkey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$security_key_create = new \OpenAPI\Client\Model\SecurityKeyCreate(); // \OpenAPI\Client\Model\SecurityKeyCreate
$access_length = 64; // int
$secret_length = 64; // int

try {
    $result = $apiInstance->createKey($security_key_create, $access_length, $secret_length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->createKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **security_key_create** | [**\OpenAPI\Client\Model\SecurityKeyCreate**](../Model/SecurityKeyCreate.md)|  |
 **access_length** | **int**|  | [optional] [default to 64]
 **secret_length** | **int**|  | [optional] [default to 64]

### Return type

[**\OpenAPI\Client\Model\ResponseCreatekey**](../Model/ResponseCreatekey.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteKey()`

```php
deleteKey($key_uuid): \OpenAPI\Client\Model\ResponseDeletekey
```

Deletekey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key_uuid = 'key_uuid_example'; // string

try {
    $result = $apiInstance->deleteKey($key_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->deleteKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_uuid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ResponseDeletekey**](../Model/ResponseDeletekey.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateToken()`

```php
generateToken($security_create_token): \OpenAPI\Client\Model\ResponseGeneratetoken
```

Generatetoken

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$security_create_token = new \OpenAPI\Client\Model\SecurityCreateToken(); // \OpenAPI\Client\Model\SecurityCreateToken

try {
    $result = $apiInstance->generateToken($security_create_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->generateToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **security_create_token** | [**\OpenAPI\Client\Model\SecurityCreateToken**](../Model/SecurityCreateToken.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponseGeneratetoken**](../Model/ResponseGeneratetoken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEncryptionKey()`

```php
getEncryptionKey($category, $ehelply_security_secret_key): \OpenAPI\Client\Model\SecurityEncryptionKeyGet[]
```

Getencryptionkey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = 'category_example'; // string
$ehelply_security_secret_key = 'ehelply_security_secret_key_example'; // string

try {
    $result = $apiInstance->getEncryptionKey($category, $ehelply_security_secret_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getEncryptionKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  |
 **ehelply_security_secret_key** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SecurityEncryptionKeyGet[]**](../Model/SecurityEncryptionKeyGet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKey()`

```php
getKey($key_uuid): \OpenAPI\Client\Model\SecurityKeyGet
```

Getkey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key_uuid = 'key_uuid_example'; // string

try {
    $result = $apiInstance->getKey($key_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_uuid** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\SecurityKeyGet**](../Model/SecurityKeyGet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchKeys()`

```php
searchKeys(): \OpenAPI\Client\Model\SecurityKeyGet[]
```

Searchkeys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->searchKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->searchKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SecurityKeyGet[]**](../Model/SecurityKeyGet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyKey()`

```php
verifyKey($security_key_verify): \OpenAPI\Client\Model\SecurityKeyGet
```

Verifykey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$security_key_verify = new \OpenAPI\Client\Model\SecurityKeyVerify(); // \OpenAPI\Client\Model\SecurityKeyVerify

try {
    $result = $apiInstance->verifyKey($security_key_verify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->verifyKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **security_key_verify** | [**\OpenAPI\Client\Model\SecurityKeyVerify**](../Model/SecurityKeyVerify.md)|  |

### Return type

[**\OpenAPI\Client\Model\SecurityKeyGet**](../Model/SecurityKeyGet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
