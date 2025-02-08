<?= $this->include('layout/header'); ?>

<div class="container">
    <h1 class="mt-4">CoreX Installation Guide</h1>
    <p class="lead">Follow these steps to install CoreX Framework on your FiveM server.</p>

    <hr>

    <h2>🛠️ Requirements</h2>
    <ul>
        <li>FiveM Server (Latest Build)</li>
        <li>MySQL/MariaDB Database</li>
        <li>txAdmin (Recommended for easy setup)</li>
        <li>Git & Composer (For updates and dependencies)</li>
        <li>`oxmysql` (Required for database interaction)</li>
    </ul>

    <hr>

    <h2>🚀 Option 1: Install Using txAdmin Recipe (Recommended)</h2>
    <p>If you are using **txAdmin**, you can quickly install CoreX with the pre-configured recipe.</p>
    
    <h3>Steps to Install via txAdmin:</h3>
    <ol>
        <li>Start your **FiveM server** and open **txAdmin**.</li>
        <li>Navigate to **"Recipe Deployer"** in the txAdmin panel.</li>
        <li>Click **"Deploy Recipe from URL"**.</li>
        <li>Enter the following link as the **Recipe URL**:</li>
    </ol>
    
    <pre><code>https://raw.githubusercontent.com/LegacyAngel2K9/CoreX-Recipe/refs/heads/main/recipe.yaml</code></pre>

    <ol start="5">
        <li>Follow the on-screen instructions to complete the installation.</li>
        <li>Once installed, restart your FiveM server.</li>
    </ol>
    
    <p><strong>That’s it! 🎉 CoreX is now installed using txAdmin.</strong></p>

    <hr>

    <h2>📥 Option 2: Manual Installation</h2>
    <p>If you prefer to install CoreX manually, follow these steps:</p>

    <h3>Step 1: Download CoreX</h3>
    <p>Clone the latest version of CoreX Framework:</p>
    <pre><code>git clone https://github.com/LegacyAngel2K9/CoreX.git resources/[CoreX]/CoreX</code></pre>
    <p>Or manually download from: <a href="https://github.com/LegacyAngel2K9/CoreX" target="_blank">GitHub Repository</a></p>

    <hr>

    <h3>Step 2: Configure `server.cfg`</h3>
    <p>Open your `server.cfg` and add the following lines:</p>
    <pre><code>
ensure oxmysql
ensure [CoreX]
ensure [StandAlone]
ensure [Voice]
ensure [cfx-default]
    </code></pre>

    <hr>

    <h3>Step 3: Set Up the Database</h3>
    <p>Import the CoreX SQL structure into your database:</p>
    <pre><code>mysql -u root -p corex < resources/[CoreX]/CoreX/database/corex.sql</code></pre>
    <p>Ensure `oxmysql` is installed and configured properly.</p>

    <p>Alternatively, if using phpMyAdmin or another database manager, manually import `corex.sql`.</p>

    <hr>

    <h3>Step 4: Start Your Server</h3>
    <p>Run the following command in your FiveM server folder:</p>
    <pre><code>bash run.sh</code></pre>
    <p>Or if using Windows:</p>
    <pre><code>start run.cmd</code></pre>

    <hr>

    <h2>✅ Installation Complete!</h2>
    <p>Your CoreX Roleplay Server should now be running! 🎉</p>
    <p>Need help? Join our <a href="https://discord.core-x.dev" target="_blank">Discord Support</a>.</p>
</div>

<?= $this->include('layout/footer'); ?>
