<?php
    require('../connection.php');

    $getAllBuildings = "SELECT * FROM buildings;";

    try {
        $buildings = $conn->query($getAllBuildings);

        if($buildings == false) {
            die('22');
        }
    }
    catch(Exception $e) {
        die('30');
    }

    echo json_encode(mysqli_fetch_array($buildings));
?>