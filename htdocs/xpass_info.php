<?php
    // xpass_info.php to handle the request and return response
    if(isset($_GET['xid'])) {
        $xid = $_GET['xid'];

        $response = "Information for XID: " . $xid;

        echo $response;
    } else {
        echo "Invalid request.";
    }
?>


HEllo