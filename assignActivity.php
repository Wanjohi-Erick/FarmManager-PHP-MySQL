<?php
    require_once "dbConn.php";
    $employeId = $_POST["EmployeeID"];
    $username = $_POST["Username"];
    $activity = $_POST["Activity"];

    $insertSQL = "INSERT INTO `assigned_activities`(`ID`, `Date Assigned`, `Employee ID`, `User Name`, `Activity`) VALUES (NULL, CURRENT_TIMESTAMP, '$employeId', '$username', '$activity')";
    $insertQueryFx = mysqli_query($connect, $insertSQL);

    if ($insertQueryFx) {
        echo "Success";
    } else {
        echo "failed" . mysqli_error($connect);
    }
?>