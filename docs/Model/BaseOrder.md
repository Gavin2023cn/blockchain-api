# # BaseOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cl_ord_id** | **string** | Reference field provided by client. Cannot exceed 20 characters, only alphanumeric characters are allowed. | 
**ord_type** | [**\BlockChainRest\Model\OrdType**](OrdType.md) |  | 
**symbol** | **string** | Blockchain symbol identifier | 
**side** | [**\BlockChainRest\Model\Side**](Side.md) |  | 
**order_qty** | **double** | The order size in the terms of the base currency | 
**time_in_force** | [**\BlockChainRest\Model\TimeInForce**](TimeInForce.md) |  | [optional] 
**price** | **double** | The limit price for the order | [optional] 
**expire_date** | **int** | expiry date in the format YYYYMMDD | [optional] 
**min_qty** | **double** | The minimum quantity required for an IOC fill | [optional] 
**stop_px** | **double** | The limit price for the order | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


