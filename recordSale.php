<?php
    require_once("dbConn.php");
    $particulars = $_POST["Particulars"];
    $commodity = $_POST["Commodity"];
    $price = $_POST["Price"];
    $quantity = $_POST["Quantity"];
    $transactionID = $_POST["TransactionID"];
    $contact = $_POST["Contact"];

    $totalPrice = $price * $quantity;

    $sendToDatabase = "INSERT INTO `sales` (
        ID,
        Date,
        Particulars,
        Commodity,
        Quantity,
        Price,
        TransactionID,
        Contact
      )
        VALUES (
            NULL,
            CURRENT_TIMESTAMP,
            '$particulars',
            '$commodity',
            '$quantity',
            '$totalPrice',
            '$transactionID',
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