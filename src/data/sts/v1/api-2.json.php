<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'sts',
        'protocol' => 'json',
//        'serviceFullName' => 'sts',
//        'serviceId' => 'sts',
    ],
    'operations' => [
        'AssumeRole' => [
            'name' => 'AssumeRole',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/sessionToken:assumeRole',
            ],
            'input' => [ 'shape' => 'AssumeRoleRequestShape', ],
            'output' => [ 'shape' => 'AssumeRoleResponseShape', ],
        ],
    ],
    'shapes' => [
        'AssumeRoleInfo' => [
            'type' => 'structure',
            'members' => [
                'roleJrn' => [ 'type' => 'string', 'locationName' => 'roleJrn', ],
                'roleSessionName' => [ 'type' => 'string', 'locationName' => 'roleSessionName', ],
                'durationSeconds' => [ 'type' => 'integer', 'locationName' => 'durationSeconds', ],
            ],
        ],
        'AssumeServiceRoleInfo' => [
            'type' => 'structure',
            'members' => [
                'roleType' => [ 'type' => 'integer', 'locationName' => 'roleType', ],
                'durationSeconds' => [ 'type' => 'integer', 'locationName' => 'durationSeconds', ],
            ],
        ],
        'AssumedRoleService' => [
            'type' => 'structure',
            'members' => [
                'assumedServiceRoleId' => [ 'type' => 'string', 'locationName' => 'assumedServiceRoleId', ],
                'assumedServiceRoleName' => [ 'type' => 'string', 'locationName' => 'assumedServiceRoleName', ],
            ],
        ],
        'AssumedRoleUser' => [
            'type' => 'structure',
            'members' => [
                'assumedRoleId' => [ 'type' => 'string', 'locationName' => 'assumedRoleId', ],
                'jrn' => [ 'type' => 'string', 'locationName' => 'jrn', ],
            ],
        ],
        'Credentials' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'sessionToken' => [ 'type' => 'string', 'locationName' => 'sessionToken', ],
                'expiration' => [ 'type' => 'string', 'locationName' => 'expiration', ],
            ],
        ],
        'AssumeRoleResultShape' => [
            'type' => 'structure',
            'members' => [
                'credentials' =>  [ 'shape' => 'Credentials', ],
            ],
        ],
        'AssumeRoleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AssumeRoleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AssumeRoleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'assumeRoleInfo' =>  [ 'shape' => 'AssumeRoleInfo', ],
            ],
        ],
    ],
];
