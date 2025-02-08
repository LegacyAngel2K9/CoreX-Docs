<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CoreX Documentation - Learn how to install, configure, and use the CoreX Framework.">
    <meta name="author" content="Legacy DEV Team">
    <meta name="keywords" content="CoreX, FiveM, Roleplay, Framework, Docs, API, Commands, Database">
    <title>CoreX Docs</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('public/assets/images/favicon.png'); ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?= base_url('public/assets/js/scripts.js'); ?>" defer></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">
            <img src="<?= base_url('public/assets/images/logo.png'); ?>" alt="CoreX Logo" height="30">
            CoreX Docs
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">🏠 Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('docs/install'); ?>">📥 Installation</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('docs/config'); ?>">⚙️ Configuration</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('docs/api'); ?>">📡 API</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('docs/commands'); ?>">📝 Commands</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('docs/database'); ?>">🗄️ Database</a></li>
                <li class="nav-item"><a class="nav-link btn btn-primary text-white ms-2" href="https://discord.core-x.dev" target="_blank">💬 Support</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content Container -->
<div class="container mt-4">
