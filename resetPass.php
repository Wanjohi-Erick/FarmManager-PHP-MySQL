<?php
    require "dbConn.php";

    $phone = $_POST["Phone"];
    $rawPass = $_POST["Password"];

    $password = md5($rawPass);

    $retrieveUser = "SELECT * FROM `users` WHERE `phone` = '$phone'";
    $retrieveQuery = mysqli_query($connect, $retrieveUser);
    if (mysqli_num_rows($retrieveQuery) > 0) {
        $updateUser = "UPDATE `users` SET `Password` = '$password' WHERE `Phone` = '$phone'";
        $updateQuery = mysqli_query($connect, $updateUser);

        if ($updateQuery) {
            echo "Success";
        } else {
            echo "Failed" .mysqli_error($connect);
        }
    } else {
        echo "NULL";
    }

?>