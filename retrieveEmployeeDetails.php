<?php

require "dbConn.php";
$retireve = "SELECT * FROM `employees`";
$query = mysqli_query($connect, $retireve);
if (mysqli_num_rows($query) > 0) {
    $response = "Success";
    $responseArray = array();
    while($result = mysqli_fetch_array($query)){
        $ID = $result["employeeID"];
        $name = $result["employeeName"];
        $contact = $result["Contact"];
        $date = $result["dateOfEmployment"];
        array_push($responseArray, array("serverResponse"=>$response, "name"=>$name, "employeeID"=>$ID, "contact"=>$contact, "dateOfEmployment"=>$date));
    }
    
    $jencode = json_encode($responseArray);
    echo $jencode;
} else {
    $response = "Failed";
    $json = array("serverResponse" => $response);
}

?>