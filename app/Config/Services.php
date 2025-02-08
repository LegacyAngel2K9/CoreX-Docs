<?php

namespace Config;

use CodeIgniter\Config\BaseService;
use App\Libraries\GitHubService;

class Services extends BaseService
{
    /**
     * Custom GitHub API Service
     *
     * Fetches contributors from GitHub dynamically.
     */
    public static function github(?bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('github');
        }
        return new GitHubService();
    }
    /**
     * Custom Security Service
     *
     * Handles additional security layers for requests.
     */
    public static function security(?bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('security');
        }
        return new \CodeIgniter\Security\Security();
    }
    /**
     * Enable CORS Handling
     *
     * Ensures CORS headers are applied correctly for API requests.
     */
    public static function cors(?bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('cors');
        }
        return new \App\Libraries\CorsService();
    }
    /**
     * Custom Throttling Service for API Rate Limiting
     */
    public static function throttle(?bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('throttle');
        }
        return new \App\Libraries\ThrottleService();
    }
    /**
     * Override Default Logger Service
     *
     * Extends logging functionality for better debugging.
     */
    public static function logger(?bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('logger');
        }
        return new \CodeIgniter\Log\Logger(config('Logger'));
    }
}