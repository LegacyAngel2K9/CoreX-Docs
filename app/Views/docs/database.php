<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Structure - CoreX Docs</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

    <div class="docs-container">
        <h1>CoreX Database Structure</h1>
        <p>This page outlines the database schema used in CoreX.</p>

        <h2>Characters Table</h2>
        <p>Stores player character details.</p>
        <pre>
CREATE TABLE characters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(50) NOT NULL,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    cash INT DEFAULT 500,
    bank INT DEFAULT 1000,
    inventory TEXT,
    status ENUM('Alive', 'Dead') NOT NULL DEFAULT 'Alive'
);
        </pre>

        <h2>Banking Table</h2>
        <p>Handles player banking transactions.</p>
        <pre>
CREATE TABLE banking (
    id INT AUTO_INCREMENT PRIMARY KEY,
    character_id INT NOT NULL,
    balance INT DEFAULT 0,
    transactions TEXT,
    FOREIGN KEY (character_id) REFERENCES characters(id) ON DELETE CASCADE
);
        </pre>

        <h2>Inventory Table</h2>
        <p>Stores player inventory items.</p>
        <pre>
CREATE TABLE inventory (
    id INT AUTO_INCREMENT PRIMARY KEY,
    character_id INT NOT NULL,
    items TEXT NOT NULL, -- JSON format
    max_weight INT DEFAULT 50,
    FOREIGN KEY (character_id) REFERENCES characters(id) ON DELETE CASCADE
);
        </pre>

        <h2>Vehicles Table</h2>
        <p>Tracks player-owned vehicles.</p>
        <pre>
CREATE TABLE vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    character_id INT NOT NULL,
    model VARCHAR(50) NOT NULL,
    plate VARCHAR(10) NOT NULL UNIQUE,
    garage_location VARCHAR(50) DEFAULT 'Default Garage',
    fuel_level INT DEFAULT 100,
    health INT DEFAULT 1000,
    stored BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (character_id) REFERENCES characters(id) ON DELETE CASCADE
);
        </pre>

        <h2>Properties Table</h2>
        <p>Stores buyable and rentable properties.</p>
        <pre>
CREATE TABLE properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    character_id INT NOT NULL,
    address VARCHAR(100) NOT NULL,
    rent_price INT DEFAULT 0,
    purchase_price INT DEFAULT 0,
    ownership ENUM('Owned', 'Rented') NOT NULL,
    storage_capacity INT DEFAULT 50,
    FOREIGN KEY (character_id) REFERENCES characters(id) ON DELETE CASCADE
);
        </pre>

        <h2>Jobs Table</h2>
        <p>Manages available jobs.</p>
        <pre>
CREATE TABLE jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_name VARCHAR(100) NOT NULL UNIQUE,
    salary INT NOT NULL DEFAULT 100
);
        </pre>

        <h2>Player Jobs Table</h2>
        <p>Tracks which players have which jobs.</p>
        <pre>
CREATE TABLE player_jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    character_id INT NOT NULL,
    job_id INT NOT NULL,
    rank VARCHAR(50) DEFAULT 'Employee',
    FOREIGN KEY (character_id) REFERENCES characters(id) ON DELETE CASCADE,
    FOREIGN KEY (job_id) REFERENCES jobs(id) ON DELETE CASCADE
);
        </pre>

        <h2>Permissions Table</h2>
        <p>Handles Discord-based role permissions.</p>
        <pre>
CREATE TABLE permissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    discord_id VARCHAR(50) NOT NULL,
    role_name VARCHAR(50) NOT NULL
);
        </pre>

        <h2>Logs Table</h2>
        <p>Stores admin actions and security logs.</p>
        <pre>
CREATE TABLE logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    character_id INT NOT NULL,
    action TEXT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
        </pre>
    </div>

</body>
</html>
