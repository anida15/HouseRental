<?php 


session_start();
include("../../database/database.php");


$new_password =trim($_POST['new_password']);
$username= $_SESSION['username'];
$new_password = password_hash($new_password, PASSWORD_DEFAULT);



$stmt =$conn->prepare("UPDATE user_details SET password=? WHERE username=? ");
$stmt->bind_param("ss",$new_password,$username);

if($stmt->execute()){
 


    $stmt->close();
    $conn->close();

    echo "Password Updated Successfully !!";
    }else{

        echo "Error";
    }






















?>