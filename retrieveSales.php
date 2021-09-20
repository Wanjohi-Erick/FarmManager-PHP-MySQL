<?php

require "dbConn.php";
$retireve = "SELECT * FROM `sales`";
$query = mysqli_query($connect, $retireve);
if (mysqli_num_rows($query) > 0) {
    $responseArray = array();
    while($result = mysqli_fetch_array($query)){
        $id = $result["ID"];
        $date = $result["Date"];
        $particulars = $result["Particulars"];
        $commodity = $result["Commodity"];
        $quantity = $result["Quantity"];
        $price = $result["Price"];
        $transactionID = $result["TransactionID"];
        $contact = $result["Contact"];
        array_push($responseArray, array("id"=>$id, "date"=>$date, "particulars"=>$particulars, "commodity"=>$commodity, "quantity"=>$quantity, "price"=>$price, "transactionID"=>$transactionID, "contact"=>$contact));
    }
    
    $jencode = json_encode($responseArray);
    echo $jencode;
} else {
    $response = "Failed";
    $json = array("serverResponse" => $response);
}

?>