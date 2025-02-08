<?= $this->include('layout/header'); ?>

<div class="container">
    <h1 class="mt-4">CoreX API Reference</h1>
    <p class="lead">Comprehensive documentation for CoreX API endpoints.</p>

    <hr>
    <h2>🛠️ Base API URL</h2>
    <p>All API requests should be made to:</p>
    <pre><code>https://yourserver.com/api/</code></pre>

    <hr>
    <h2>📌 Authentication</h2>
    <p>Include an API key in headers for authentication:</p>
    <pre><code>Authorization: Bearer YOUR_API_KEY</code></pre>

    <hr>
    
    <h2>🟢 Server Status</h2>
    <h3>📥 GET /api/status</h3>
    <p>Returns server status.</p>
    <pre><code>{ "status": "OK", "message": "CoreX API is running." }</code></pre>

    <hr>
    
    <h2>👤 User Management</h2>
    <h3>📥 GET /api/user/{identifier}</h3>
    <p>Fetches user details.</p>
    <h3>📤 POST /api/user/create</h3>
    <p>Creates a new user.</p>
    <pre><code>{ "identifier": "steam:110000112345678", "name": "PlayerOne", "job": "police" }</code></pre>
    <h3>📤 POST /api/user/update</h3>
    <p>Updates user data.</p>
    
    <hr>
    
    <h2>💰 Economy</h2>
    <h3>📥 GET /api/balance/{identifier}</h3>
    <p>Gets user balance.</p>
    <h3>📤 POST /api/deposit</h3>
    <p>Deposits money into the bank.</p>
    <h3>📤 POST /api/withdraw</h3>
    <p>Withdraws money from the bank.</p>
    
    <hr>
    
    <h2>🚗 Vehicle Management</h2>
    <h3>📥 GET /api/vehicles</h3>
    <p>Retrieves all available vehicles.</p>
    <h3>📤 POST /api/vehicle/register</h3>
    <p>Registers a vehicle for a user.</p>
    <h3>📥 GET /api/vehicle/{plate}</h3>
    <p>Fetches vehicle details.</p>
    
    <hr>
    
    <h2>🏠 Housing</h2>
    <h3>📥 GET /api/houses</h3>
    <p>Retrieves available houses.</p>
    <h3>📤 POST /api/house/buy</h3>
    <p>Purchases a house.</p>
    <h3>📤 POST /api/house/sell</h3>
    <p>Sells a house.</p>
    
    <hr>
    
    <h2>⚒️ Jobs & Business</h2>
    <h3>📥 GET /api/jobs</h3>
    <p>Lists available jobs.</p>
    <h3>📤 POST /api/job/apply</h3>
    <p>Assigns a job to a user.</p>
    <h3>📤 POST /api/job/quit</h3>
    <p>Removes a job from a user.</p>
    
    <hr>
    
    <h2>🔧 Admin & Permissions</h2>
    <h3>📥 GET /api/admin/permissions/{identifier}</h3>
    <p>Retrieves a user's admin permissions.</p>
    <h3>📤 POST /api/admin/kick</h3>
    <p>Kicks a player from the server.</p>
    <h3>📤 POST /api/admin/ban</h3>
    <p>Bans a player.</p>

    <hr>
    
    <h2>📌 Notes</h2>
    <ul>
        <li>Ensure API keys are included where required.</li>
        <li>Check endpoint availability in your CoreX setup.</li>
        <li>For assistance, visit our <a href="https://discord.core-x.dev" target="_blank">Discord</a>.</li>
    </ul>
</div>

<?= $this->include('layout/footer'); ?>
