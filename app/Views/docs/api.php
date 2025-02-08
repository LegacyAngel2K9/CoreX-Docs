<?= $this->include('layout/header'); ?>

<div class="container">
    <h1 class="mt-4">CoreX API Reference</h1>
    <p class="lead">Documentation for available API endpoints in CoreX Framework.</p>

    <hr>

    <h2>🛠️ Base API URL</h2>
    <p>All API requests should be made to the following base URL:</p>
    <pre><code>https://yourserver.com/api/</code></pre>

    <hr>

    <h2>📌 Authentication</h2>
    <p>Some API endpoints require authentication via an API key. Include the key in your request headers:</p>
    <pre><code>
Authorization: Bearer YOUR_API_KEY
    </code></pre>

    <hr>

    <h2>📥 GET /api/status</h2>
    <p>Returns the current status of the CoreX server.</p>
    <pre><code>
GET /api/status
    </code></pre>
    <h4>🔹 Response Example:</h4>
    <pre><code>
{
    "status": "OK",
    "message": "CoreX API is running successfully.",
    "timestamp": "2024-02-08 12:30:00"
}
    </code></pre>

    <hr>

    <h2>📥 GET /api/contributors</h2>
    <p>Fetches a list of contributors from GitHub for CoreX.</p>
    <pre><code>
GET /api/contributors
    </code></pre>
    <h4>🔹 Response Example:</h4>
    <pre><code>
[
    {
        "username": "LegacyAngel2K9",
        "avatar_url": "https://github.com/LegacyAngel2K9.png",
        "profile_url": "https://github.com/LegacyAngel2K9",
        "contributions": 50
    },
    {
        "username": "Contributor123",
        "avatar_url": "https://github.com/Contributor123.png",
        "profile_url": "https://github.com/Contributor123",
        "contributions": 20
    }
]
    </code></pre>

    <hr>

    <h2>📤 POST /api/user/create</h2>
    <p>Creates a new user in the CoreX database.</p>
    <pre><code>
POST /api/user/create
    </code></pre>
    <h4>🔹 Request Body (JSON):</h4>
    <pre><code>
{
    "identifier": "steam:110000112345678",
    "name": "PlayerOne",
    "job": "police",
    "money": 5000,
    "bank": 10000
}
    </code></pre>
    <h4>🔹 Response Example:</h4>
    <pre><code>
{
    "status": "success",
    "message": "User created successfully."
}
    </code></pre>

    <hr>

    <h2>📥 GET /api/user/{identifier}</h2>
    <p>Fetches user details by identifier.</p>
    <pre><code>
GET /api/user/steam:110000112345678
    </code></pre>
    <h4>🔹 Response Example:</h4>
    <pre><code>
{
    "identifier": "steam:110000112345678",
    "name": "PlayerOne",
    "job": "police",
    "money": 5000,
    "bank": 10000
}
    </code></pre>

    <hr>

    <h2>📤 POST /api/user/update</h2>
    <p>Updates user data.</p>
    <pre><code>
POST /api/user/update
    </code></pre>
    <h4>🔹 Request Body (JSON):</h4>
    <pre><code>
{
    "identifier": "steam:110000112345678",
    "job": "ems",
    "money": 7000
}
    </code></pre>
    <h4>🔹 Response Example:</h4>
    <pre><code>
{
    "status": "success",
    "message": "User updated successfully."
}
    </code></pre>

    <hr>

    <h2>📥 GET /api/vehicles</h2>
    <p>Returns a list of available vehicles.</p>
    <pre><code>
GET /api/vehicles
    </code></pre>
    <h4>🔹 Response Example:</h4>
    <pre><code>
[
    {
        "model": "police",
        "name": "Police Cruiser",
        "price": 50000
    },
    {
        "model": "adder",
        "name": "Adder Supercar",
        "price": 1000000
    }
]
    </code></pre>

    <hr>

    <h2>📤 POST /api/vehicle/register</h2>
    <p>Registers a new vehicle to a user.</p>
    <pre><code>
POST /api/vehicle/register
    </code></pre>
    <h4>🔹 Request Body (JSON):</h4>
    <pre><code>
{
    "identifier": "steam:110000112345678",
    "model": "police",
    "plate": "POL123"
}
    </code></pre>
    <h4>🔹 Response Example:</h4>
    <pre><code>
{
    "status": "success",
    "message": "Vehicle registered successfully."
}
    </code></pre>

    <hr>

    <h2>📌 Notes</h2>
    <ul>
        <li>API requests requiring authentication must include an API key.</li>
        <li>Ensure the API endpoints are correctly configured in your CoreX server.</li>
        <li>Need help? Visit our <a href="https://discord.core-x.dev" target="_blank">Discord Support</a>.</li>
    </ul>
</div>

<?= $this->include('layout/footer'); ?>
