<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default & Fallback Locales
    |--------------------------------------------------------------------------
    |
    | The default locale will be used by the translation system when no locale
    | is explicitly set in the session, cookie, or request.
    |
    */

    'default' => env('APP_LOCALE', 'en'),

    'fallback' => env('APP_FALLBACK_LOCALE', 'en'),

    /*
    |--------------------------------------------------------------------------
    | Supported Locales
    |--------------------------------------------------------------------------
    |
    | List all supported languages for the application. You can add or remove
    | languages here as your business website expands.
    |
    */

    'locales' => [
        'en' => [
            'name' => 'English',
            'native' => 'English',
            'dir' => 'ltr',
            'flag' => '',
        ],
        'es' => [
            'name' => 'Spanish',
            'native' => 'Español',
            'dir' => 'ltr',
            'flag' => '🇪🇸',
        ],
        'fr' => [
            'name' => 'French',
            'native' => 'Français',
            'dir' => 'ltr',
            'flag' => '🇫🇷',
        ],
        'de' => [
            'name' => 'German',
            'native' => 'Deutsch',
            'dir' => 'ltr',
            'flag' => '🇩🇪',
        ],
        'ja' => [
            'name' => 'Japanese',
            'native' => '日本語',
            'dir' => 'ltr',
            'flag' => '🇯🇵',
        ],
        'ar' => [
            'name' => 'Arabic',
            'native' => 'العربية',
            'dir' => 'rtl',
            'flag' => '🇸🇦',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Cookie Settings
    |--------------------------------------------------------------------------
    |
    | Configure the cookie used to persist the user's language preference.
    |
    */

    'cookie' => [
        'name' => 'locale',
        'lifetime' => 60 * 24 * 365,   // 1 year in minutes
        'path' => null,
        'domain' => null,
        'secure' => null,             // null = auto-detect (recommended)
        'http_only' => true,
        'same_site' => 'lax',
    ],

];
