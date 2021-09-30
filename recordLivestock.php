<?php
    require "dbConn.php";
    $name = $_POST["name"];
    $number = $_POST["number"];
    $age = $_POST["age"];

    $postSQL = "INSERT INTO `livestock` (`ID`, `livestockName`, `Number`, `Age`) Values (NULL, '$name', '$number', '$age')";
    $postQueryFX = mysqli_query($connect, $postSQL);

    if ($postQueryFX) {
        echo "Success";
    } else {
        echo "failed";
    }
    
?>