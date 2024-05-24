<?php


include("../../database/database.php");

$land_code =$_POST['land_code'];
$file_location =$_POST['file_location'];






$delete_qury = mysqli_query($conn ,"DELETE FROM land_extend_video WHERE extend_land_code ='{$land_code}'");

if($delete_qury){
    unlink("../../".$file_location);

    echo "POST DELETED";

}

















?>