<?php

use Monolog\Handler\StreamHandler;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that is utilized to write
    | messages to your logs. The value provided here should match one of
    | the channels present in the list of "channels" configured below.
    |
    */

    'default' => env('LOG_CHANNEL'),

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    |
    | This option controls the log channel that should be used to log warnings
    | regarding deprecated PHP and library features. This allows you to get
    | your application ready for upcoming major versions of dependencies.
    |
    */

    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => env('LOG_DEPRECATIONS_TRACE', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Laravel
    | utilizes the Monolog PHP logging library, which includes a variety
    | of powerful log handlers and formatters that you're free to use.
    |
    | Available drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog", "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => [
                'discord',
                // Only include dev channel when in local environment
                env('APP_ENV') === 'local' ? 'dev' :  'stderr',
            ],  // Use stderr for Docker + Discord for important alerts
            'ignore_exceptions' => false,
        ],

        'dev' => [
            'driver' => 'single',
            'path' => storage_path('logs/dev.log'),
            'level' => 'debug',
            'days' => 1,
        ],

        'stderr' => [
            'driver' => 'monolog',
            'handler' => StreamHandler::class,
            'with' => [
                'stream' => 'php://stderr',
            ],
            'level' => 'debug',
        ],

        'discord' => [
            'driver' => 'custom',
            'via'    => MarvinLabs\DiscordLogger\Logger::class,
            'level'  => 'error',
            'url'    => env('LOG_DISCORD_WEBHOOK_URL'),
            'ignore_exceptions' => env('LOG_DISCORD_IGNORE_EXCEPTIONS', false),
        ],
    ],

];