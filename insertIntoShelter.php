<?php
    require_once('dbConn.php');
    $location = $_POST["location"];
    $size = $_POST["size"];
    $condition = $_POST["condition"];
    $purpose = $_POST["purpose"];

    $insertQuery = "INSERT INTO `shelter` (`ID`, `Location`, `Size`, `Condition`, `Purpose`) VALUES(NULL, '$location', '$size', '$condition', '$purpose')";
    mysqli_query($connect, $insertQuery);
?>