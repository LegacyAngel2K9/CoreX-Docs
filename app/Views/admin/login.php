<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - CoreX Docs</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

    <div class="login-container">
        <h1>Admin Login</h1>

        <?php if (session()->getFlashdata('error')): ?>
            <p class="error"><?= session()->getFlashdata('error'); ?></p>
        <?php endif; ?>

        <form action="/admin/authenticate" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
