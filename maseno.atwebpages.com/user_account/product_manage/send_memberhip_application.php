<?php
include("../../database/database.php");
session_start();


$email = trim($_POST['email']);
$tel_phone = trim($_POST['tel_phone']);
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$username = $_SESSION['username'];



$randomno=rand(0,100000);

function random_strings($length_of_string){
$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

 return substr(str_shuffle($str_result),
              0, $length_of_string);
}
$membership_code  = random_strings(10);

$pending_application =1;
$status ="YES";



$stmt = $conn->prepare("INSERT INTO membership_application (membership_code,username,first_name,last_name,applicant_email,applicant_phone,pending_application,status) VALUES (?,?,?, ?,?, ?,?,?)");
$stmt->bind_param("ssssssis",$membership_code,$username,$first_name,$last_name,$email,$tel_phone,$pending_application,$status);

 
if($stmt->execute()){


$stmt->close();
 

$approved ="YES";
$stmt_user =$conn->prepare("UPDATE user_details SET approved=? WHERE username=? ");
$stmt_user->bind_param("ss",$approved,$username);

if($stmt_user->execute()){
    
$stmt_user->close();
  
$conn->close();

$_SESSION['approved'] ="YES";

echo "Application Completed Please Wait For Review !!";




}




}else{


    echo "Error";
}






?>