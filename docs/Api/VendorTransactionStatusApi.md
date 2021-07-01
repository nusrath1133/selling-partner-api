# SellingPartnerApi\VendorTransactionStatusApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransaction()**](VendorTransactionStatusApi.md#getTransaction) | **GET** /vendor/transactions/v1/transactions/{transactionId} | 


## `getTransaction()`

```php
getTransaction($transaction_id): \SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse
```



Returns the status of the transaction that you specify.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the ConfigurationOptions object
$configurationOptions = new SellingPartnerApi\ConfigurationOptions(
    "amzn1.application-oa2-client.....",
    "abcd....",
    "Aztr|IwEBI....",
    "AKIA....",
    "ABCD....",
    "us-east-1",
    "https://sellingpartnerapi-na.amazon.com",
);
$config = new SellingPartnerApi\Configuration($configurationOptions);

$apiInstance = new SellingPartnerApi\Api\VendorTransactionStatusApi($config);
$transaction_id = 'transaction_id_example'; // string | The GUID provided by Amazon in the 'transactionId' field in response to the post request of a specific transaction.

try {
    $result = $apiInstance->getTransaction($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorTransactionStatusApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The GUID provided by Amazon in the &#39;transactionId&#39; field in response to the post request of a specific transaction. |

### Return type

[**\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse**](../Model/VendorTransactionStatus/GetTransactionResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorTransactionStatus Model list]](../Model/VendorTransactionStatus)
[[README]](../../README.md)