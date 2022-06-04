<?php
    require "dbConn.php";
    $name = $_POST["name"];
    $units = $_POST["units"];
    $land = $_POST["land"];
    $userName = $_POST["userName"];

    $postSQL = "INSERT INTO `crops` (`ID`, `cropName`, `measurementUnit`, `Land`, `userName`) Values (NULL, '$name', '$units', '$land', '$userName')";
    $postQueryFX = mysqli_query($connect, $postSQL);

    if ($postQueryFX) {
        echo "Success";
    } else {
        echo "failed";
    }
    
?>