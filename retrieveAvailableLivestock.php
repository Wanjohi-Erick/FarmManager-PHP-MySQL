<?php

require "dbConn.php";
$retireve = "SELECT * FROM `crops`";
$query = mysqli_query($connect, $retireve);
if (mysqli_num_rows($query) > 0) {
    $response = "Success";
    $responseArray = array();
    while($result = mysqli_fetch_array($query)){
        $name = $result["cropName"];
        $units = $result["measurementUnit"];
        $land = $result["Land"];
        array_push($responseArray, array("serverResponse"=>$response, "name"=>$name, "units"=>$units, "land"=>$land));
    }
    
    $jencode = json_encode($responseArray);
    echo $jencode;
} else {
    $response = "Failed";
    $json = array("serverResponse" => $response);
}

?>