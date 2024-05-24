<?php 
include("../../database/database.php");

$title = trim($_POST['title']);
$message = trim($_POST['message']);


$stmt = $conn->prepare("INSERT INTO fun_facts (title,message) VALUES (?,?)");
$stmt->bind_param("ss", $title,$message);

if($stmt->execute()){



$stmt->close();
$conn->close();

echo "Message Send  !!";



}else{


    echo "Error";
}







?>