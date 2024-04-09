# BlockChainRest\PaymentsApi

All URIs are relative to *https://api.blockchain.com/v3/exchange*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWithdrawal**](PaymentsApi.md#createWithdrawal) | **POST** /withdrawals | Request a withdrawal
[**getAccountByTypeAndCurrency**](PaymentsApi.md#getAccountByTypeAndCurrency) | **GET** /accounts/{account}/{currency} | Receive current account balances
[**getAccounts**](PaymentsApi.md#getAccounts) | **GET** /accounts | Receive current account balances
[**getDepositAddress**](PaymentsApi.md#getDepositAddress) | **POST** /deposits/{currency} | Get a deposit address. Currently only crypto currencies are supported
[**getDepositById**](PaymentsApi.md#getDepositById) | **GET** /deposits/{depositId} | Get status about a deposit
[**getDeposits**](PaymentsApi.md#getDeposits) | **GET** /deposits | Get a list of deposits
[**getWhitelist**](PaymentsApi.md#getWhitelist) | **GET** /whitelist | Get a list of all whitelisted withdrawal accounts
[**getWhitelistByCurrency**](PaymentsApi.md#getWhitelistByCurrency) | **GET** /whitelist/{currency} | Get a list of all whitelisted withdrawal accounts
[**getWithdrawalById**](PaymentsApi.md#getWithdrawalById) | **GET** /withdrawals/{withdrawalId} | Get status about a withdrawal
[**getWithdrawals**](PaymentsApi.md#getWithdrawals) | **GET** /withdrawals | Get a list of withdrawals



## createWithdrawal

> \BlockChainRest\Model\WithdrawalInfo createWithdrawal($create_withdrawal_request)

Request a withdrawal

Call `GET /whitelist` first to retrieve the ID of the beneficiary. To add a beneficiary to the whitelist, please visit the profile page in the Exchange. This call only works if 2FA is enabled on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_withdrawal_request = new \BlockChainRest\Model\CreateWithdrawalRequest(); // \BlockChainRest\Model\CreateWithdrawalRequest | 

try {
    $result = $apiInstance->createWithdrawal($create_withdrawal_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createWithdrawal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_withdrawal_request** | [**\BlockChainRest\Model\CreateWithdrawalRequest**](../Model/CreateWithdrawalRequest.md)|  |

### Return type

[**\BlockChainRest\Model\WithdrawalInfo**](../Model/WithdrawalInfo.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountByTypeAndCurrency

> \BlockChainRest\Model\Balance getAccountByTypeAndCurrency($account, $currency)

Receive current account balances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = primary; // string | Account
$currency = 'currency_example'; // string | Currency

try {
    $result = $apiInstance->getAccountByTypeAndCurrency($account, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getAccountByTypeAndCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**| Account |
 **currency** | **string**| Currency |

### Return type

[**\BlockChainRest\Model\Balance**](../Model/Balance.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccounts

> \BlockChainRest\Model\BalanceMap getAccounts()

Receive current account balances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BlockChainRest\Model\BalanceMap**](../Model/BalanceMap.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDepositAddress

> \BlockChainRest\Model\DepositAddressCrypto getDepositAddress($currency)

Get a deposit address. Currently only crypto currencies are supported

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string | Currency

try {
    $result = $apiInstance->getDepositAddress($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getDepositAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency |

### Return type

[**\BlockChainRest\Model\DepositAddressCrypto**](../Model/DepositAddressCrypto.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDepositById

> \BlockChainRest\Model\DepositInfo getDepositById($deposit_id)

Get status about a deposit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deposit_id = 'deposit_id_example'; // string | Deposit ID

try {
    $result = $apiInstance->getDepositById($deposit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getDepositById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deposit_id** | **string**| Deposit ID |

### Return type

[**\BlockChainRest\Model\DepositInfo**](../Model/DepositInfo.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeposits

> \BlockChainRest\Model\DepositInfo[] getDeposits($from, $to)

Get a list of deposits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 56; // int | Epoch timestamp in ms
$to = 56; // int | Epoch timestamp in ms

try {
    $result = $apiInstance->getDeposits($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getDeposits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **int**| Epoch timestamp in ms | [optional]
 **to** | **int**| Epoch timestamp in ms | [optional]

### Return type

[**\BlockChainRest\Model\DepositInfo[]**](../Model/DepositInfo.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWhitelist

> \BlockChainRest\Model\WhitelistEntry[] getWhitelist()

Get a list of all whitelisted withdrawal accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWhitelist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getWhitelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BlockChainRest\Model\WhitelistEntry[]**](../Model/WhitelistEntry.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWhitelistByCurrency

> \BlockChainRest\Model\WhitelistEntry[] getWhitelistByCurrency($currency)

Get a list of all whitelisted withdrawal accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string | Currency

try {
    $result = $apiInstance->getWhitelistByCurrency($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getWhitelistByCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency |

### Return type

[**\BlockChainRest\Model\WhitelistEntry[]**](../Model/WhitelistEntry.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWithdrawalById

> \BlockChainRest\Model\WithdrawalInfo getWithdrawalById($withdrawal_id)

Get status about a withdrawal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$withdrawal_id = 'withdrawal_id_example'; // string | Withdrawal ID

try {
    $result = $apiInstance->getWithdrawalById($withdrawal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getWithdrawalById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **withdrawal_id** | **string**| Withdrawal ID |

### Return type

[**\BlockChainRest\Model\WithdrawalInfo**](../Model/WithdrawalInfo.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWithdrawals

> \BlockChainRest\Model\WithdrawalInfo[] getWithdrawals($from, $to)

Get a list of withdrawals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlockChainRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');


$apiInstance = new BlockChainRest\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 56; // int | Epoch timestamp in ms
$to = 56; // int | Epoch timestamp in ms

try {
    $result = $apiInstance->getWithdrawals($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getWithdrawals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **int**| Epoch timestamp in ms | [optional]
 **to** | **int**| Epoch timestamp in ms | [optional]

### Return type

[**\BlockChainRest\Model\WithdrawalInfo[]**](../Model/WithdrawalInfo.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

