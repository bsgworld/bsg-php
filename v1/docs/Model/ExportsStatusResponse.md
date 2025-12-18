# # ExportsStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**job_id** | **string** | Unique job identifier |
**status** | **string** | Current job status |
**progress** | **int** | Job progress percentage | [optional]
**records_processed** | **int** | Number of records processed | [optional]
**file_url** | **string** | Download URL for completed export (if status &#x3D; completed) | [optional]
**error_message** | **string** | Error details (if status &#x3D; failed) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
