         <?php
            $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

            if (isset($_POST['deleteButton']) && $_POST['deleteButton'] == 1 && isset($_POST['xid'])) {
                $xid = $_POST['xid'];

                $stmt = $pdo->prepare('DELETE FROM xclients WHERE xid = :xid');
                $stmt->bindParam(':xid', $xid);

                if ($stmt->execute()) {
                    $deleteSuccessMessage = 'Profil erfolgreich gelöscht.';
                } else {
                    $deleteErrorMessage = 'Fehler beim Löschen des Profils.';
                }
            }
        ?>

    	<div class="left-pane">
            <h2>Clients</h2>
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
                            echo '<button type="submit" name="deleteButton" value="1">Delete</button>';
                            echo '</form></td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
            <div class="right-pane" id="right-pane">
                <h2>Client Details</h2>
                <img id="clientImage" src="" alt="Client Image">
            </div>

	<div class="popup-overlay" id="popupOverlay">
    	    <div class="popup">
        	<?php
       		    if (isset($_POST['deleteButton']) && $_POST['deleteButton'] == 1) {
                    if (isset($deleteSuccessMessage)) {
                    echo $deleteSuccessMessage;
            	    } elseif (isset($deleteErrorMessage)) {
            	    echo $deleteErrorMessage;
            	    }
            	    echo '<br><button id="closePopupButton">Close Popup</button>';
        	    }
        	?>
    	    </div>
        </div>
    </div>