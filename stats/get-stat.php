<?php
    require('../connection.php');

    $user = $_GET["user"];

    $getStat = "SELECT * FROM stats WHERE user = '" . $user . "';";

    try {
        $stats = $conn->query($getStat);

        if($stats == false) {
            die('22');
        }
    }
    catch(Exception $e) {
        die('30');
    }

    echo json_encode(mysqli_fetch_array($stats));
?>