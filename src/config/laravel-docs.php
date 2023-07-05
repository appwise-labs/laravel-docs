<?php

use AppwiseLabs\LaravelDocs\Http\Middleware\CanViewDocs;

return [
    /*
    |--------------------------------------------------------------------------
    | Laravel Docs - Path
    |--------------------------------------------------------------------------
    |
    | This is the URI path where the OpenAPI documentation will be accessible from. Feel free
    | to change this path to anything you like.
    |
    */

    'path' => 'docs',

    'middleware' => [
        'web',
        CanViewDocs::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Docs - OpenAPI File
    |--------------------------------------------------------------------------
    |
    | This is the location of the project's OpenAPI YAML/JSON file. It's
    | this file that will be used in OpenAPI UI. This can either be a local
    | file or an url to a file.
    |
    */

    'file' => resource_path('docs/openapi.yaml'),

    /*
    |--------------------------------------------------------------------------
    | Laravel Docs - Modify File
    |--------------------------------------------------------------------------
    |
    | If this option is enabled, then the file will be changed before it is
    | used by OpenAPI UI. The server url and oauth urls will be changed to
    | the base url of this Laravel application.
    |
    */

    'modify_file' => true,

    /*
    |--------------------------------------------------------------------------
    | Laravel Docs - OAuth Config
    |--------------------------------------------------------------------------
    |
    | This allows you to configure oauth within OpenAPI UI. It makes it easier
    | to authenticate in OpenAPI UI by prefilling certain values.
    |
    */
    'oauth' => [
        'token_path' => 'oauth/token',
        'refresh_path' => 'oauth/token',
        'authorization_path' => 'oauth/authorize',

        'client_id' => env('OPEN_API_OAUTH_CLIENT_ID'),
        'client_secret' => env('OPEN_API_OAUTH_CLIENT_SECRET'),
    ],
];
