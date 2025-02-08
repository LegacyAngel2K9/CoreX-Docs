<?php

// Define Path Constants
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Ensure the `app` folder is correctly set
$pathsPath = realpath(FCPATH . '../app/Config/Paths.php') ?: FCPATH . '../app/Config/Paths.php';
if (!file_exists($pathsPath)) {
    header('HTTP/1.1 503 Service Unavailable', true, 503);
    echo 'Paths configuration file not found. Ensure CodeIgniter is installed correctly.';
    exit(1);
}
require $pathsPath;
$paths = new Config\Paths();

// Load Bootstrap File
require rtrim($paths->systemDirectory, '/ ') . '/bootstrap.php';

// Launch Application
$app = Config\Services::codeigniter();
$app->run();
