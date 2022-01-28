<?php
require "dbConn.php";
$email = $_POST["Email"];
$password = $_POST["Password"];
$hashedPass = md5($password);
$retireve = "SELECT * FROM `users` WHERE `Email` = '$email'";
$query = mysqli_query($connect, $retireve);
if (mysqli_num_rows($query) > 0) {
    $responseArray = array();
    while($result = mysqli_fetch_array($query)){
        $id = $result["ID"];
        $date = $result["Registration Date"];
        $firstName = $result["First Name"];
        $lastName = $result["Last Name"];
        $email = $result["Email"];
        $phone = $result["Phone"];
        $farmName = $result["Farm Name"];
        $dbPassword = $result["Password"];
    }
    if ($hashedPass == $dbPassword) {
        array_push($responseArray, array("serverResponse" => "Login Successful", "id"=>$id, "registrationDate"=>$date, "firstName"=>$firstName, "lastName"=>$lastName, "email"=>$email, "phone"=>$phone, "farmName"=>$farmName));
    } else {
        $response = "Incorrect password";
        $json = array("serverResponse" => $response);
    }
    
    $jencode = json_encode($responseArray);
    echo $jencode;
} else {
    $response = "User does not exist";
    $json = array("serverResponse" => $response);
}

?>