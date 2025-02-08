<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    /*
    |--------------------------------------------------------------------------
    | Base Site URL
    |--------------------------------------------------------------------------
    |
    | The URL to your CodeIgniter root. Typically, this will be your base URL,
    | WITH a trailing slash:
    |
    |   'http://example.com/'
    |
    */
    public string $baseURL = 'https://docs.core-x.dev/';
    /*
    |--------------------------------------------------------------------------
    | Index File
    |--------------------------------------------------------------------------
    |
    | Typically, this will be "index.php". However, if you are using mod_rewrite
    | to remove the page set this variable so that it is blank.
    |
    */
    public string $indexPage = '';
    /*
    |--------------------------------------------------------------------------
    | Default Locale
    |--------------------------------------------------------------------------
    |
    | The default language/locale of your application. Must be in a valid format.
    |
    */
    public string $defaultLocale = 'en';

    /*
    |--------------------------------------------------------------------------
    | Supported Locales
    |--------------------------------------------------------------------------
    |
    | Array of supported locales.
    |
    */
    public array $supportedLocales = ['en'];

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | This setting affects how dates are displayed and parsed. Default is UTC.
    |
    */
    public string $appTimezone = 'UTC';

    /*
    |--------------------------------------------------------------------------
    | Application Namespace
    |--------------------------------------------------------------------------
    |
    | This defines the default Namespace that all application classes should be
    | in.
    |
    */
    public string $appNamespace = 'App';
    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | The encryption key used for handling sensitive data. Ensure this is set.
    |
    */
    public string $encryptionKey = '';
    /*
    |--------------------------------------------------------------------------
    | CSRF Protection
    |--------------------------------------------------------------------------
    |
    | Cross-Site Request Forgery protection settings.
    |
    */
    public bool $CSRFProtect = true;
    public ?int $CSRFExpire = 7200;
    public string $CSRFTokenName = 'csrf_token';
    public string $CSRFCookieName = 'csrf_cookie';
    public bool $CSRFRedirect = true;
    /*
    |--------------------------------------------------------------------------
    | Content Security Policy (CSP)
    |--------------------------------------------------------------------------
    |
    | Define the security policies for the frontend.
    |
    */
    public array $CSPEnabled = [];
    /*
    |--------------------------------------------------------------------------
    | Session Settings
    |--------------------------------------------------------------------------
    |
    | Default session driver and settings for the application.
    |
    */
    public string $sessionDriver = 'CodeIgniter\Session\Handlers\FileHandler';
    public string $sessionSavePath = WRITEPATH . 'session';
    public string $sessionCookieName = 'corex_session';
    public bool $sessionMatchIP = false;
    public int $sessionExpiration = 7200;
    public bool $sessionRegenerateDestroy = false;
    /*
    |--------------------------------------------------------------------------
    | Cookie Settings
    |--------------------------------------------------------------------------
    |
    | Settings for cookie handling in the application.
    |
    */
    public string $cookiePrefix = '';
    public string $cookieDomain = '';
    public string $cookiePath = '/';
    public string $cookieSecure = 'auto';
    public bool $cookieHTTPOnly = true;
    /*
    |--------------------------------------------------------------------------
    | Logging & Debugging
    |--------------------------------------------------------------------------
    |
    | Application debugging settings.
    |
    */
    public bool $appDebug = false;
    public string $logThreshold = '4'; // Log All Errors
    public string $logPath = '';
    /*
    |--------------------------------------------------------------------------
    | Allowed Hostnames
    |--------------------------------------------------------------------------
    |
    | Set allowed hostnames for security purposes.
    |
    */
    public array $allowedHosts = ['docs.core-x.dev'];
    /*
    |--------------------------------------------------------------------------
    | Error Handling
    |--------------------------------------------------------------------------
    |
    | Error display settings in production.
    |
    */
    public bool $displayErrors = false;
}