<?php
    require "dbConn.php";
    $id = $_POST["id"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $contact = $_POST["contact"];
    $gender = $_POST["gender"];
    $role = $_POST["role"];
    $salary = $_POST["salary"];

    $updateSQL = "UPDATE `employees` SET `employeeID` = '$id', `firstName` = '$firstName', `lastName` = '$lastName', `Contact` = '$contact', `Gender` = '$gender', `Role` = '$role', `Salary` = '$salary' WHERE `employeeID` = '$id'";
    $updateQueryFx = mysqli_query($connect, $updateSQL);

    if ($updateQueryFx) {
        echo "Success";
    } else {
        echo "failed" . mysqli_error($connect);
    }
    
?>