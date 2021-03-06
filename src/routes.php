<?php
$routes = [
    'metadata',
    'getAccessToken',
    'deleteAsps',
    'getAsps',
    'listAsps',
    'stopWatchingResource',
    'makeActionOnChromeosDevice',
    'getSingleChromeosDevice',
    'listChromeosDevices',
    'moveChromeosDevicesToOu',
    'updateChromeosDevice',
    'getSingleCustomer',
    'updateCustomer',
    'deleteDomainAlias',
    'getSingleDomainAlias',
    'addDomainAlias',
    'listDomainAliases',
    'deleteDomain',
    'getSingleDomain',
    'addDomain',
    'listDomains',
    'deleteGroup',
    'getSingleGroup',
    'addGroup',
    'listGroupsByDomain',
    "listGroupsByCustomer",
    'listGroupsByUserKey',
    'updateGroup',
    'deleteGroupAlias',
    'addGroupAlias',
    'listAliases',
    'deleteMember',
    'getSingleMember',
    'addMember',
    'listMembers',
    'updateMember',
    'makeActionOnMobileDevice',
    'deleteMobileDevice',
    'getSingleMobileDevice',
    'listMobileDevices',
    'deleteNotification',
    'getSingleNotification',
    'listNotifications',
    'updateNotification',
    'deleteOrgunit',
    'getSingleOrgunit',
    'addOrgunitByParentId',
    'addOrgunitByParentPath',
    'listOrgunits',
    'updateOrgUnit',
    'listPrivileges',
    'deleteCalendarResource',
    'getSingleCalendarResource',
    'addCalendarResource',
    'listCalendarResources',
    'updateCalendarResource',
    'deleteRoleAssignment',
    'getRoleAssignment',
    'addRoleAssignment',
    'listRoleAssignments',
    'deleteRole',
    'getSingleRole',
    'addRole',
    'listRoles',
    'updateRole',
    'deleteSchema',
    'getSingleSchema',
    'addSchema',
    'listSchemas',
    'updateSchema',
    'deleteToken',
    'getSingleToken',
    'listTokens',
    'deleteUser',
    'getSingleUser',
    'addUser',
    'listUsersByDomain',
    'listUsersByCustomer',
    'makeUserAdmin',
    'updateUser',
    'undeleteUser',
    'watchUsers',
    'deleteUserAlias',
    'addUserAlias',
    'listUserAliases',
    'watchUserAliases',
    'deleteUserPhoto',
    'getUserPhoto',
    'addUserPhoto',
    'getUserVerificationCode',
    'invalidateUserVerificationCode',
    'listUserVerificationCodes'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

