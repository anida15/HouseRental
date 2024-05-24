<?php

include("../../database/database.php");
$id = $_POST['id'];

$file_location = $_POST['file_location'];

$delete =mysqli_query($conn,"DELETE  FROM what_is_new WHERE id='{$id}'");

if($delete){
    echo "Delete Successfully";
    unlink("../../".$file_location);
}else{


    echo "Error";
}


 

?>