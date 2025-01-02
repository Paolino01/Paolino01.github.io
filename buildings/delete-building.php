<?php
    require('../connection.php');

    $buildingId = $_DELETE["building-id"];  /* IMPORTANT: check the request type, if we should use GET or DELETE */

    $deleteBuilding = "DELETE FROM buildings WHERE buildingId = " . $buildingId . "; ";

    try {
        $deleteBuildingResult = $conn->query($deleteBuilding);

        if($deleteBuildingResult == false) {
            die('22');
        }
    }
    catch(Exception $e) {
        die($e);
    }

    echo('Building deleted successfully <br />');
?>