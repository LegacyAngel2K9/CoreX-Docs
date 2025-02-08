<?= $this->include('layout/header'); ?>

<div class="container text-center">
    <h1 class="mt-4">Welcome to CoreX Documentation</h1>
    <p class="lead">Your complete guide to installing, configuring, and using the CoreX Framework.</p>

    <hr>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card border-primary mb-3">
                <div class="card-header bg-primary text-white">📥 Installation Guide</div>
                <div class="card-body">
                    <p class="card-text">Step-by-step guide on installing CoreX.</p>
                    <a href="<?= base_url('docs/install'); ?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-success mb-3">
                <div class="card-header bg-success text-white">⚙️ Configuration</div>
                <div class="card-body">
                    <p class="card-text">Customize CoreX to fit your server’s needs.</p>
                    <a href="<?= base_url('docs/config'); ?>" class="btn btn-success">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-info mb-3">
                <div class="card-header bg-info text-white">📡 API Reference</div>
                <div class="card-body">
                    <p class="card-text">Learn about CoreX API functions and endpoints.</p>
                    <a href="<?= base_url('docs/api'); ?>" class="btn btn-info">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card border-warning mb-3">
                <div class="card-header bg-warning text-dark">📝 Commands List</div>
                <div class="card-body">
                    <p class="card-text">List of available in-game and admin commands.</p>
                    <a href="<?= base_url('docs/commands'); ?>" class="btn btn-warning text-white">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-danger mb-3">
                <div class="card-header bg-danger text-white">🗄️ Database Setup</div>
                <div class="card-body">
                    <p class="card-text">Database schema and setup instructions.</p>
                    <a href="<?= base_url('docs/database'); ?>" class="btn btn-danger">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-dark mb-3">
                <div class="card-header bg-dark text-white">💬 Support & Community</div>
                <div class="card-body">
                    <p class="card-text">Get help and contribute to the CoreX project.</p>
                    <a href="https://discord.core-x.dev" target="_blank" class="btn btn-dark">Join Discord</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>
