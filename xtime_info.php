<?php
// xpass_info.php to handle the request and return response
if (isset($_GET['xid'])) {
    $xid = $_GET['xid'];

    // Assuming you have a MySQL connection setup

    // Change these variables to your database credentials
    $servername = "localhost";
    $username = "hunt3r";
    $password = "hunt3r";
    $dbname = "yclients";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch the information based on xid
    $sql = "SELECT website, email, username, password FROM xclients WHERE xid = '$xid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr><th>Website</th><th>Email</th><th>Username</th><th>Password</th></tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['website'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['password'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo "No records found.";
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
