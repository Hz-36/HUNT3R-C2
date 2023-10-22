<?php
    $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

    if (isset($_POST['xid'])) {
        $xid = $_POST['xid'];
        $stmt = $pdo->prepare('DELETE FROM xclients WHERE xid = :xid');
        $stmt->bindParam(':xid', $xid);
    
        if ($stmt->execute()) {
            echo 'Client Successfully Deleted.';
        } else {
            echo 'ERROR x101 Deleting Client.';
        }
    } else {
        echo 'ERROR x100 No XID Provided.';
    }
    echo '<script>showPopup();</script>';
?>

