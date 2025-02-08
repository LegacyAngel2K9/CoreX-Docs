<?php

// Front controller for CoreX Documentation (CodeIgniter 4)

define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Load CodeIgniter 4 Framework
require FCPATH . 'vendor/autoload.php';

// Load the CodeIgniter bootstrap file
$app = require_once FCPATH . 'system/bootstrap.php';

// Run the application
$app->run();
