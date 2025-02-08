<?= $this->include('layout/header'); ?>

<div class="container">
    <h1 class="mt-4">✏ Edit Documentation</h1>
    <p class="lead">Modify an existing documentation entry.</p>

    <hr>

    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="alert alert-danger">
            <?= implode('<br>', session()->getFlashdata('errors')); ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('admin/update/' . $doc['id']); ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="<?= esc($doc['title']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug (URL)</label>
            <input type="text" name="slug" id="slug" class="form-control" value="<?= esc($doc['slug']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="installation" <?= ($doc['category'] == 'installation') ? 'selected' : ''; ?>>Installation</option>
                <option value="configuration" <?= ($doc['category'] == 'configuration') ? 'selected' : ''; ?>>Configuration</option>
                <option value="api" <?= ($doc['category'] == 'api') ? 'selected' : ''; ?>>API</option>
                <option value="commands" <?= ($doc['category'] == 'commands') ? 'selected' : ''; ?>>Commands</option>
                <option value="database" <?= ($doc['category'] == 'database') ? 'selected' : ''; ?>>Database</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" rows="10" required><?= esc($doc['content']); ?></textarea>
        </div>

        <div class="d-flex justify-content-between">
            <a href="<?= base_url('admin'); ?>" class="btn btn-secondary">⬅ Back</a>
            <button type="submit" class="btn btn-primary">💾 Save Changes</button>
        </div>
    </form>
</div>

<?= $this->include('layout/footer'); ?>
