<?php
    require('../connection.php');

    $buildingId = $_PUT["buildingId"];
    $type = $_PUT["type"];
    $startedOn = $_PUT["startedOn"];
    $positionX = $_PUT["positionX"];
    $positionY = $_PUT["positionY"];
    $rotation = $_PUT["rotation"];
    $size = $_PUT["size"];
    $status = $_PUT["status"];

    $editBuilding = "UPDATE buildings SET type = '" . $type . "', startedOn = '" . $startedOn . "', positionX = '" . $positionX . "', positionY = '" . $positionY . "', rotation = '" . $rotation . "', size = '" . $size . "', status = '" . $status . "' WHERE buildingId = " . $buildingId . ";";

    try {
        $editBuildingResult = $conn->query($editBuilding);

        if($editBuildingResult == false) {
            die('22');
        }
    }
    catch(Exception $e) {
        die($e);
    }

    echo('Building updated successfully <br />');
?>