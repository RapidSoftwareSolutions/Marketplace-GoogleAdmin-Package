[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/GoogleAdmin/functions?utm_source=RapidAPIGitHub_GoogleAdminFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# GoogleAdmin Package
Use the Admin API to create and manage users and groups for a domain, along with their aliases. Programmatically access the functionality found at the Admin console Organization and users tab.
* Domain: [GoogleAdmin](http://gsuite.com/)
* Credentials: apiKey, apiSecret

## How to get credentials: 
0. Go to [Google Developers Console](https://console.developers.google.com/?authuser=1);
1. Select a project, or create a new one.
2. Press **Continue** to activate API key.
3. In the sidebar on the left, select **Credentials**.
4. If your project has no API key for the server, create it now - **Add credentials > API key > Server key**;



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## GoogleAdmin.getAccessToken
Exchange code for access token.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| The client ID that you obtain from the API Console, as described in Obtain OAuth 2.0 credentials.
| clientSecret| credentials| The client secret that you obtain from the API Console, as described in Obtain OAuth 2.0 credentials.
| code        | String     | The authorization code that is returned from the initial request.
| redirectUri | String     | The URI that you specify in the API Console, as described in Set a redirect URI.

## GoogleAdmin.deleteAsps
Delete an ASP issued by a user. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| aspsId     | String| The unique ID of the ASP to be deleted.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.getAsps
Get information about an ASP issued by a user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| aspsId     | String| The unique ID of the ASP to be deleted.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.listAsps
List the ASPs issued by a user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.stopWatchingResource
Stop watching resources through this channel

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| channelId  | String| A UUID or similar unique string that identifies this channel.
| resourceId | String| An opaque ID that identifies the resource being watched on this channel. Stable across different API versions.

## GoogleAdmin.makeActionOnChromeosDevice
Takes an action that affects a Chrome OS Device. This includes deprovisioning, disabling, and re-enabling devices.

| Field            | Type  | Description
|------------------|-------|----------
| accessToken      | String| OAuth 2.0 token for the current user.
| customerId       | String| The unique ID for the customer's G Suite account.
| deviceId         | String| An opaque ID that identifies the resource being watched on this channel. Stable across different API versions.
| action           | Select| Action to be taken on the Chrome OS device 
| deprovisionReason| String| Only used when the action is deprovision.

## GoogleAdmin.getSingleChromeosDevice
Retrieves a Chrome OS device's properties.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| customerId | String| The unique ID for the customer's G Suite account.
| deviceId   | String| An opaque ID that identifies the resource being watched on this channel. Stable across different API versions.
| projection | Select| Determines whether the response contains the full list of properties or only a subset. 

## GoogleAdmin.listChromeosDevices
Retrieves a paginated list of Chrome OS devices within an account

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| customerId | String| The unique ID for the customer's G Suite account.
| orderBy    | Select| Device property to use for sorting results. 
| maxResults | Number| Maximum number of results to return. Default, and maximum, is 100.
| orgUnitPath| String| The full path of the organization unit or its unique ID.
| pageToken  | String| The pageToken query parameter is used to request the next page of query results. 
| projection | Select| Determines whether the response contains the full list of properties or only a subset. 
| query      | String| Search string in the format given at View device information and organizational units (https://support.google.com/chrome/a/answer/1698333?hl=en)
| sortOrder  | Select| Whether to return results in ascending or descending order. Must be used with the orderBy parameter. 

## GoogleAdmin.moveChromeosDevicesToOu
Move or insert multiple Chrome OS devices to an Organization Unit. You can move up to 50 devices at once.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| customerId | String| The unique ID for the customer's G Suite account.
| orgUnitPath| String| Full path of the target organization unit or its ID
| deviceIds  | List  | Chrome OS devices to be moved to OU

## GoogleAdmin.updateChromeosDevice
Updates a device's annotatedUser, annotatedLocation, or notes properties.

| Field            | Type  | Description
|------------------|-------|----------
| accessToken      | String| OAuth 2.0 token for the current user.
| customerId       | String| The unique ID for the customer's G Suite account.
| deviceId         | String| An opaque ID that identifies the resource being watched on this channel. Stable across different API versions.
| projection       | Select| Determines whether the response contains the full list of properties or only a subset. 
| annotatedAssetId | String| The asset identifier as noted by an administrator or specified during enrollment.
| annotatedLocation| String| The address or location of the device as noted by the administrator. Maximum length is 200 characters. Empty values are allowed.
| notes            | String| Notes about this device added by the administrator. This property can be searched with the list method's query parameter. Maximum length is 500 characters. Empty values are allowed.
| orgUnitPath      | String| The full parent path with the organization unit's name associated with the device. Path names are case insensitive.

## GoogleAdmin.getSingleCustomer
Retrieves a customer. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| customerId | String| The unique ID for the customer's G Suite account.

## GoogleAdmin.updateCustomer
Updates a customer.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| OAuth 2.0 token for the current user.
| customerId    | String| The unique ID for the customer's G Suite account.
| alternateEmail| String| The customer's secondary contact email address. This email address cannot be on the same domain as the customerDomain
| customerDomain| String| The customer's primary domain name string. Do not include the www prefix when creating a new customer.
| etag          | String| ETag of the resource.
| language      | String| The customer's ISO 639-2 language code. See the Language Codes page for the list of supported codes. Valid language codes outside the supported set will be accepted by the API but may lead to unexpected behavior. The default value is en.
| phoneNumber   | String| The customer's contact phone number in E.164 format.
| postalAddress | JSON  | The JSON object with customer's postal address information.

## GoogleAdmin.deleteDomainAlias
Deletes a Domain Alias of the customer. 

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| OAuth 2.0 token for the current user.
| accountId      | String| Immutable ID of the G Suite account.
| domainAliasName| String| Name of domain alias to be deleted.

## GoogleAdmin.getSingleDomainAlias
Retrieves a domain alias of the customer.

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| OAuth 2.0 token for the current user.
| accountId      | String| Immutable ID of the G Suite account.
| domainAliasName| String| Name of domain alias to be retrieved.

## GoogleAdmin.addDomainAlias
Inserts a Domain alias of the customer.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Immutable ID of the G Suite account.
| domainAliasName | String| Name of domain alias to be retrieved.
| etag            | String| ETag of the resource.
| kind            | String| Kind of the resource.
| parentDomainName| String| The parent domain name that the domain alias is associated with. This can either be a primary or secondary domain name within a customer.

## GoogleAdmin.listDomainAliases
Lists the domain aliases of the customer.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Immutable ID of the G Suite account.
| parentDomainName| String| The parent domain name that the domain alias is associated with. This can either be a primary or secondary domain name within a customer.

## GoogleAdmin.deleteDomain
Deletes a Domain of the customer. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.
| domainName | String| Name of domain to be deleted.

## GoogleAdmin.getSingleDomain
Retrieves a domain of the customer. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.
| domainName | String| Name of domain to be deleted.

## GoogleAdmin.addDomain
Retrieves a domain of the customer. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.
| domainName | String| Name of domain to be deleted.

## GoogleAdmin.listDomains
Lists the domains of the customer.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.

## GoogleAdmin.deleteGroup
Deletes a group.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| groupKey   | String| Identifies the group in the API request. The value can be the group's email address, group alias, or the unique group ID.

## GoogleAdmin.getSingleGroup
Retrieves a group's properties. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| groupKey   | String| Identifies the group in the API request. The value can be the group's email address, group alias, or the unique group ID.

## GoogleAdmin.addGroup
Creates a group.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| email      | String| The group's email address. If your account has multiple domains, select the appropriate domain for the email address. The email must be unique. 
| description| String| An extended description to help users determine the purpose of a group. 
| name       | String| The group's display name.

## GoogleAdmin.listGroups
Retrieves a paginated list of groups in a domain.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| customer   | String| The group's display name.
| domain     | String| The domain name. Use this field to get fields from only one domain.
| maxResults | Number| Maximum number of results to return. Default, and maximum, is 200.
| pageToken  | String| Token to specify next page in the list
| userKey    | String| The userKey query parameter returns all groups for which a user or group has a membership.

## GoogleAdmin.updateGroup
Creates a group.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| groupKey   | String| Identifies the group in the API request. The value can be the group's email address, group alias, or the unique group ID.
| email      | String| The group's email address. If your account has multiple domains, select the appropriate domain for the email address. The email must be unique. 
| description| String| An extended description to help users determine the purpose of a group. 
| name       | String| The group's display name.

## GoogleAdmin.deleteGroupAlias
Removes an alias.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| groupKey   | String| Identifies the group in the API request. The value can be the group's email address, group alias, or the unique group ID.
| alias      | String| The alias to be removed

## GoogleAdmin.addGroupAlias
Adds an alias for the group. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| groupKey   | String| Identifies the group in the API request. The value can be the group's email address, group alias, or the unique group ID.
| alias      | String| The alias email address

## GoogleAdmin.listAliases
Lists all aliases for a group.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| groupKey   | String| Identifies the group in the API request. The value can be the group's email address, group alias, or the unique group ID.

## GoogleAdmin.deleteMember
Removes a member from a group. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| groupKey   | String| Identifies the group in the API request. The value can be the group's email address, group alias, or the unique group ID.
| memberKey  | String| Identifies the group member in the API request. A group member can be a user or another group. The value can be the member's (group or user) primary email address, alias, or unique ID.

## GoogleAdmin.getSingleMember
Retrieves a group member's properties.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| groupKey   | String| Identifies the group in the API request. The value can be the group's email address, group alias, or the unique group ID.
| memberKey  | String| Identifies the group member in the API request. A group member can be a user or another group. The value can be the member's (group or user) primary email address, alias, or unique ID.

## GoogleAdmin.addMember
Adds a user to the specified group.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| groupKey   | String| Identifies the group in the API request. The value can be the group's email address, group alias, or the unique group ID.
| role       | Select| The member's role in a group. The API returns an error for cycles in group memberships. For example, if group1 is a member of group2, group2 cannot be a member of group1.

## GoogleAdmin.listMembers
Retrieves a paginated list of all members in a group.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| groupKey   | String| Identifies the group in the API request. The value can be the group's email address, group alias, or the unique group ID.
| maxResults | Number| Maximum number of results to return. Default, and maximum, is 200.
| pageToken  | String| Token to specify next page in the list
| roles      | Select| The member's role in a group. The API returns an error for cycles in group memberships. For example, if group1 is a member of group2, group2 cannot be a member of group1.

## GoogleAdmin.updateMember
Retrieves a group member's properties.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| groupKey   | String| Identifies the group in the API request. The value can be the group's email address, group alias, or the unique group ID.
| memberKey  | String| Identifies the group member in the API request. A group member can be a user or another group. The value can be the member's (group or user) primary email address, alias, or unique ID.
| role       | Select| The member's role in a group. The API returns an error for cycles in group memberships. For example, if group1 is a member of group2, group2 cannot be a member of group1.

## GoogleAdmin.makeActionOnMobileDevice
Takes an action that affects a mobile device. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| customerId | String| The unique ID for the customer's G Suite account.
| deviceId   | String| An opaque ID that identifies the resource being watched on this channel. Stable across different API versions.
| action     | Select| The action to be performed on the device. 

## GoogleAdmin.deleteMobileDevice
Removes a mobile device.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| customerId | String| The unique ID for the customer's G Suite account.
| deviceId   | String| An opaque ID that identifies the resource being watched on this channel. Stable across different API versions.

## GoogleAdmin.getSingleMobileDevice
Retrieves a mobile device's properties.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| customerId | String| The unique ID for the customer's G Suite account.
| deviceId   | String| An opaque ID that identifies the resource being watched on this channel. Stable across different API versions.
| projection | Select| Determines whether the response contains the full list of properties or only a subset. 

## GoogleAdmin.listMobileDevices
Retrieves a paginated list of all mobile devices for an account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| customerId | String| The unique ID for the customer's G Suite account.
| orderBy    | Select| Device property to use for sorting results. 
| maxResults | Number| Maximum number of results to return. Default, and maximum, is 100.
| pageToken  | String| The pageToken query parameter is used to request the next page of query results. 
| projection | Select| Determines whether the response contains the full list of properties or only a subset. 
| query      | String| Search string in the format given at View device information and organizational units (https://support.google.com/chrome/a/answer/1698333?hl=en)
| sortOrder  | Select| Whether to return results in ascending or descending order. Must be used with the orderBy parameter. 

## GoogleAdmin.deleteNotification
Deletes a notification

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| OAuth 2.0 token for the current user.
| accountId     | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| notificationId| String| The unique ID of the notification.

## GoogleAdmin.getSingleNotification
Retrieves a notification.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| OAuth 2.0 token for the current user.
| accountId     | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| notificationId| String| The unique ID of the notification.

## GoogleAdmin.listNotifications
Retrieves a list of notifications. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| customerId | String| The unique ID for the customer's G Suite account.
| maxResults | Number| Maximum number of results to return. Default, and maximum, is 100.
| pageToken  | String| The pageToken query parameter is used to request the next page of query results. 
| language   | String| The ISO 639-1 code of the language notifications are returned in. The default is English (en).

## GoogleAdmin.updateNotification
Updates a notification. 

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| OAuth 2.0 token for the current user.
| accountId     | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| notificationId| String| The unique ID of the notification.
| isUnread      | Select| Boolean indicating whether the notification is unread or not.

## GoogleAdmin.deleteOrgunit
Removes an organization unit.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| orgUnitPath| String| The full path of the organization unit or its unique ID.

## GoogleAdmin.getSingleOrgunit
Retrieves an organization unit.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| orgUnitPath| String| The full path of the organization unit or its unique ID.

## GoogleAdmin.addOrgunitByParentId
Adds an organization unit using parentOrgUnitId.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| name            | String| The organization unit's path name. For example, an organization unit's name within the /corp/support/sales_support parent path is sales_support. 
| blockInheritance| Select| Determines if a sub-organization unit can inherit the settings of the parent organization. The default value is false, meaning a sub-organization unit inherits the settings of the nearest parent organization unit.
| description     | String| Description of the organization unit.
| orgUnitPath     | String| The full path to the organization unit. The orgUnitPath is a derived property.
| parentOrgUnitId | String| The unique ID of the parent organization unit.

## GoogleAdmin.addOrgunitByParentPath
Adds an organization unit using parentOrgUnitPath.

| Field            | Type  | Description
|------------------|-------|----------
| accessToken      | String| OAuth 2.0 token for the current user.
| accountId        | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| name             | String| The organization unit's path name. For example, an organization unit's name within the /corp/support/sales_support parent path is sales_support. 
| blockInheritance | Select| Determines if a sub-organization unit can inherit the settings of the parent organization. The default value is false, meaning a sub-organization unit inherits the settings of the nearest parent organization unit.
| description      | String| Description of the organization unit.
| orgUnitPath      | String| The full path to the organization unit. The orgUnitPath is a derived property.
| parentOrgUnitPath| String| The organization unit's parent path. For example, /corp/sales is the parent path for /corp/sales/sales_support organization unit.

## GoogleAdmin.listOrgunits
Retrieves a list of all organization units for an account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| type       | Select| Whether to return all sub-organizations or just immediate children.
| orgUnitPath| String| The full path to the organization unit. The orgUnitPath is a derived property.

## GoogleAdmin.updateOrgUnit
Updates an organization unit.

| Field            | Type  | Description
|------------------|-------|----------
| accessToken      | String| OAuth 2.0 token for the current user.
| accountId        | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| orgUnitPath      | String| The full path of the organization unit or its unique ID.
| name             | String| The organization unit's path name. For example, an organization unit's name within the /corp/support/sales_support parent path is sales_support. 
| blockInheritance | Select| Determines if a sub-organization unit can inherit the settings of the parent organization. The default value is false, meaning a sub-organization unit inherits the settings of the nearest parent organization unit.
| description      | String| Description of the organization unit.
| orgUnitPath      | String| The full path to the organization unit. The orgUnitPath is a derived property.
| parentOrgUnitId  | String| The unique ID of the parent organization unit.
| parentOrgUnitPath| String| The organization unit's parent path. For example, /corp/sales is the parent path for /corp/sales/sales_support organization unit.

## GoogleAdmin.listPrivileges
Retrieves a paginated list of all privileges for a customer. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| maxResults | Number| Maximum number of results to return. Default, and maximum, is 200.
| pageToken  | String| Token to specify next page in the list

## GoogleAdmin.deleteCalendarResource
Deletes a calendar resource.

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| OAuth 2.0 token for the current user.
| accountId         | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| calendarResourceId| String| The unique ID of the calendar resource to delete.

## GoogleAdmin.getSingleCalendarResource
Retrieves a calendar resource.

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| OAuth 2.0 token for the current user.
| accountId         | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| calendarResourceId| String| The unique ID of the calendar resource to delete.

## GoogleAdmin.addCalendarResource
Inserts a calendar resource.

| Field              | Type  | Description
|--------------------|-------|----------
| accessToken        | String| OAuth 2.0 token for the current user.
| accountId          | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| resourceName       | String| The name of the calendar resource. For example, Training Room 1A
| resourceDescription| String| The brief description of the calendar resource.
| resourceType       | String| The type of the calendar resource. Used for grouping resources in the calendar user interface.

## GoogleAdmin.listCalendarResources
Retrieves a list of calendar resources for an account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| maxResults | Number| Maximum number of results to return. Default, and maximum, is 200.
| pageToken  | String| Token to specify next page in the list

## GoogleAdmin.updateCalendarResource
Updates a calendar resource. 

| Field              | Type  | Description
|--------------------|-------|----------
| accessToken        | String| OAuth 2.0 token for the current user.
| accountId          | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| calendarResourceId | String| The unique ID of the calendar resource to delete.
| resourceName       | String| The name of the calendar resource. For example, Training Room 1A
| resourceDescription| String| The brief description of the calendar resource.
| resourceType       | String| The type of the calendar resource. Used for grouping resources in the calendar user interface.

## GoogleAdmin.deleteRoleAssignment
Deletes a calendar resource.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| roleAssignmentId| String| Immutable ID of the role assignment.

## GoogleAdmin.getRoleAssignment
Retrieve a role assignment.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| roleAssignmentId| String| Immutable ID of the role assignment.

## GoogleAdmin.addRoleAssignment
Creates a role assignment. 

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| assignedTo      | String| The unique ID of the user this role is assigned to.
| etag            | String| ETag of the resource.
| orgUnitId       | String| If the role is restricted to an organizational unit, this contains the ID for the organizational unit the exercise of this role is restricted to.
| roleAssignmentId| String| ID of this roleAssignment.
| roleId          | String| The ID of the role that is assigned.
| scopeType       | Select| The scope in which this role is assigned. 

## GoogleAdmin.listRoleAssignments
Retrieves a paginated list of all roleAssignments. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| The unique ID for the customer's G Suite account. The customerId is also returned as part of the Users resource.
| maxResults | Number| Maximum number of results to return. Default, and maximum, is 200.
| pageToken  | String| Token to specify next page in the list
| userKey    | String| The user's primary email address, alias email address, or unique user ID. If included in the request, returns role assignments only for this user.
| roleId     | String| Immutable ID of a role. If included in the request, returns only role assignments containing this role ID.

## GoogleAdmin.deleteRole
Deletes a role.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.
| roleId     | String| Immutable ID of the role.

## GoogleAdmin.getSingleRole
Retrieves a role.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.
| roleId     | String| Immutable ID of the role.

## GoogleAdmin.addRole
Creates a role.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| OAuth 2.0 token for the current user.
| accountId     | String| Immutable ID of the G Suite account.
| roleName      | String| Immutable ID of the role.
| rolePrivileges| List  | The set of privileges that are granted to this role.

## GoogleAdmin.listRoles
Retrieves a paginated list of all the roles in a domain.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.
| maxResults | Number| Maximum number of results to return. Default, and maximum, is 200.
| pageToken  | String| Token to specify next page in the list

## GoogleAdmin.updateRole
Updates a role.

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| OAuth 2.0 token for the current user.
| accountId      | String| Immutable ID of the G Suite account.
| roleId         | String| Immutable ID of the role.
| roleName       | String| Immutable ID of the role.
| roleDescription| String| A short description of the role.
| rolePrivileges | List  | The set of privileges that are granted to this role.

## GoogleAdmin.deleteSchema
Delete schema 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.
| schemaId   | String| Name or immutable ID of the schema.

## GoogleAdmin.getSingleSchema
Retrieve schema 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.
| schemaId   | String| Name or immutable ID of the schema.

## GoogleAdmin.addSchema
Create schema.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.
| schemaName | String| Name of the schema.
| fields     | List  | A list of fields in the schema.

## GoogleAdmin.listSchemas
Retrieve all schemas for a customer

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.

## GoogleAdmin.updateSchema
Update schema.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Immutable ID of the G Suite account.
| schemaId   | String| Name or immutable ID of the schema.
| schemaName | String| Name of the schema.
| fields     | List  | A list of fields in the schema.

## GoogleAdmin.deleteToken
Delete all access tokens issued by a user for an application. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.
| clientId   | String| The Client ID of the application the token is issued to.

## GoogleAdmin.getSingleToken
Get information about an access token issued by a user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.
| clientId   | String| The Client ID of the application the token is issued to.

## GoogleAdmin.listTokens
Returns the set of tokens specified user has issued to 3rd party applications.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.deleteUser
Deletes a user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.getSingleUser
Retrieves a user.

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| OAuth 2.0 token for the current user.
| userKey        | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.
| customFieldMask| List  | List of schema names. All fields from these schemas are fetched. This should only be set when projection=custom.
| projection     | Select| Determines whether the response contains the full list of properties or only a subset. 
| viewType       | Select| Whether to fetch the administrator-only or domain-wide public view of the user. 

## GoogleAdmin.addUser
Creates a user.

| Field                     | Type  | Description
|---------------------------|-------|----------
| accessToken               | String| OAuth 2.0 token for the current user.
| familyName                | String| The user's last name. Required when creating a user account.
| givenName                 | String| The user's given name. Required when creating a user account.
| password                  | String| Stores the password for the user account. 
| primaryEmail              | String| The user's primary email address. 
| addresses                 | List  | The user's addresses
| changePasswordAtNextLogin | Select| Indicates if the user is forced to change their password at next login.
| emails                    | List  | The user's email addresses
| externalIds               | List  | The user's externalIds
| hashFunction              | Select| Stores the hash format of the password property. We recommend sending the password property value as a base 16 bit hexadecimal-encoded hash value. Set the hashFunction values as either the SHA-1, MD5, or CRYPT hash format.
| ims                       | List  | The user's ims
| includeInGlobalAddressList| Select| Indicates if the user's profile is visible in the G Suite global address list when the contact sharing feature is enabled for the domain. 
| ipWhitelisted             | Select| If true, the user's IP address is white listed.
| locations                 | List  | The user's locations
| notesContentType          | Select| Content type of note, either plain text or HTML. Default is plain text. 
| notesValue                | String| Contents of notes.
| orgUnitPath               | String| The full path of the parent organization associated with the user. If the parent organization is the top-level, it is represented as a forward slash (/).
| organizations             | List  | List of organizations the user belongs to.
| phones                    | List  | List of phones the user has
| posixAccounts             | List  | List of posixAccounts the user has
| relations                 | List  | A list of the user's relationships to other users.
| sshPublicKeys             | List  | A list of SSH public keys.
| suspended                 | Select| Indicates if the user is suspended.
| websites                  | List  | Websites of the user.

## GoogleAdmin.listUsersByDomain
Retrieves a paginated list of either deleted users or all users in a domain. 

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| OAuth 2.0 token for the current user.
| customFieldMask| List  | List of schema names. All fields from these schemas are fetched. This should only be set when projection=custom.
| domain         | String| The domain name. Use this field to get fields from only one domain. 
| projection     | Select| Determines whether the response contains the full list of properties or only a subset. 
| viewType       | Select| Whether to fetch the administrator-only or domain-wide public view of the user. 
| maxResults     | Number| Maximum number of results to return. Default, and maximum, is 200.
| pageToken      | String| Token to specify next page in the list
| orderBy        | Select| Property to use for sorting results.
| query          | String| Query string for searching user fields.
| sortOrder      | Select| Whether to return results in ascending or descending order. Must be used with the orderBy parameter. 
| showDeleted    | Select| If set to true retrieves the list of deleted users. Default is false

## GoogleAdmin.listUsersByCustomer
Retrieves a paginated list of either deleted users or all users by customer

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| OAuth 2.0 token for the current user.
| customFieldMask| List  | List of schema names. All fields from these schemas are fetched. This should only be set when projection=custom.
| customer       | String| The unique ID for the customer's G Suite account. In case of a multi-domain account, to fetch all groups for a customer, fill this field instead of domain. 
| projection     | Select| Determines whether the response contains the full list of properties or only a subset. 
| viewType       | Select| Whether to fetch the administrator-only or domain-wide public view of the user. 
| maxResults     | Number| Maximum number of results to return. Default, and maximum, is 200.
| pageToken      | String| Token to specify next page in the list
| orderBy        | Select| Property to use for sorting results.
| query          | String| Query string for searching user fields.
| sortOrder      | Select| Whether to return results in ascending or descending order. Must be used with the orderBy parameter. 
| showDeleted    | Select| If set to true retrieves the list of deleted users. Default is false

## GoogleAdmin.makeUserAdmin
Makes a user a super administrator.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.updateUser
Updates a user using patch semantics.

| Field                     | Type  | Description
|---------------------------|-------|----------
| accessToken               | String| OAuth 2.0 token for the current user.
| userKey                   | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.
| familyName                | String| The user's last name. Required when creating a user account.
| givenName                 | String| The user's given name. Required when creating a user account.
| password                  | String| Stores the password for the user account. 
| primaryEmail              | String| The user's primary email address. 
| addresses                 | List  | The user's addresses
| changePasswordAtNextLogin | Select| Indicates if the user is forced to change their password at next login.
| emails                    | List  | The user's email addresses
| externalIds               | List  | The user's externalIds
| hashFunction              | Select| Stores the hash format of the password property. We recommend sending the password property value as a base 16 bit hexadecimal-encoded hash value. Set the hashFunction values as either the SHA-1, MD5, or CRYPT hash format.
| ims                       | List  | The user's ims
| includeInGlobalAddressList| Select| Indicates if the user's profile is visible in the G Suite global address list when the contact sharing feature is enabled for the domain. 
| ipWhitelisted             | Select| If true, the user's IP address is white listed.
| locations                 | List  | The user's locations
| notesContentType          | Select| Content type of note, either plain text or HTML. Default is plain text. 
| notesValue                | String| Contents of notes.
| orgUnitPath               | String| The full path of the parent organization associated with the user. If the parent organization is the top-level, it is represented as a forward slash (/).
| organizations             | List  | List of organizations the user belongs to.
| phones                    | List  | List of phones the user has
| posixAccounts             | List  | List of posixAccounts the user has
| relations                 | List  | A list of the user's relationships to other users.
| sshPublicKeys             | List  | A list of SSH public keys.
| suspended                 | Select| Indicates if the user is suspended.
| websites                  | List  | Websites of the user.

## GoogleAdmin.undeleteUser
Undeletes a deleted user. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.watchUsers
Watch for changes in users list

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| OAuth 2.0 token for the current user.
| customFieldMask| List  | List of schema names. All fields from these schemas are fetched. This should only be set when projection=custom.
| customer       | String| The unique ID for the customer's G Suite account. In case of a multi-domain account, to fetch all groups for a customer, fill this field instead of domain. 
| domain         | String| The domain name. Use this field to get fields from only one domain. 
| event          | Select| Events to watch for. 
| projection     | Select| Determines whether the response contains the full list of properties or only a subset. 
| viewType       | Select| Whether to fetch the administrator-only or domain-wide public view of the user. 
| maxResults     | Number| Maximum number of results to return. Default, and maximum, is 200.
| pageToken      | String| Token to specify next page in the list
| orderBy        | Select| Property to use for sorting results.
| query          | String| Query string for searching user fields.
| sortOrder      | Select| Whether to return results in ascending or descending order. Must be used with the orderBy parameter. 
| showDeleted    | Select| If set to true retrieves the list of deleted users. Default is false

## GoogleAdmin.deleteUserAlias
Removes an alias

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.
| alias      | String| The alias to be removed.

## GoogleAdmin.addUserAlias
Adds an alias

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.
| alias      | String| The alias email address.

## GoogleAdmin.listUserAliases
Lists all aliases for a user. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.watchUserAliases
Watch for changes in user aliases list 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.
| event      | Select| Events to watch for. 

## GoogleAdmin.deleteUserPhoto
Removes the user's photo. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.getUserPhoto
Retrieves the user's photo. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.addUserPhoto
Adds a photo for the user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.
| height     | Number| Height of the photo in pixels.
| width      | Number| Width of the photo in pixels.
| mimeType   | Select| The MIME type of the photo. Allowed values are JPEG, PNG, GIF, BMP, TIFF, and web-safe base64 encoding.
| photoData  | String| Photo file

## GoogleAdmin.getUserVerificationCode
Generate new backup verification codes for the user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.invalidateUserVerificationCode
Invalidate the current backup verification codes for the user. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

## GoogleAdmin.listUserVerificationCodes
Returns the current set of valid backup verification codes for the specified user. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| userKey    | String| Identifies the user in the API request. The value can be the user's primary email address, alias email address, or unique user ID.

