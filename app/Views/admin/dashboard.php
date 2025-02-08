<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - CoreX Docs</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

    <div class="admin-container">
        <h1>Admin Dashboard</h1>
        <a href="/admin/logout" class="logout-button">Logout</a>

        <h2>Manage Documentation</h2>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($docs as $doc): ?>
                    <tr>
                        <td><?= esc($doc['title']); ?></td>
                        <td>
                            <a href="/admin/edit/<?= $doc['id']; ?>">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="/admin/create" class="button">Create New Document</a>
    </div>

</body>
</html>
