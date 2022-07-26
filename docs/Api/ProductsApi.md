# OpenAPI\Client\ProductsApi

All URIs are relative to https://api.prod.ehelply.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProduct()**](ProductsApi.md#createProduct) | **POST** /products/products | Createproduct
[**deleteProduct()**](ProductsApi.md#deleteProduct) | **DELETE** /products/products/{product_uuid} | Deleteproduct
[**getProduct()**](ProductsApi.md#getProduct) | **GET** /products/products/{product_uuid} | Getproduct
[**searchProductCatalog()**](ProductsApi.md#searchProductCatalog) | **GET** /products/products/{product_uuid}/catalogs | Searchproductcatalog
[**searchProducts()**](ProductsApi.md#searchProducts) | **GET** /products/products | Searchproducts
[**updateProduct()**](ProductsApi.md#updateProduct) | **PUT** /products/products/{product_uuid} | Updateproduct


## `createProduct()`

```php
createProduct($product_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\ProductReturn
```

Createproduct

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_base = new \OpenAPI\Client\Model\ProductBase(); // \OpenAPI\Client\Model\ProductBase
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->createProduct($product_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_base** | [**\OpenAPI\Client\Model\ProductBase**](../Model/ProductBase.md)|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProductReturn**](../Model/ProductReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProduct()`

```php
deleteProduct($product_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): bool
```

Deleteproduct

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_uuid = 'product_uuid_example'; // string
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->deleteProduct($product_uuid, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_uuid** | **string**|  |
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

## `getProduct()`

```php
getProduct($product_uuid, $with_addons, $with_meta, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\ProductReturn
```

Getproduct

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_uuid = 'product_uuid_example'; // string
$with_addons = false; // bool
$with_meta = false; // bool
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->getProduct($product_uuid, $with_addons, $with_meta, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_uuid** | **string**|  |
 **with_addons** | **bool**|  | [optional] [default to false]
 **with_meta** | **bool**|  | [optional] [default to false]
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProductReturn**](../Model/ProductReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchProductCatalog()`

```php
searchProductCatalog($product_uuid, $with_meta, $page, $page_size, $sort_on, $sort_desc, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\Page
```

Searchproductcatalog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_uuid = 'product_uuid_example'; // string
$with_meta = false; // bool
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
    $result = $apiInstance->searchProductCatalog($product_uuid, $with_meta, $page, $page_size, $sort_on, $sort_desc, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->searchProductCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_uuid** | **string**|  |
 **with_meta** | **bool**|  | [optional] [default to false]
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

## `searchProducts()`

```php
searchProducts($with_meta, $name, $addons, $price_max, $price_min, $quantity_available, $is_deleted, $page, $page_size, $sort_on, $sort_desc, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\Page
```

Searchproducts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$with_meta = false; // bool
$name = 'name_example'; // string
$addons = array('addons_example'); // string[]
$price_max = 56; // int
$price_min = 56; // int
$quantity_available = false; // bool
$is_deleted = false; // bool
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
    $result = $apiInstance->searchProducts($with_meta, $name, $addons, $price_max, $price_min, $quantity_available, $is_deleted, $page, $page_size, $sort_on, $sort_desc, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->searchProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with_meta** | **bool**|  | [optional] [default to false]
 **name** | **string**|  | [optional]
 **addons** | [**string[]**](../Model/string.md)|  | [optional]
 **price_max** | **int**|  | [optional]
 **price_min** | **int**|  | [optional]
 **quantity_available** | **bool**|  | [optional] [default to false]
 **is_deleted** | **bool**|  | [optional] [default to false]
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

## `updateProduct()`

```php
updateProduct($product_uuid, $product_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data): \OpenAPI\Client\Model\ProductReturn
```

Updateproduct

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_uuid = 'product_uuid_example'; // string
$product_base = new \OpenAPI\Client\Model\ProductBase(); // \OpenAPI\Client\Model\ProductBase
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->updateProduct($product_uuid, $product_base, $x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_uuid** | **string**|  |
 **product_base** | [**\OpenAPI\Client\Model\ProductBase**](../Model/ProductBase.md)|  |
 **x_access_token** | **string**|  | [optional]
 **x_secret_token** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **ehelply_active_participant** | **string**|  | [optional]
 **ehelply_project** | **string**|  | [optional]
 **ehelply_data** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProductReturn**](../Model/ProductReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
