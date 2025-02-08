<?php

namespace Config;

/*
|--------------------------------------------------------------------------
| CoreX-Docs Constants
|--------------------------------------------------------------------------
|
| This file contains global constants used throughout CoreX-Docs.
| Define any application-wide values that need to be accessed globally.
|
*/

/*
|--------------------------------------------------------------------------
| CoreX-Docs Information
|--------------------------------------------------------------------------
*/
defined('COREX_NAME')      || define('COREX_NAME', 'CoreX Framework');
defined('COREX_VERSION')   || define('COREX_VERSION', '1.0.0');
defined('COREX_DOCS_URL')  || define('COREX_DOCS_URL', 'https://docs.core-x.dev');
defined('COREX_GITHUB')    || define('COREX_GITHUB', 'https://github.com/LegacyAngel2K9/CoreX');

/*
|--------------------------------------------------------------------------
| Environment Settings
|--------------------------------------------------------------------------
*/
defined('COREX_ENV')       || define('COREX_ENV', getenv('CI_ENVIRONMENT') ?: 'production');
defined('DEBUG_MODE')      || define('DEBUG_MODE', COREX_ENV === 'development');

/*
|--------------------------------------------------------------------------
| API Configuration
|--------------------------------------------------------------------------
| API Keys and Endpoints used for GitHub and other services.
*/
defined('GITHUB_API_URL')  || define('GITHUB_API_URL', 'https://api.github.com/repos/LegacyAngel2K9/CoreX/contributors');
defined('GITHUB_API_KEY')  || define('GITHUB_API_KEY', getenv('GITHUB_API_KEY') ?: '');

/*
|--------------------------------------------------------------------------
| File & Path Constants
|--------------------------------------------------------------------------
*/
defined('ROOT_PATH')       || define('ROOT_PATH', realpath(__DIR__ . '/../'));
defined('APP_PATH')        || define('APP_PATH', ROOT_PATH . '/app');
defined('PUBLIC_PATH')     || define('PUBLIC_PATH', ROOT_PATH . '/public');
defined('CACHE_PATH')      || define('CACHE_PATH', ROOT_PATH . '/writable/cache');

/*
|--------------------------------------------------------------------------
| Security Settings
|--------------------------------------------------------------------------
*/
defined('CSRF_PROTECTION') || define('CSRF_PROTECTION', true);
defined('HASH_ALGO')       || define('HASH_ALGO', 'sha256');

?>
