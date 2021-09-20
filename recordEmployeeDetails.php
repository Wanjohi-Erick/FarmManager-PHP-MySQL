<?php
    require_once("dbConn.php");
    $ID = $_POST["employeeID"];
    $name = $_POST["employeeName"];
    $contact = $_POST["employeeContact"];

    $sendToDatabase = "INSERT INTO `employees` (
        ID,
        dateOfEmployment,
        employeeID,
        employeeName,
        Contact
      )
        VALUES (
            NULL,
            CURRENT_TIMESTAMP,
            '$ID',
            '$name',
            '$contact'
        );";
    $sendToDatabaseQuery = mysqli_query($connect, $sendToDatabase);
    if ($sendToDatabaseQuery){
        $response = "recorded successfully";
        echo $response;
    }else {
        $response  = "recording failed";
        echo $response . mysqli_error($connect);
    }
?>