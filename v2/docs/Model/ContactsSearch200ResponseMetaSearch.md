# # ContactsSearch200ResponseMetaSearch

## Properties

| Name | Type | Description | Notes |
| ------------ | ------------- | ------------- | ------------- |
| **field** | **string** | Field for search. Possible values: id, phone, group_id, date, {field_id}  {field_id} – custom field ID; can be got from [GET /api/contacts/fields](#operation/contact_fields) | [optional] |
| **operator** | [**\BSG\Api\V2\Model\SearchOperator**](SearchOperator.md) |  | [optional] |
| **value** | **string** | Value to to find using search[field] and search[operator] | [optional] |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
