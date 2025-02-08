<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installation Guide - CoreX Docs</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

    <div class="docs-container">
        <h1>CoreX Installation Guide</h1>
        <p>This guide will help you install and set up CoreX on your FiveM server.</p>

        <h2>Step 1: Download CoreX</h2>
        <p>Clone the repository or download the latest release:</p>
        <pre>
git clone https://github.com/LegacyAngel2K9/CoreX.git
        </pre>

        <h2>Step 2: Move CoreX to Your FiveM Server</h2>
        <p>Place the extracted CoreX folder into your FiveM <code>resources</code> directory.</p>

        <h2>Step 3: Import the Database</h2>
        <p>Open your database tool (e.g., phpMyAdmin, MySQL CLI) and import the <code>database/corex.sql</code> file.</p>
        <pre>
mysql -u root -p corex < database/corex.sql
        </pre>

        <h2>Step 4: Configure CoreX</h2>
        <p>Update the <code>config.lua</code> file in the CoreX folder with your database credentials:</p>
        <pre>
Config.Database = {
    host = "localhost",
    user = "root",
    password = "password",
    database = "corex"
}
        </pre>

        <h2>Step 5: Add CoreX to Your Server.cfg</h2>
        <p>Open your FiveM server.cfg file and add:</p>
        <pre>
ensure CoreX
        </pre>

        <h2>Step 6: Start Your Server</h2>
        <p>Run your FiveM server and check the console for any errors.</p>
        <pre>
./run.sh
        </pre>

        <h2>You're Done!</h2>
        <p>Your CoreX installation is now complete. If you encounter any issues, refer to the documentation or seek support.</p>
    </div>

</body>
</html>
