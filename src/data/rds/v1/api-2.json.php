<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'rds',
        'protocol' => 'json',
//        'serviceFullName' => 'rds',
//        'serviceId' => 'rds',
    ],
    'operations' => [
        'DescribeAccounts' => [
            'name' => 'DescribeAccounts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'DescribeAccountsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccountsResponseShape', ],
        ],
        'CreateAccount' => [
            'name' => 'CreateAccount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'CreateAccountRequestShape', ],
            'output' => [ 'shape' => 'CreateAccountResponseShape', ],
        ],
        'DeleteAccount' => [
            'name' => 'DeleteAccount',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}',
            ],
            'input' => [ 'shape' => 'DeleteAccountRequestShape', ],
            'output' => [ 'shape' => 'DeleteAccountResponseShape', ],
        ],
        'GrantPrivilege' => [
            'name' => 'GrantPrivilege',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:grantPrivilege',
            ],
            'input' => [ 'shape' => 'GrantPrivilegeRequestShape', ],
            'output' => [ 'shape' => 'GrantPrivilegeResponseShape', ],
        ],
        'RevokePrivilege' => [
            'name' => 'RevokePrivilege',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:revokePrivilege',
            ],
            'input' => [ 'shape' => 'RevokePrivilegeRequestShape', ],
            'output' => [ 'shape' => 'RevokePrivilegeResponseShape', ],
        ],
        'ResetPassword' => [
            'name' => 'ResetPassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:resetPassword',
            ],
            'input' => [ 'shape' => 'ResetPasswordRequestShape', ],
            'output' => [ 'shape' => 'ResetPasswordResponseShape', ],
        ],
        'DescribeAudit' => [
            'name' => 'DescribeAudit',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit',
            ],
            'input' => [ 'shape' => 'DescribeAuditRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditResponseShape', ],
        ],
        'CreateAudit' => [
            'name' => 'CreateAudit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit',
            ],
            'input' => [ 'shape' => 'CreateAuditRequestShape', ],
            'output' => [ 'shape' => 'CreateAuditResponseShape', ],
        ],
        'DeleteAudit' => [
            'name' => 'DeleteAudit',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit',
            ],
            'input' => [ 'shape' => 'DeleteAuditRequestShape', ],
            'output' => [ 'shape' => 'DeleteAuditResponseShape', ],
        ],
        'DescribeAuditOptions' => [
            'name' => 'DescribeAuditOptions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:describeAuditOptions',
            ],
            'input' => [ 'shape' => 'DescribeAuditOptionsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditOptionsResponseShape', ],
        ],
        'ModifyAudit' => [
            'name' => 'ModifyAudit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:modifyAudit',
            ],
            'input' => [ 'shape' => 'ModifyAuditRequestShape', ],
            'output' => [ 'shape' => 'ModifyAuditResponseShape', ],
        ],
        'DescribeAuditFiles' => [
            'name' => 'DescribeAuditFiles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:describeAuditFiles',
            ],
            'input' => [ 'shape' => 'DescribeAuditFilesRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditFilesResponseShape', ],
        ],
        'DescribeAuditDownloadURL' => [
            'name' => 'DescribeAuditDownloadURL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:describeAuditDownloadURL',
            ],
            'input' => [ 'shape' => 'DescribeAuditDownloadURLRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditDownloadURLResponseShape', ],
        ],
        'EnableAudit' => [
            'name' => 'EnableAudit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:enableAudit',
            ],
            'input' => [ 'shape' => 'EnableAuditRequestShape', ],
            'output' => [ 'shape' => 'EnableAuditResponseShape', ],
        ],
        'DisableAudit' => [
            'name' => 'DisableAudit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:disableAudit',
            ],
            'input' => [ 'shape' => 'DisableAuditRequestShape', ],
            'output' => [ 'shape' => 'DisableAuditResponseShape', ],
        ],
        'DescribeAuditResult' => [
            'name' => 'DescribeAuditResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:describeAuditResult',
            ],
            'input' => [ 'shape' => 'DescribeAuditResultRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditResultResponseShape', ],
        ],
        'DescribeAzs' => [
            'name' => 'DescribeAzs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/azs',
            ],
            'input' => [ 'shape' => 'DescribeAzsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAzsResponseShape', ],
        ],
        'DescribeBackups' => [
            'name' => 'DescribeBackups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backups',
            ],
            'input' => [ 'shape' => 'DescribeBackupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupsResponseShape', ],
        ],
        'CreateBackup' => [
            'name' => 'CreateBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/backups',
            ],
            'input' => [ 'shape' => 'CreateBackupRequestShape', ],
            'output' => [ 'shape' => 'CreateBackupResponseShape', ],
        ],
        'DeleteBackup' => [
            'name' => 'DeleteBackup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/backups/{backupId}',
            ],
            'input' => [ 'shape' => 'DeleteBackupRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackupResponseShape', ],
        ],
        'DescribeBackupDownloadURL' => [
            'name' => 'DescribeBackupDownloadURL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backups/{backupId}:describeBackupDownloadURL',
            ],
            'input' => [ 'shape' => 'DescribeBackupDownloadURLRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupDownloadURLResponseShape', ],
        ],
        'DescribeBackupSynchronicities' => [
            'name' => 'DescribeBackupSynchronicities',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backupSynchronicities',
            ],
            'input' => [ 'shape' => 'DescribeBackupSynchronicitiesRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupSynchronicitiesResponseShape', ],
        ],
        'CreateBackupSynchronicity' => [
            'name' => 'CreateBackupSynchronicity',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/backupSynchronicities',
            ],
            'input' => [ 'shape' => 'CreateBackupSynchronicityRequestShape', ],
            'output' => [ 'shape' => 'CreateBackupSynchronicityResponseShape', ],
        ],
        'DeleteBackupSynchronicity' => [
            'name' => 'DeleteBackupSynchronicity',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/backupSynchronicities/{serviceId}',
            ],
            'input' => [ 'shape' => 'DeleteBackupSynchronicityRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackupSynchronicityResponseShape', ],
        ],
        'DescribeBinlogs' => [
            'name' => 'DescribeBinlogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/binlogs',
            ],
            'input' => [ 'shape' => 'DescribeBinlogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBinlogsResponseShape', ],
        ],
        'DescribeBinlogDownloadURL' => [
            'name' => 'DescribeBinlogDownloadURL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/binlogs/{binlogBackupId}:describeBinlogDownloadURL',
            ],
            'input' => [ 'shape' => 'DescribeBinlogDownloadURLRequestShape', ],
            'output' => [ 'shape' => 'DescribeBinlogDownloadURLResponseShape', ],
        ],
        'ClearBinlogs' => [
            'name' => 'ClearBinlogs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/binlogs:clearBinlogs',
            ],
            'input' => [ 'shape' => 'ClearBinlogsRequestShape', ],
            'output' => [ 'shape' => 'ClearBinlogsResponseShape', ],
        ],
        'DescribeDatabases' => [
            'name' => 'DescribeDatabases',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases',
            ],
            'input' => [ 'shape' => 'DescribeDatabasesRequestShape', ],
            'output' => [ 'shape' => 'DescribeDatabasesResponseShape', ],
        ],
        'CreateDatabase' => [
            'name' => 'CreateDatabase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases',
            ],
            'input' => [ 'shape' => 'CreateDatabaseRequestShape', ],
            'output' => [ 'shape' => 'CreateDatabaseResponseShape', ],
        ],
        'DeleteDatabase' => [
            'name' => 'DeleteDatabase',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}',
            ],
            'input' => [ 'shape' => 'DeleteDatabaseRequestShape', ],
            'output' => [ 'shape' => 'DeleteDatabaseResponseShape', ],
        ],
        'RestoreDatabaseFromBackup' => [
            'name' => 'RestoreDatabaseFromBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}:restoreDatabaseFromBackup',
            ],
            'input' => [ 'shape' => 'RestoreDatabaseFromBackupRequestShape', ],
            'output' => [ 'shape' => 'RestoreDatabaseFromBackupResponseShape', ],
        ],
        'RestoreDatabaseFromFile' => [
            'name' => 'RestoreDatabaseFromFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}:restoreDatabaseFromFile',
            ],
            'input' => [ 'shape' => 'RestoreDatabaseFromFileRequestShape', ],
            'output' => [ 'shape' => 'RestoreDatabaseFromFileResponseShape', ],
        ],
        'RestoreDatabaseFromOSS' => [
            'name' => 'RestoreDatabaseFromOSS',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}:restoreDatabaseFromOSS',
            ],
            'input' => [ 'shape' => 'RestoreDatabaseFromOSSRequestShape', ],
            'output' => [ 'shape' => 'RestoreDatabaseFromOSSResponseShape', ],
        ],
        'DescribeErrorLogs' => [
            'name' => 'DescribeErrorLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/errorLogs',
            ],
            'input' => [ 'shape' => 'DescribeErrorLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeErrorLogsResponseShape', ],
        ],
        'DescribeImportFiles' => [
            'name' => 'DescribeImportFiles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/importFiles',
            ],
            'input' => [ 'shape' => 'DescribeImportFilesRequestShape', ],
            'output' => [ 'shape' => 'DescribeImportFilesResponseShape', ],
        ],
        'GetUploadKey' => [
            'name' => 'GetUploadKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/importFiles:getUploadKey',
            ],
            'input' => [ 'shape' => 'GetUploadKeyRequestShape', ],
            'output' => [ 'shape' => 'GetUploadKeyResponseShape', ],
        ],
        'SetImportFileShared' => [
            'name' => 'SetImportFileShared',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/importFiles/{fileName}:setShared',
            ],
            'input' => [ 'shape' => 'SetImportFileSharedRequestShape', ],
            'output' => [ 'shape' => 'SetImportFileSharedResponseShape', ],
        ],
        'DeleteImportFile' => [
            'name' => 'DeleteImportFile',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/importFiles/{fileName}',
            ],
            'input' => [ 'shape' => 'DeleteImportFileRequestShape', ],
            'output' => [ 'shape' => 'DeleteImportFileResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'DescribeInstanceAttributes' => [
            'name' => 'DescribeInstanceAttributes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceAttributesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceAttributesResponseShape', ],
        ],
        'DeleteInstance' => [
            'name' => 'DeleteInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceResponseShape', ],
        ],
        'DescribeBackupPolicy' => [
            'name' => 'DescribeBackupPolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeBackupPolicy',
            ],
            'input' => [ 'shape' => 'DescribeBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupPolicyResponseShape', ],
        ],
        'ModifyBackupPolicy' => [
            'name' => 'ModifyBackupPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyBackupPolicy',
            ],
            'input' => [ 'shape' => 'ModifyBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'ModifyBackupPolicyResponseShape', ],
        ],
        'ModifyInstanceName' => [
            'name' => 'ModifyInstanceName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceName',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNameResponseShape', ],
        ],
        'FailoverInstance' => [
            'name' => 'FailoverInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:failoverInstance',
            ],
            'input' => [ 'shape' => 'FailoverInstanceRequestShape', ],
            'output' => [ 'shape' => 'FailoverInstanceResponseShape', ],
        ],
        'RebootInstance' => [
            'name' => 'RebootInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:rebootInstance',
            ],
            'input' => [ 'shape' => 'RebootInstanceRequestShape', ],
            'output' => [ 'shape' => 'RebootInstanceResponseShape', ],
        ],
        'EnableInternetAccess' => [
            'name' => 'EnableInternetAccess',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableInternetAccess',
            ],
            'input' => [ 'shape' => 'EnableInternetAccessRequestShape', ],
            'output' => [ 'shape' => 'EnableInternetAccessResponseShape', ],
        ],
        'DisableInternetAccess' => [
            'name' => 'DisableInternetAccess',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableInternetAccess',
            ],
            'input' => [ 'shape' => 'DisableInternetAccessRequestShape', ],
            'output' => [ 'shape' => 'DisableInternetAccessResponseShape', ],
        ],
        'RestoreInstance' => [
            'name' => 'RestoreInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:restoreInstance',
            ],
            'input' => [ 'shape' => 'RestoreInstanceRequestShape', ],
            'output' => [ 'shape' => 'RestoreInstanceResponseShape', ],
        ],
        'CreateInstanceFromBackup' => [
            'name' => 'CreateInstanceFromBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances:createInstanceFromBackup',
            ],
            'input' => [ 'shape' => 'CreateInstanceFromBackupRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceFromBackupResponseShape', ],
        ],
        'ModifyInstanceSpec' => [
            'name' => 'ModifyInstanceSpec',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceSpec',
            ],
            'input' => [ 'shape' => 'ModifyInstanceSpecRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceSpecResponseShape', ],
        ],
        'CreateInstanceByTime' => [
            'name' => 'CreateInstanceByTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:createInstanceByTime',
            ],
            'input' => [ 'shape' => 'CreateInstanceByTimeRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceByTimeResponseShape', ],
        ],
        'ModifyConnectionMode' => [
            'name' => 'ModifyConnectionMode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyConnectionMode',
            ],
            'input' => [ 'shape' => 'ModifyConnectionModeRequestShape', ],
            'output' => [ 'shape' => 'ModifyConnectionModeResponseShape', ],
        ],
        'DescribeLatestRestoreTime' => [
            'name' => 'DescribeLatestRestoreTime',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeLatestRestoreTime',
            ],
            'input' => [ 'shape' => 'DescribeLatestRestoreTimeRequestShape', ],
            'output' => [ 'shape' => 'DescribeLatestRestoreTimeResponseShape', ],
        ],
        'EnableIntercept' => [
            'name' => 'EnableIntercept',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/intercept:enableIntercept',
            ],
            'input' => [ 'shape' => 'EnableInterceptRequestShape', ],
            'output' => [ 'shape' => 'EnableInterceptResponseShape', ],
        ],
        'DisableIntercept' => [
            'name' => 'DisableIntercept',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/intercept:disableIntercept',
            ],
            'input' => [ 'shape' => 'DisableInterceptRequestShape', ],
            'output' => [ 'shape' => 'DisableInterceptResponseShape', ],
        ],
        'DescribeParameters' => [
            'name' => 'DescribeParameters',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/parameters',
            ],
            'input' => [ 'shape' => 'DescribeParametersRequestShape', ],
            'output' => [ 'shape' => 'DescribeParametersResponseShape', ],
        ],
        'ModifyParameters' => [
            'name' => 'ModifyParameters',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/parameters',
            ],
            'input' => [ 'shape' => 'ModifyParametersRequestShape', ],
            'output' => [ 'shape' => 'ModifyParametersResponseShape', ],
        ],
        'DeleteParameterGroup' => [
            'name' => 'DeleteParameterGroup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/parameterGroups/{parameterGroupId}',
            ],
            'input' => [ 'shape' => 'DeleteParameterGroupRequestShape', ],
            'output' => [ 'shape' => 'DeleteParameterGroupResponseShape', ],
        ],
        'ModifyParameterGroupAttribute' => [
            'name' => 'ModifyParameterGroupAttribute',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/parameterGroups/{parameterGroupId}:modifyParameterGroupAttribute',
            ],
            'input' => [ 'shape' => 'ModifyParameterGroupAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyParameterGroupAttributeResponseShape', ],
        ],
        'DescribeIndexPerformance' => [
            'name' => 'DescribeIndexPerformance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeIndexPerformance',
            ],
            'input' => [ 'shape' => 'DescribeIndexPerformanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeIndexPerformanceResponseShape', ],
        ],
        'DescribeQueryPerformance' => [
            'name' => 'DescribeQueryPerformance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeQueryPerformance',
            ],
            'input' => [ 'shape' => 'DescribeQueryPerformanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeQueryPerformanceResponseShape', ],
        ],
        'DescribeSlowLogAttributes' => [
            'name' => 'DescribeSlowLogAttributes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeSlowLogAttributes',
            ],
            'input' => [ 'shape' => 'DescribeSlowLogAttributesRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlowLogAttributesResponseShape', ],
        ],
        'DescribeSlowLogs' => [
            'name' => 'DescribeSlowLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeSlowLogs',
            ],
            'input' => [ 'shape' => 'DescribeSlowLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlowLogsResponseShape', ],
        ],
        'DescribeActiveQueryPerformance' => [
            'name' => 'DescribeActiveQueryPerformance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeActiveQueryPerformance',
            ],
            'input' => [ 'shape' => 'DescribeActiveQueryPerformanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeActiveQueryPerformanceResponseShape', ],
        ],
        'DescribeWhiteList' => [
            'name' => 'DescribeWhiteList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'DescribeWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DescribeWhiteListResponseShape', ],
        ],
        'ModifyWhiteList' => [
            'name' => 'ModifyWhiteList',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/whiteList',
            ],
            'input' => [ 'shape' => 'ModifyWhiteListRequestShape', ],
            'output' => [ 'shape' => 'ModifyWhiteListResponseShape', ],
        ],
    ],
    'shapes' => [
        'Account' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountStatus' => [ 'type' => 'string', 'locationName' => 'accountStatus', ],
                'accountPrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountPrivilege', ], ],
            ],
        ],
        'AccountPrivilege' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
            ],
        ],
        'AuditFile' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sizeByte' => [ 'type' => 'long', 'locationName' => 'sizeByte', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
                'uploadTime' => [ 'type' => 'string', 'locationName' => 'uploadTime', ],
            ],
        ],
        'Backup' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'backupStatus' => [ 'type' => 'string', 'locationName' => 'backupStatus', ],
                'backupStartTime' => [ 'type' => 'string', 'locationName' => 'backupStartTime', ],
                'backupEndTime' => [ 'type' => 'string', 'locationName' => 'backupEndTime', ],
                'backupType' => [ 'type' => 'string', 'locationName' => 'backupType', ],
                'backupMode' => [ 'type' => 'string', 'locationName' => 'backupMode', ],
                'backupUnit' => [ 'type' => 'string', 'locationName' => 'backupUnit', ],
                'backupFiles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'backupSizeByte' => [ 'type' => 'integer', 'locationName' => 'backupSizeByte', ],
            ],
        ],
        'BackupSpec' => [
            'type' => 'structure',
            'members' => [
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'dbNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'BackupSynchronicity' => [
            'type' => 'structure',
            'members' => [
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'serviceStatus' => [ 'type' => 'string', 'locationName' => 'serviceStatus', ],
                'srcRegion' => [ 'type' => 'string', 'locationName' => 'srcRegion', ],
                'destRegion' => [ 'type' => 'string', 'locationName' => 'destRegion', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'newestDataTime' => [ 'type' => 'string', 'locationName' => 'newestDataTime', ],
            ],
        ],
        'Binlog' => [
            'type' => 'structure',
            'members' => [
                'binlogBackupId' => [ 'type' => 'string', 'locationName' => 'binlogBackupId', ],
                'binlogName' => [ 'type' => 'string', 'locationName' => 'binlogName', ],
                'binlogSizeKB' => [ 'type' => 'long', 'locationName' => 'binlogSizeKB', ],
                'binlogStartTime' => [ 'type' => 'string', 'locationName' => 'binlogStartTime', ],
                'binlogEndTime' => [ 'type' => 'string', 'locationName' => 'binlogEndTime', ],
            ],
        ],
        'DBAccessPrivilege' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DBInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'DBInstanceNode' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DBInstanceAttribute' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'instanceCPU' => [ 'type' => 'integer', 'locationName' => 'instanceCPU', ],
                'instanceMemoryMB' => [ 'type' => 'integer', 'locationName' => 'instanceMemoryMB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
                'publicDomainName' => [ 'type' => 'string', 'locationName' => 'publicDomainName', ],
                'instancePort' => [ 'type' => 'string', 'locationName' => 'instancePort', ],
                'connectionMode' => [ 'type' => 'string', 'locationName' => 'connectionMode', ],
                'auditStatus' => [ 'type' => 'string', 'locationName' => 'auditStatus', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'primaryNode' =>  [ 'shape' => 'DBInstanceNode', ],
                'secondaryNode' =>  [ 'shape' => 'DBInstanceNode', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'DBInstanceParameter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'configureValue' => [ 'type' => 'string', 'locationName' => 'configureValue', ],
                'runningValue' => [ 'type' => 'string', 'locationName' => 'runningValue', ],
                'range' => [ 'type' => 'string', 'locationName' => 'range', ],
                'needRestart' => [ 'type' => 'string', 'locationName' => 'needRestart', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
            ],
        ],
        'DBInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'parameterGroup' => [ 'type' => 'string', 'locationName' => 'parameterGroup', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'Database' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'dbStatus' => [ 'type' => 'string', 'locationName' => 'dbStatus', ],
                'characterSetName' => [ 'type' => 'string', 'locationName' => 'characterSetName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'accessPrivilege' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBAccessPrivilege', ], ],
            ],
        ],
        'DigestData' => [
            'type' => 'structure',
            'members' => [
                'pct95' => [ 'type' => 'float', 'locationName' => 'pct95', ],
                'max' => [ 'type' => 'float', 'locationName' => 'max', ],
                'avg' => [ 'type' => 'float', 'locationName' => 'avg', ],
                'min' => [ 'type' => 'float', 'locationName' => 'min', ],
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
            ],
        ],
        'ErrorLog' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sizeByte' => [ 'type' => 'long', 'locationName' => 'sizeByte', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
                'uploadTime' => [ 'type' => 'string', 'locationName' => 'uploadTime', ],
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'File' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sizeByte' => [ 'type' => 'integer', 'locationName' => 'sizeByte', ],
            ],
        ],
        'FileDownloadURL' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'ImportFile' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sharedFileGid' => [ 'type' => 'string', 'locationName' => 'sharedFileGid', ],
                'sizeByte' => [ 'type' => 'integer', 'locationName' => 'sizeByte', ],
                'uploadTime' => [ 'type' => 'string', 'locationName' => 'uploadTime', ],
                'isLocal' => [ 'type' => 'string', 'locationName' => 'isLocal', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'importTime' => [ 'type' => 'string', 'locationName' => 'importTime', ],
            ],
        ],
        'Parameter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
            ],
        ],
        'RestoredNewDBInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'parameterGroup' => [ 'type' => 'string', 'locationName' => 'parameterGroup', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'SlowLogAttributes' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'executionTime' => [ 'type' => 'string', 'locationName' => 'executionTime', ],
                'elapsedTime' => [ 'type' => 'float', 'locationName' => 'elapsedTime', ],
                'lockTime' => [ 'type' => 'float', 'locationName' => 'lockTime', ],
                'rowsExamined' => [ 'type' => 'integer', 'locationName' => 'rowsExamined', ],
                'rowsReturned' => [ 'type' => 'integer', 'locationName' => 'rowsReturned', ],
            ],
        ],
        'SlowLogDigest' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'executionTime' => [ 'type' => 'string', 'locationName' => 'executionTime', ],
                'executionCount' => [ 'type' => 'integer', 'locationName' => 'executionCount', ],
                'elapsedTime' =>  [ 'shape' => 'DigestData', ],
                'lockTime' =>  [ 'shape' => 'DigestData', ],
                'sqlLength' =>  [ 'shape' => 'DigestData', ],
                'rowsExamined' =>  [ 'shape' => 'DigestData', ],
                'rowsReturned' =>  [ 'shape' => 'DigestData', ],
            ],
        ],
        'WhiteList' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
            ],
        ],
        'DeleteAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GrantPrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => '', 'locationName' => 'accountName', ],
                'accountPassword' => [ 'type' => '', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'RevokePrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GrantPrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPassword' => [ 'type' => '', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'CreateAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RevokePrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'RevokePrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ResetPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAccountsResultShape', ],
            ],
        ],
        'GrantPrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPrivileges' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'DescribeAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
                'accounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Account', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAuditOptionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuditOptionsResultShape', ],
            ],
        ],
        'DescribeAuditResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuditResultResultShape', ],
            ],
        ],
        'DescribeAuditResultShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAuditResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditFilesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuditFilesResultShape', ],
            ],
        ],
        'DisableAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => '', 'locationName' => 'enabled', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuditResultShape', ],
            ],
        ],
        'DescribeAuditOptionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'auditResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuditResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeAuditDownloadURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'DisableAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAuditOptionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'disabled' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAuditDownloadURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAuditDownloadURLResultShape', ],
            ],
        ],
        'DisableAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AuditResult' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'threadId' => [ 'type' => 'string', 'locationName' => 'threadId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
            ],
        ],
        'DescribeAuditFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'auditFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuditFile', ], ],
            ],
        ],
        'DeleteAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'add' => [ 'type' => '', 'locationName' => 'add', ],
                'drop' => [ 'type' => '', 'locationName' => 'drop', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditDownloadURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAzsResultShape' => [
            'type' => 'structure',
            'members' => [
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeAzsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAzsResultShape', ],
            ],
        ],
        'DescribeAzsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBackupDownloadURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupDownloadURLResultShape', ],
            ],
        ],
        'DescribeBackupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'auto' => [ 'type' => 'integer', 'locationName' => 'auto', ],
                'backupTypeFilter' => [ 'type' => 'string', 'locationName' => 'backupTypeFilter', ],
                'dbNameFilter' => [ 'type' => 'string', 'locationName' => 'dbNameFilter', ],
                'backupTimeRangeStartFilter' => [ 'type' => 'string', 'locationName' => 'backupTimeRangeStartFilter', ],
                'backupTimeRangeEndFilter' => [ 'type' => 'string', 'locationName' => 'backupTimeRangeEndFilter', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'DescribeBackupDownloadURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'CreateBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupResultShape', ],
            ],
        ],
        'CreateBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'DeleteBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupDownloadURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'urlExpirationSecond' => [ 'type' => 'string', 'locationName' => 'urlExpirationSecond', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'DeleteBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'backupSpec' =>  [ 'shape' => 'BackupSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBackupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backup' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeBackupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupsResultShape', ],
            ],
        ],
        'CreateBackupSynchronicityResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupSynchronicityResultShape', ],
            ],
        ],
        'CreateBackupSynchronicityResultShape' => [
            'type' => 'structure',
            'members' => [
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
            ],
        ],
        'DescribeBackupSynchronicitiesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupSynchronicitiesResultShape', ],
            ],
        ],
        'DeleteBackupSynchronicityResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateBackupSynchronicityRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => '', 'locationName' => 'instanceId', ],
                'destRegion' => [ 'type' => '', 'locationName' => 'destRegion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBackupSynchronicitiesResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupSynchronicities' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupSynchronicity', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteBackupSynchronicityResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteBackupSynchronicityRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'serviceId' => [ 'type' => 'string', 'locationName' => 'serviceId', ],
            ],
        ],
        'DescribeBackupSynchronicitiesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ClearBinlogsResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ClearBinlogsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBinlogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'binlogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Binlog', ], ],
            ],
        ],
        'DescribeBinlogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ClearBinlogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeBinlogDownloadURLResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBinlogDownloadURLResultShape', ],
            ],
        ],
        'DescribeBinlogDownloadURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'binlogBackupId' => [ 'type' => 'string', 'locationName' => 'binlogBackupId', ],
            ],
        ],
        'DescribeBinlogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBinlogsResultShape', ],
            ],
        ],
        'DescribeBinlogDownloadURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'DeleteDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'DescribeDatabasesResultShape' => [
            'type' => 'structure',
            'members' => [
                'databases' => [ 'type' => 'list', 'member' => [ 'shape' => 'Database', ], ],
            ],
        ],
        'DescribeDatabasesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RestoreDatabaseFromOSSResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromOSSResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sharedFileGid' => [ 'type' => '', 'locationName' => 'sharedFileGid', ],
                'fileName' => [ 'type' => '', 'locationName' => 'fileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'DescribeDatabasesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDatabasesResultShape', ],
            ],
        ],
        'RestoreDatabaseFromOSSRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ossURL' => [ 'type' => '', 'locationName' => 'ossURL', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'CreateDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => '', 'locationName' => 'backupId', ],
                'backupFileName' => [ 'type' => '', 'locationName' => 'backupFileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'RestoreDatabaseFromFileResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => '', 'locationName' => 'dbName', ],
                'characterSetName' => [ 'type' => '', 'locationName' => 'characterSetName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromFileResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeErrorLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeErrorLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeErrorLogsResultShape', ],
            ],
        ],
        'DescribeErrorLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'errorLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorLog', ], ],
            ],
        ],
        'DescribeImportFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'importFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImportFile', ], ],
            ],
        ],
        'DeleteImportFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sharedFileGid' => [ 'type' => '', 'locationName' => 'sharedFileGid', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
            ],
        ],
        'DescribeImportFilesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImportFilesResultShape', ],
            ],
        ],
        'DeleteImportFileResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetUploadKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
            ],
        ],
        'DeleteImportFileResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetImportFileSharedResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetImportFileSharedResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetImportFileSharedRequestShape' => [
            'type' => 'structure',
            'members' => [
                'shared' => [ 'type' => '', 'locationName' => 'shared', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
            ],
        ],
        'GetUploadKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetUploadKeyResultShape', ],
            ],
        ],
        'GetUploadKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeImportFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupPolicyResultShape', ],
            ],
        ],
        'RestoreInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => '', 'locationName' => 'backupId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'FailoverInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceSpecResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceSpecResultShape', ],
            ],
        ],
        'EnableInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeLatestRestoreTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLatestRestoreTimeResultShape', ],
            ],
        ],
        'CreateInstanceByTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceByTimeResultShape', ],
            ],
        ],
        'ModifyInstanceSpecRequestShape' => [
            'type' => 'structure',
            'members' => [
                'newInstanceClass' => [ 'type' => 'string', 'locationName' => 'newInstanceClass', ],
                'newInstanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'newInstanceStorageGB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'DBInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceByTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'restoreTime' => [ 'type' => 'string', 'locationName' => 'restoreTime', ],
                'instanceSpec' =>  [ 'shape' => 'RestoredNewDBInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
            ],
        ],
        'RebootInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInternetAccessResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceFromBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => '', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RestoreInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceAttributesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
            ],
        ],
        'FailoverInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceByTimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RebootInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'startWindow' => [ 'type' => 'string', 'locationName' => 'startWindow', ],
                'retentionPeriod' => [ 'type' => 'integer', 'locationName' => 'retentionPeriod', ],
                'cycleMode' => [ 'type' => 'integer', 'locationName' => 'cycleMode', ],
                'backupBinlog' => [ 'type' => 'string', 'locationName' => 'backupBinlog', ],
            ],
        ],
        'FailoverInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'rebootMaster' => [ 'type' => '', 'locationName' => 'rebootMaster', ],
                'rebootSlave' => [ 'type' => '', 'locationName' => 'rebootSlave', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyConnectionModeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'connectionMode' => [ 'type' => 'string', 'locationName' => 'connectionMode', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceAttributesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbInstanceAttributes' =>  [ 'shape' => 'DBInstanceAttribute', ],
            ],
        ],
        'DescribeLatestRestoreTimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'latestRestoreTime' => [ 'type' => 'string', 'locationName' => 'latestRestoreTime', ],
            ],
        ],
        'DisableInternetAccessRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceFromBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'instanceSpec' =>  [ 'shape' => 'RestoredNewDBInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyConnectionModeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceFromBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceFromBackupResultShape', ],
            ],
        ],
        'ModifyInstanceSpecResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'ModifyBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startWindow' => [ 'type' => '', 'locationName' => 'startWindow', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLatestRestoreTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RestoreInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceAttributesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceAttributesResultShape', ],
            ],
        ],
        'ModifyConnectionModeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'EnableInternetAccessResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInterceptResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableInterceptResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInterceptResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableInterceptResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableInterceptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableInterceptRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeParametersResultShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBInstanceParameter', ], ],
            ],
        ],
        'ModifyParametersResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyParametersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parameters' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeParametersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeParametersResultShape', ],
            ],
        ],
        'DeleteParameterGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
            ],
        ],
        'DeleteParameterGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyParameterGroupAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyParameterGroupAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parameterGroupName' => [ 'type' => '', 'locationName' => 'parameterGroupName', ],
                'description' => [ 'type' => '', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'parameterGroupId' => [ 'type' => 'string', 'locationName' => 'parameterGroupId', ],
            ],
        ],
        'ModifyParameterGroupAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteParameterGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSlowLogAttributesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowLogAttributesResultShape', ],
            ],
        ],
        'DescribeIndexPerformanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIndexPerformanceResultShape', ],
            ],
        ],
        'DescribeSlowLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowLogsResultShape', ],
            ],
        ],
        'DescribeIndexPerformanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'missingIndexResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'MissingIndexResult', ], ],
                'indexPerformanceResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexPerformanceResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeQueryPerformanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQueryPerformanceResultShape', ],
            ],
        ],
        'MissingIndexResult' => [
            'type' => 'structure',
            'members' => [
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'equalityColumns' => [ 'type' => 'string', 'locationName' => 'equalityColumns', ],
                'inequalityColumns' => [ 'type' => 'string', 'locationName' => 'inequalityColumns', ],
                'includedColumns' => [ 'type' => 'string', 'locationName' => 'includedColumns', ],
                'avgUserImpact' => [ 'type' => 'float', 'locationName' => 'avgUserImpact', ],
                'userScans' => [ 'type' => 'integer', 'locationName' => 'userScans', ],
                'userSeeks' => [ 'type' => 'integer', 'locationName' => 'userSeeks', ],
            ],
        ],
        'DescribeActiveQueryPerformanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'threshold' => [ 'type' => 'integer', 'locationName' => 'threshold', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeActiveQueryPerformanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'activeQueryPerformanceResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActiveQueryPerformanceResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'ActiveQueryPerformanceResult' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'elapsedTime' => [ 'type' => 'integer', 'locationName' => 'elapsedTime', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'sessionId' => [ 'type' => 'string', 'locationName' => 'sessionId', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DescribeQueryPerformanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'queryPerformanceResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryPerformanceResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'IndexPerformanceResult' => [
            'type' => 'structure',
            'members' => [
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'index' => [ 'type' => 'string', 'locationName' => 'index', ],
                'sizeKB' => [ 'type' => 'integer', 'locationName' => 'sizeKB', ],
                'userSeeks' => [ 'type' => 'integer', 'locationName' => 'userSeeks', ],
                'userScans' => [ 'type' => 'integer', 'locationName' => 'userScans', ],
                'userUpdates' => [ 'type' => 'integer', 'locationName' => 'userUpdates', ],
                'lastUserSeek' => [ 'type' => 'string', 'locationName' => 'lastUserSeek', ],
                'lastUserScan' => [ 'type' => 'string', 'locationName' => 'lastUserScan', ],
                'lastUserUpdate' => [ 'type' => 'string', 'locationName' => 'lastUserUpdate', ],
            ],
        ],
        'DescribeQueryPerformanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryType' => [ 'type' => 'string', 'locationName' => 'queryType', ],
                'threshold' => [ 'type' => 'integer', 'locationName' => 'threshold', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeSlowLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'QueryPerformanceResult' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'lastExecutionTime' => [ 'type' => 'string', 'locationName' => 'lastExecutionTime', ],
                'elapsedTime' => [ 'type' => 'integer', 'locationName' => 'elapsedTime', ],
                'executionCount' => [ 'type' => 'integer', 'locationName' => 'executionCount', ],
                'workerTime' => [ 'type' => 'integer', 'locationName' => 'workerTime', ],
                'logicalReads' => [ 'type' => 'integer', 'locationName' => 'logicalReads', ],
                'logicalWrites' => [ 'type' => 'integer', 'locationName' => 'logicalWrites', ],
                'physicalReads' => [ 'type' => 'integer', 'locationName' => 'physicalReads', ],
                'lastRows' => [ 'type' => 'integer', 'locationName' => 'lastRows', ],
            ],
        ],
        'DescribeSlowLogAttributesResultShape' => [
            'type' => 'structure',
            'members' => [
                'slowLogsAttributes' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlowLogAttributes', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeActiveQueryPerformanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeActiveQueryPerformanceResultShape', ],
            ],
        ],
        'DescribeSlowLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'slowLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlowLogDigest', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSlowLogAttributesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeIndexPerformanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryType' => [ 'type' => 'string', 'locationName' => 'queryType', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'string', 'locationName' => 'ips', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWhiteListResultShape', ],
            ],
        ],
        'ModifyWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'whiteLists' => [ 'type' => 'list', 'member' => [ 'shape' => 'WhiteList', ], ],
            ],
        ],
        'ModifyWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
