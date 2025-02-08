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

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2_592_000);
defined('YEAR')   || define('YEAR', 31_536_000);
defined('DECADE') || define('DECADE', 315_360_000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0);        // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1);          // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3);         // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4);   // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5);  // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7);     // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8);       // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9);      // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125);    // highest automatically-assigned error code