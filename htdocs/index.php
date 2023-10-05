<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">   
    <link rel="stylesheet" href="/css/log_styles.css">
    <link rel="stylesheet" href="/css/shell_styles.css"> 
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
			    $pdo = new PDO('mysql:host=85.215.173.82;dbname=clients', 'hunt3r', 'hunt3r');
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
        	    <li><div class="menu-item-box"><span class="menu-item-text">CONTROL</span></div></li>
       		    <li><div class="menu-item-box"><span class="menu-item-text">XBUILD</span></div></li>
        	    <li><div class="menu-item-box"><span class="menu-item-text">XSHELL</span></div></li>
       		    <li><div class="menu-item-box"><span class="menu-item-text">XFILE</span></div></li>
       		    <li><div class="menu-item-box"><span class="menu-item-text">XPASS</span></div></li>
        	    <li><div class="menu-item-box"><span class="menu-item-text">XLOGS</span></div></li>
       		    <li><div class="menu-item-box"><span class="menu-item-text">XTEAM</span></div></li>
       		    <li><div class="menu-item-box"><span class="menu-item-text">XCHAT</span></div></li>
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
    	    <div class="main-content" id="main-content">

    	    </div>
<script type="text/javascript" src="/js/script.js" defer></script>
<script type="text/javascript" src="/js/xscript.js" defer></script>
<script type="text/javascript" src="/js/client_interval.js" defer></script>
<script type="text/javascript" src="/js/logs.js" defer></script>
<script type="text/javascript" src="/js/right_pane.js" defer></script>
</body>
</html>