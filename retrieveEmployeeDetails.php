<?php

$userName = $_POST["userName"];

require "dbConn.php";
$retireve = "SELECT * FROM `employees` WHERE `userName` = '$userName'";
$query = mysqli_query($connect, $retireve);
if (mysqli_num_rows($query) > 0) {
    $response = "Success";
    $responseArray = array();
    while($result = mysqli_fetch_array($query)){
        $ID = $result["employeeID"];
        $firstName = $result["firstName"];
        $lastName = $result["lastName"];
        $contact = $result["Contact"];
        $date = $result["dateOfEmployment"];
        $gender = $result["Gender"];
        $role = $result["Role"];
        $salary = $result["Salary"];
        array_push($responseArray, array("serverResponse"=>$response, "lastName"=>$lastName, "firstName"=>$firstName, "employeeID"=>$ID, "contact"=>$contact, "dateOfEmployment"=>$date, "gender"=>$gender, "role"=>$role, "salary"=>$salary));
    }
    
    $jencode = json_encode($responseArray);
    echo $jencode;
} else {
    $response = "Failed";
    $json = array("serverResponse" => $response);
}

?>