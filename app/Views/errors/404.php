<?= $this->include('layout/header'); ?>

<div class="container text-center mt-5">
    <h1 class="display-4 text-danger">404 - Page Not Found</h1>
    <p class="lead">Oops! The page you are looking for doesn't exist or has been moved.</p>
    <img src="<?= base_url('public/assets/images/404.png'); ?>" alt="404 Not Found" class="img-fluid mt-3" style="max-width: 400px;">
    
    <p class="mt-4">Here are some helpful links to get you back on track:</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="<?= base_url(); ?>" class="btn btn-primary">🏠 Home</a></li>
        <li class="list-inline-item"><a href="<?= base_url('docs'); ?>" class="btn btn-success">📖 Documentation</a></li>
        <li class="list-inline-item"><a href="<?= base_url('docs/install'); ?>" class="btn btn-warning">⚙️ Installation Guide</a></li>
        <li class="list-inline-item"><a href="https://discord.core-x.dev" target="_blank" class="btn btn-dark">💬 Discord Support</a></li>
    </ul>
</div>

<?= $this->include('layout/footer'); ?>
