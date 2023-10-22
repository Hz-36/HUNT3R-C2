<?php
    $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

    if (isset($_GET['xid'])) {
        $xid = $_GET['xid'];

        $stmt = $pdo->prepare('DELETE FROM xclients WHERE xid = :xid');
        $stmt->bindParam(':xid', $xid);

        if ($stmt->execute()) {
            $deleteSuccessMessage = 'Client Profile Successfully Deleted.';
        } else {
            $deleteErrorMessage = 'ERROR x102 Deleting Client Profile Client.';
        }
    } else {
        $deleteErrorMessage = 'ERROR x103 No XID Provided.';
    }
?>
