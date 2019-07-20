<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */
    
    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ], 

        'public' => [
            'driver' => 'local',
            'root' => storage_path('/app/public'),
            'url' => env('APP_URL').'/public/storage/',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('DGS_KEY'),
            'secret' => env('DGS_SECRET'),
            'region' => env('DGS_REGION'),
            'bucket' => env('DGS_BUCKET'),
        ],
        'spaces' => [
            'driver' => 's3',
            'bucket' => env('DGS_BUCKET'),
            'key' => env('DGS_KEY'),
            'secret' => env('DGS_SECRET'),
            'endpoint' => env('DGS_END_POINT'),
            'region' => env('DGS_REGION')
        ]

    ],

];
