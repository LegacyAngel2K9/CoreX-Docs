<?= $this->include('layout/header'); ?>

<div class="container">
    <h1 class="mt-4">CoreX Configuration Guide</h1>
    <p class="lead">Learn how to configure CoreX to fit your server's needs.</p>

    <hr>

    <h2>🛠️ Editing `server.cfg`</h2>
    <p>Open your `server.cfg` file and make sure it includes the following lines:</p>
    <pre><code>
endpoint_add_tcp "0.0.0.0:30120"
endpoint_add_udp "0.0.0.0:30120"

sv_hostname "My CoreX Roleplay Server"
sets sv_projectName "My CoreX RP"
sets sv_projectDesc "A FiveM RP server using CoreX Framework"
sv_maxClients 48
sv_enforceGameBuild 3407
sv_licenseKey "REPLACE_WITH_YOUR_KEY"

set mysql_connection_string "mysql://root:password@localhost/corex"

ensure [CoreX]
ensure [StandAlone]
ensure [Voice]
ensure [cfx-default]
    </code></pre>

    <hr>

    <h2>🔧 Database Configuration</h2>
    <p>Ensure that your `.env` file is properly configured with your database credentials.</p>
    <pre><code>
DB_HOST=localhost
DB_USER=root
DB_PASS=password
DB_NAME=corex
    </code></pre>
    <p>Use `oxmysql` to manage your MySQL/MariaDB database.</p>

    <hr>

    <h2>⚙️ Adjusting CoreX Settings</h2>
    <p>Inside `resources/[CoreX]/CoreX/config.lua`, you can tweak various settings:</p>
    <pre><code>
Config = {}

Config.StartingMoney = 5000
Config.DefaultJob = "unemployed"

Config.MaxInventoryWeight = 100
Config.ItemWeight = {
    water = 1,
    bread = 1,
    phone = 2
}

Config.VoiceSystem = "pma-voice" -- Supported: 'pma-voice', 'mumble'
Config.FuelSystem = true
Config.VehicleKeys = true
    </code></pre>

    <hr>

    <h2>🚗 Vehicle Configuration</h2>
    <p>Modify vehicle handling settings in `config.lua`:</p>
    <pre><code>
Config.FuelUsage = {
    ["compact"] = 1.0,
    ["sedan"] = 0.8,
    ["suv"] = 0.6,
    ["truck"] = 0.5
}
    </code></pre>

    <hr>

    <h2>💼 Job System Configuration</h2>
    <p>Define jobs in `resources/[CoreX]/CoreX/jobs.lua`:</p>
    <pre><code>
Jobs = {
    ["police"] = {
        label = "Police",
        salary = 2000,
        permissions = {"arrest", "fine", "jail"}
    },
    ["mechanic"] = {
        label = "Mechanic",
        salary = 1500
    },
    ["ems"] = {
        label = "EMS",
        salary = 1800
    }
}
    </code></pre>

    <hr>

    <h2>✅ Final Steps</h2>
    <p>After making changes, restart your FiveM server to apply configurations:</p>
    <pre><code>restart CoreX</code></pre>

    <p>Need help? Join our <a href="https://discord.core-x.dev" target="_blank">Discord Support</a>.</p>
</div>

<?= $this->include('layout/footer'); ?>
