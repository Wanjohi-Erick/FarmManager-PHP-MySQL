<?php

require "dbConn.php";
$retireve = "SELECT * FROM `sales`";
$query = mysqli_query($connect, $retireve);
if (mysqli_num_rows($query) > 0) {
    $response = "Success";
    $responseArray = array();
    while($result = mysqli_fetch_array($query)){
        $id = $result["ID"];
        $date = $result["Date"];
        $particulars = $result["Particulars"];
        $commodity = $result["Commodity"];
        $quantity = $result["Quantity"];
        $price = $result["Price"];
        array_push($responseArray, array("serverResponse"=>$response, "id"=>$id, "date"=>$date, "particulars"=>$particulars, "commodity"=>$commodity, "quantity"=>$quantity, "price"=>$price));
    }
    
    $jencode = json_encode($responseArray);
    echo $jencode;
} else {
    $response = "Failed";
    $json = array("serverResponse" => $response);
}

?>