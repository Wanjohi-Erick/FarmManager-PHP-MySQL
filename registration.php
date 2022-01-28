<?php
    require_once("dbConn.php");
    $firstName = $_POST["FirstName"];
    $lastName = $_POST["LastName"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $farmName = $_POST["FarmName"];
    $password = $_POST["Password"];

    $hashedPassword = md5($password);

    $sendToDatabase = "INSERT INTO `users` (
        `ID`,
        `Registration Date`,
        `First Name`,
        `Last Name`,
        `Email`,
        `Phone`, 
        `Farm Name`, 
        `Password`
      )
        VALUES (
            NULL,
            CURRENT_TIMESTAMP,
            '$firstName',
            '$lastName',
            '$email',
            '$phone',
            '$farmName',
            '$hashedPassword'
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