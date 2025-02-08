<?= $this->include('layout/header'); ?>

<div class="container">
    <h1 class="mt-4">Admin Dashboard</h1>
    <p class="lead">Manage CoreX Documentation from this panel.</p>

    <hr>

    <div class="d-flex justify-content-between mb-3">
        <a href="<?= base_url('admin/create'); ?>" class="btn btn-success">➕ Add New Documentation</a>
        <a href="<?= base_url('admin/logout'); ?>" class="btn btn-danger">🚪 Logout</a>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
    <?php endif; ?>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($docs)) : ?>
                <?php foreach ($docs as $doc) : ?>
                    <tr>
                        <td><?= esc($doc['title']); ?></td>
                        <td><?= esc($doc['category']); ?></td>
                        <td><a href="<?= base_url('docs/' . esc($doc['slug'])); ?>" target="_blank"><?= esc($doc['slug']); ?></a></td>
                        <td>
                            <a href="<?= base_url('admin/edit/' . $doc['id']); ?>" class="btn btn-warning btn-sm">✏ Edit</a>
                            <a href="<?= base_url('admin/delete/' . $doc['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this documentation?');">🗑 Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4" class="text-center">No documentation entries found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->include('layout/footer'); ?>
