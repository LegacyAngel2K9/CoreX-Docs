<?= $this->include('layout/header'); ?>

<div class="container">
    <h1 class="mt-4">CoreX Database Setup</h1>
    <p class="lead">Learn how to set up and configure the CoreX database.</p>

    <hr>

    <h2>🛠️ Database Requirements</h2>
    <ul>
        <li>MySQL or MariaDB</li>
        <li>Database management tool (phpMyAdmin, HeidiSQL, MySQL Workbench, etc.)</li>
        <li>oxmysql resource installed on your FiveM server</li>
    </ul>

    <hr>

    <h2>📌 Creating the Database</h2>
    <p>Run the following command in your MySQL terminal or query editor to create the CoreX database:</p>
    <pre><code>
CREATE DATABASE corex CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
    </code></pre>

    <p>Then, ensure that your `server.cfg` contains the correct database connection string:</p>
    <pre><code>
set mysql_connection_string "mysql://root:password@localhost/corex"
    </code></pre>

    <hr>

    <h2>📥 Importing CoreX Tables</h2>
    <p>Run the following command to import the necessary database structure:</p>
    <pre><code>mysql -u root -p corex < resources/[CoreX]/CoreX/database/corex.sql</code></pre>

    <p>Alternatively, you can manually import the SQL files using your database management tool.</p>

    <hr>

    <h2>📂 CoreX Database Tables</h2>
    <p>CoreX uses several tables to store player, job, and economy data:</p>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Table Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>users</code></td>
                <td>Stores player data (identifier, name, job, money, bank balance, etc.).</td>
            </tr>
            <tr>
                <td><code>jobs</code></td>
                <td>Contains job roles and salary information.</td>
            </tr>
            <tr>
                <td><code>vehicles</code></td>
                <td>Stores owned vehicles and their status.</td>
            </tr>
            <tr>
                <td><code>inventory</code></td>
                <td>Manages player inventory and item ownership.</td>
            </tr>
            <tr>
                <td><code>housing</code></td>
                <td>Stores purchased/rented houses and apartments.</td>
            </tr>
            <tr>
                <td><code>economy</code></td>
                <td>Handles transactions, bank logs, and economy tracking.</td>
            </tr>
        </tbody>
    </table>

    <hr>

    <h2>🗄️ Users Table Structure</h2>
    <p>The `users` table stores all player-related data:</p>
    <pre><code>
CREATE TABLE users (
    identifier VARCHAR(255) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    money INT DEFAULT 0,
    bank INT DEFAULT 0,
    job VARCHAR(50) DEFAULT 'unemployed',
    job_grade INT DEFAULT 0,
    inventory LONGTEXT DEFAULT NULL,
    position VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
    </code></pre>

    <hr>

    <h2>💾 Backing Up Your Database</h2>
    <p>To back up your database, run the following command:</p>
    <pre><code>mysqldump -u root -p corex > corex_backup.sql</code></pre>

    <p>To restore from a backup:</p>
    <pre><code>mysql -u root -p corex < corex_backup.sql</code></pre>

    <hr>

    <h2>✅ Final Steps</h2>
    <ul>
        <li>Ensure `oxmysql` is properly installed and running.</li>
        <li>Check that your database connection is working in `server.cfg`.</li>
        <li>Restart your server after making database changes.</li>
    </ul>

    <p>Need help? Visit our <a href="https://discord.core-x.dev" target="_blank">Discord Support</a>.</p>
</div>

<?= $this->include('layout/footer'); ?>
