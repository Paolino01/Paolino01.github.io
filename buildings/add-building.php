<?php
    require('../connection.php');

    $type = $_POST["type"];
    $startedOn = $_POST["startedOn"];
    $positionX = $_POST["positionX"];
    $positionY = $_POST["positionY"];
    $rotation = $_POST["rotation"];
    $size = $_POST["size"];
    $status = $_POST["status"];

    $addBuilding = "INSERT INTO buildings (type, startedOn, positionX, positionY, rotation, size, status) VALUES ('" . $type . "', '" . $startedOn . "', '" . $positionX . "', '" . $positionY . "', '" . $rotation . "', '" . $size . "', '" . $status . "');";

    try {
        $addBuildingResult = $conn->query($addBuilding);

        if($addBuildingResult == false) {
            die('22');
        }
    }
    catch(Exception $e) {
        die('30');
    }

    echo('Building inserted successfully <br />');
?>