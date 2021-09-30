<?php

require "dbConn.php";
$retireve = "SELECT * FROM `livestock`";
$query = mysqli_query($connect, $retireve);
if (mysqli_num_rows($query) > 0) {
    $response = "Success";
    $responseArray = array();
    while($result = mysqli_fetch_array($query)){
        $name = $result["livestockName"];
        $number = $result["Number"];
        $age = $result["Age"];
        array_push($responseArray, array("serverResponse"=>$response, "name"=>$name, "units"=>$number, "land"=>$age));
    }
    
    $jencode = json_encode($responseArray);
    echo $jencode;
} else {
    $response = "Failed";
    $json = array("serverResponse" => $response);
}

?>