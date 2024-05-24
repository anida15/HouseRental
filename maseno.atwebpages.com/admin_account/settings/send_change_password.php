<?php
session_start();
include("../../database/database.php");

$new_password = trim($_POST['new_password']);
$new_password = password_hash($new_password,PASSWORD_DEFAULT);

$email = $_SESSION['email'];

$query = mysqli_query($conn,"UPDATE admin_details SET admin_password ='{$new_password}' WHERE admin_email='{$email}'");


if($query){

    echo "Paassword Change Successfully";
}else{

    echo "Error";
}







?>