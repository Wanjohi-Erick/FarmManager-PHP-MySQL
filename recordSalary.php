<?php
    require_once("dbConn.php");
    $particulars = $_POST["Particulars"];
    $farmActivity = $_POST["FarmActivity"];
    $amount = $_POST["Amount"];
    $transactionID = $_POST["TransactionID"];
    
    $sendToDatabase = "INSERT INTO `salaries` (
        ID,
        Date,
        Particulars,
        farmActivity,
        Amount,
        transactionID
      )
        VALUES (
            NULL,
            CURRENT_TIMESTAMP,
            '$particulars',
            '$farmActivity',
            '$amount',
            '$transactionID'
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