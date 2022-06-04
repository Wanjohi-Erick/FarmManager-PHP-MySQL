<?php
    require_once("dbConn.php");
    $ID = $_POST["employeeID"];
    $firstName = $_POST["employeeFirstName"];
    $lastName = $_POST["employeeLastName"];
    $contact = $_POST["employeeContact"];
    $userName = $_POST["userName"];

    $sendToDatabase = "INSERT INTO `employees` (
        ID,
        dateOfEmployment,
        employeeID,
        firstName,
        lastName,
        Contact, 
        userName,
        Gender,
        Role,
        Salary
      )
        VALUES (
            NULL,
            CURRENT_TIMESTAMP,
            '$ID',
            '$firstName',
            '$lastName',
            '$contact', 
            '$userName',
            NULL,
            NULL,
            NULL
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