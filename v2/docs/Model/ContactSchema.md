# # ContactSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Contact ID in the platform personal account, which is generated automatically when a contact is added to the Contact Book | [optional]
**phone** | **int** | Contact’s phone number | [optional]
**fields** | **array<string,string>[]** | List of contact custom field values | [optional]
**created_at** | **\DateTime** | Date when the item was created in the system ― set by the system automatically. Display format ― Y-m-d H:i:s | [optional]
**groups** | [**\BSG\\Api\\V2\Model\ContactGroupSchema[]**](ContactGroupSchema.md) | contains embedded data of the list where the contact is added | [optional]
**hlr_status** | **string** | Last hlr check status of contact phone number | [optional]
**hlr_last_check** | **\DateTime** | Last hlr check time of contact phone number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
