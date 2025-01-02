<?php
    require('../connection.php');

    $nReport = $_POST["nReport"];
    $nBuildingsCompleted = $_POST["nBuildingsCompleted"];
    $nBuildingsDestroyed = $_POST["nBuildingsDestroyed"];
    $dayLastSmoked = $_POST["dayLastSmoked"];
    $user = $_POST["user"];

    $addStat = "INSERT INTO stats (nReport, nBuildingsCompleted, nBuildingsDestroyed, dayLastSmoked, user) VALUES ('" . $nReport . "', '" . $nBuildingsCompleted . "', '" . $nBuildingsDestroyed . "', '" . $dayLastSmoked . "', '" . $user . "');";

    try {
        $addStatResult = $conn->query($addStat);

        if($addStatResult == false) {
            die('22');
        }
    }
    catch(Exception $e) {
        die('30');
    }

    echo('Stat inserted successfully');
?>