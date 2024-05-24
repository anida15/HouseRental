<?php

include("../../database/database.php");
$id = $_POST['id'];



$delete =mysqli_query($conn,"DELETE  FROM notification WHERE id='{$id}'");

if($delete){
    echo "Delete Successfully";
}else{


    echo "Error";
}










?>