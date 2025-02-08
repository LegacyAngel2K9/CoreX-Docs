<?= $this->include('layout/header'); ?>

<div class="container">
    <h1 class="mt-4">➕ Add New Documentation</h1>
    <p class="lead">Create a new documentation entry.</p>

    <hr>

    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="alert alert-danger">
            <?= implode('<br>', session()->getFlashdata('errors')); ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('admin/store'); ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug (URL)</label>
            <input type="text" name="slug" id="slug" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="installation">Installation</option>
                <option value="configuration">Configuration</option>
                <option value="api">API</option>
                <option value="commands">Commands</option>
                <option value="database">Database</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" rows="10" required></textarea>
        </div>

        <div class="d-flex justify-content-between">
            <a href="<?= base_url('admin'); ?>" class="btn btn-secondary">⬅ Back</a>
            <button type="submit" class="btn btn-success">✅ Create Documentation</button>
        </div>
    </form>
</div>

<?= $this->include('layout/footer'); ?>
