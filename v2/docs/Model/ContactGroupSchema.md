# # ContactGroupSchema

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **id** | **int** | ID of the contact list. generated automatically when creating a [contact list](#operation/contact_list_create) | [optional] |
| **name** | **string** | Name of the contact list | [optional] |
| **description** | **string** | Description of the contact list | [optional] |
| **default** | **bool** | Specifies whether the contact list is a default one | [optional] [default to false] |
| **created_at** | **\DateTime** | Date when the item was created in the system ― set by the system automatically. Display format ― Y-m-d H:i:s | [optional] |
| **items** | **int** | Total number of contacts in this list | [optional] |
| **stop_list_count** | **int** | The number of contacts from the list that are in the stop list of SMS and Viber | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
