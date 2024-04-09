# BlockChainRest\TradingApi

All URIs are relative to *https://api.blockchain.com/v3/exchange*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrder**](TradingApi.md#createOrder) | **POST** /orders | Add an order
[**deleteAllOrders**](TradingApi.md#deleteAllOrders) | **DELETE** /orders | Delete all open orders (of a symbol, if specified)
[**deleteOrder**](TradingApi.md#deleteOrder) | **DELETE** /orders/{orderId} | Cancel a trade
[**getFees**](TradingApi.md#getFees) | **GET** /fees | Get current fee level
[**getFills**](TradingApi.md#getFills) | **GET** /trades | Get a list of filled orders
[**getOrderById**](TradingApi.md#getOrderById) | **GET** /orders/{orderId} | Get a specific order
[**getOrders**](TradingApi.md#getOrders) | **GET** /orders | Get a list orders



## createOrder

> \BlockChainRest\Model\OrderSummary createOrder($base_order)

Add an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\TradingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_order = new \BlockChainRest\Model\BaseOrder(); // \BlockChainRest\Model\BaseOrder | Trade

try {
    $result = $apiInstance->createOrder($base_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradingApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **base_order** | [**\BlockChainRest\Model\BaseOrder**](../Model/BaseOrder.md)| Trade |

### Return type

[**\BlockChainRest\Model\OrderSummary**](../Model/OrderSummary.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAllOrders

> deleteAllOrders($symbol)

Delete all open orders (of a symbol, if specified)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\TradingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | 

try {
    $apiInstance->deleteAllOrders($symbol);
} catch (Exception $e) {
    echo 'Exception when calling TradingApi->deleteAllOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteOrder

> deleteOrder($order_id)

Cancel a trade

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\TradingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order ID

try {
    $apiInstance->deleteOrder($order_id);
} catch (Exception $e) {
    echo 'Exception when calling TradingApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFees

> \BlockChainRest\Model\Fees getFees()

Get current fee level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\TradingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFees();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradingApi->getFees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BlockChainRest\Model\Fees**](../Model/Fees.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFills

> \BlockChainRest\Model\OrderSummary[] getFills($symbol, $from, $to, $limit)

Get a list of filled orders

Returns filled orders, including partial fills. Returns at most 100 results, use timestamp to paginate for further results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\TradingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Only return results for this symbol
$from = 56; // int | Epoch timestamp in ms
$to = 56; // int | Epoch timestamp in ms
$limit = 100; // int | Maximum amount of results to return in a single call. If omitted, 100 results are returned by default.

try {
    $result = $apiInstance->getFills($symbol, $from, $to, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradingApi->getFills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Only return results for this symbol | [optional]
 **from** | **int**| Epoch timestamp in ms | [optional]
 **to** | **int**| Epoch timestamp in ms | [optional]
 **limit** | **int**| Maximum amount of results to return in a single call. If omitted, 100 results are returned by default. | [optional]

### Return type

[**\BlockChainRest\Model\OrderSummary[]**](../Model/OrderSummary.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderById

> \BlockChainRest\Model\OrderSummary getOrderById($order_id)

Get a specific order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\TradingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order ID

try {
    $result = $apiInstance->getOrderById($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradingApi->getOrderById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\BlockChainRest\Model\OrderSummary**](../Model/OrderSummary.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrders

> \BlockChainRest\Model\OrderSummary[] getOrders($symbol, $from, $to, $status, $limit)

Get a list orders

Returns live and historic orders, defaulting to live orders. Returns at most 100 results, use timestamp to paginate for further results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\TradingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string | Only return results for this symbol
$from = 56; // int | Epoch timestamp in ms
$to = 56; // int | Epoch timestamp in ms
$status = new \BlockChainRest\Model\\BlockChainRest\Model\OrderStatus(); // \BlockChainRest\Model\OrderStatus | Order Status
$limit = 100; // int | Maximum amount of results to return in a single call. If omitted, 100 results are returned by default.

try {
    $result = $apiInstance->getOrders($symbol, $from, $to, $status, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradingApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Only return results for this symbol | [optional]
 **from** | **int**| Epoch timestamp in ms | [optional]
 **to** | **int**| Epoch timestamp in ms | [optional]
 **status** | [**\BlockChainRest\Model\OrderStatus**](../Model/.md)| Order Status | [optional]
 **limit** | **int**| Maximum amount of results to return in a single call. If omitted, 100 results are returned by default. | [optional]

### Return type

[**\BlockChainRest\Model\OrderSummary[]**](../Model/OrderSummary.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

