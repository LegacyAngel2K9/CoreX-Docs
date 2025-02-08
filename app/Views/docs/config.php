<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuration Guide - CoreX Docs</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

    <div class="docs-container">
        <h1>CoreX Configuration Guide</h1>
        <p>This guide provides details on configuring CoreX for your FiveM server.</p>

        <h2>Database Configuration</h2>
        <p>Update your database settings in <code>config.lua</code>:</p>
        <pre>
Config.Database = {
    host = "localhost",
    user = "root",
    password = "password",
    database = "corex"
}
        </pre>

        <h2>Economy Settings</h2>
        <p>Modify player starting balances and salary intervals:</p>
        <pre>
Config.General = {
    startingCash = 500,
    startingBank = 1000
}

Config.Jobs = {
    salaryInterval = 15 -- Salary payout every 15 minutes
}
        </pre>

        <h2>Inventory Configuration</h2>
        <p>Set inventory weight limits:</p>
        <pre>
Config.Inventory = {
    maxWeight = 50, -- Maximum inventory weight
    defaultWeight = {
        water = 1,
        bread = 1,
        health_pack = 2
    }
}
        </pre>

        <h2>Vehicle Settings</h2>
        <p>Configure garage and impound fees:</p>
        <pre>
Config.Vehicles = {
    defaultGarage = "Main Garage",
    impoundFee = 500
}
        </pre>

        <h2>Housing System</h2>
        <p>Enable interiors and set storage capacity:</p>
        <pre>
Config.Housing = {
    enableInteriors = true,
    defaultStorageCapacity = 50
}
        </pre>

        <h2>Admin & Permissions</h2>
        <p>Enable Discord role-based permissions:</p>
        <pre>
Config.Admin = {
    enableDiscordPermissions = true,
    adminRoles = { "Admin", "Moderator" }
}
        </pre>
    </div>

</body>
</html>
