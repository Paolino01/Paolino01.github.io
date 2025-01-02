<?php
    require('../connection.php');

    $user = $_POST["user"];

    $editStat = "UPDATE stats SET nReport = nReport + 1, nBuildingsDestroyed = nBuildingsDestroyed + 1, dayLastSmoked = CURDATE() WHERE user = '" . $user . "';";

    try {
        $editStatResult = $conn->query($editStat);

        if($editStatResult == false) {
            die('22');
        }
    }
    catch(Exception $e) {
        die($e);
    }

    echo('Stat updated successfully <br />');
?>