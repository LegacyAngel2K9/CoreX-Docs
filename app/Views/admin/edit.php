<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Documentation - CoreX Docs</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

    <div class="admin-container">
        <h1>Edit Documentation</h1>
        <a href="/admin" class="back-button">Back to Dashboard</a>

        <form action="/admin/update" method="post">
            <input type="hidden" name="id" value="<?= esc($doc['id']); ?>">

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?= esc($doc['title']); ?>" required>

            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="10" required><?= esc($doc['content']); ?></textarea>

            <button type="submit">Save Changes</button>
        </form>
    </div>

</body>
</html>
