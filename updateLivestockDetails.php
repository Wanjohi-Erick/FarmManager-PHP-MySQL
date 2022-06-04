<?php
    require "dbConn.php";
    $name = $_POST["name"];
    $units = $_POST["units"];
    $land = $_POST["land"];
    $activity = $_POST["activity"];
    $treatmentDate = $_POST["treatmentDate"];
    $yield = $_POST["yield"];
    $yieldDate = $_POST["yieldDate"];

    $updateSQL = "UPDATE `crops` SET `cropName` = '$name', `measurementUnit` = '$units', `Land` = '$land', `Activity` = '$activity', `treatmentDate` = '$treatmentDate', `Yield` = '$yield', `harvestDate` = '$yieldDate' WHERE `cropName` = '$name'";
    $updateQueryFx = mysqli_query($connect, $updateSQL);

    if ($updateQueryFx) {
        echo "Success";
    } else {
        echo "failed" . mysqli_error($connect);
    }
    
?>