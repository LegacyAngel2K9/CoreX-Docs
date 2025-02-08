<?= $this->include('layout/header'); ?>

<div class="container">
    <h1 class="mt-4">CoreX Commands List</h1>
    <p class="lead">List of available in-game and admin commands in CoreX Framework.</p>

    <hr>

    <h2>🛡️ Admin Commands</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Command</th>
                <th>Description</th>
                <th>Usage</th>
            </tr>
        </thead>
        <tbody>
            <tr><td><code>/setjob</code></td><td>Assigns a job to a player.</td><td><code>/setjob [playerID] [job] [grade]</code></td></tr>
            <tr><td><code>/kick</code></td><td>Kicks a player from the server.</td><td><code>/kick [playerID] [reason]</code></td></tr>
            <tr><td><code>/ban</code></td><td>Bans a player from the server.</td><td><code>/ban [playerID] [time] [reason]</code></td></tr>
            <tr><td><code>/revive</code></td><td>Revives a player.</td><td><code>/revive [playerID]</code></td></tr>
            <tr><td><code>/noclip</code></td><td>Enables/disables noclip mode.</td><td><code>/noclip</code></td></tr>
            <tr><td><code>/announce</code></td><td>Sends a server-wide announcement.</td><td><code>/announce [message]</code></td></tr>
            <tr><td><code>/giveitem</code></td><td>Gives an item to a player.</td><td><code>/giveitem [playerID] [item] [amount]</code></td></tr>
            <tr><td><code>/clearinv</code></td><td>Clears a player's inventory.</td><td><code>/clearinv [playerID]</code></td></tr>
            <tr><td><code>/setmoney</code></td><td>Sets a player's money.</td><td><code>/setmoney [playerID] [amount]</code></td></tr>
            <tr><td><code>/tp</code></td><td>Teleports to a player.</td><td><code>/tp [playerID]</code></td></tr>
            <tr><td><code>/tphere</code></td><td>Teleports a player to you.</td><td><code>/tphere [playerID]</code></td></tr>
            <tr><td><code>/freeze</code></td><td>Freezes a player in place.</td><td><code>/freeze [playerID]</code></td></tr>
        </tbody>
    </table>

    <hr>

    <h2>👨‍💼 Player Commands</h2>
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>Command</th>
                <th>Description</th>
                <th>Usage</th>
            </tr>
        </thead>
        <tbody>
            <tr><td><code>/help</code></td><td>Shows a list of available commands.</td><td><code>/help</code></td></tr>
            <tr><td><code>/me</code></td><td>Displays an action in chat.</td><td><code>/me [action]</code></td></tr>
            <tr><td><code>/id</code></td><td>Displays your server ID.</td><td><code>/id</code></td></tr>
            <tr><td><code>/pay</code></td><td>Sends money to another player.</td><td><code>/pay [playerID] [amount]</code></td></tr>
            <tr><td><code>/givekey</code></td><td>Gives vehicle keys to another player.</td><td><code>/givekey [playerID]</code></td></tr>
            <tr><td><code>/fuel</code></td><td>Refuels your vehicle.</td><td><code>/fuel</code></td></tr>
            <tr><td><code>/garage</code></td><td>Opens the personal garage menu.</td><td><code>/garage</code></td></tr>
            <tr><td><code>/house</code></td><td>Opens house management menu.</td><td><code>/house</code></td></tr>
            <tr><td><code>/job</code></td><td>Displays your current job and salary.</td><td><code>/job</code></td></tr>
            <tr><td><code>/car</code></td><td>Spawns a vehicle.</td><td><code>/car [vehicleModel]</code></td></tr>
            <tr><td><code>/lock</code></td><td>Locks/unlocks your vehicle.</td><td><code>/lock</code></td></tr>
            <tr><td><code>/trunk</code></td><td>Opens the vehicle trunk.</td><td><code>/trunk</code></td></tr>
        </tbody>
    </table>

    <hr>

    <h2>📌 Notes</h2>
    <ul>
        <li>Admin commands require the appropriate permissions.</li>
        <li>Some commands may vary depending on your server’s configuration.</li>
        <li>To report bugs or request new features, visit our <a href="https://discord.core-x.dev" target="_blank">Discord Support</a>.</li>
    </ul>
</div>

<?= $this->include('layout/footer'); ?>
