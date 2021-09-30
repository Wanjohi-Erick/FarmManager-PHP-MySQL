<?php
    require "dbConn.php";
    $name = $_POST["name"];
    $number = $_POST["number"];
    $age = $_POST["age"];
    $activity = $_POST["activity"];
    $treatmentDate = $_POST["treatmentDate"];
    $yield = $_POST["yield"];
    $yieldDate = $_POST["yieldDate"];

    $updateSQL = "UPDATE `livestock` SET `livestockName` = '$name', `Number` = '$units', `Age` = '$land', `Activity` = '$activity', `treatmentDate` = '$treatmentDate', `Yield` = '$yield', `harvestDate` = '$yieldDate' WHERE `cropName` = '$name'";
    $updateQueryFx = mysqli_query($connect, $updateSQL);

    if ($updateQueryFx) {
        echo "Success";
    } else {
        echo "failed" . mysqli_error($connect);
    }
    
?>