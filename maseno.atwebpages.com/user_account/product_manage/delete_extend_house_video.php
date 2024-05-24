<?php


include("../../database/database.php");

$house_code =$_POST['house_code'];
$file_location =$_POST['file_location'];






$delete_qury = mysqli_query($conn ,"DELETE FROM house_extend_video WHERE extend_house_code ='{$house_code}'");

if($delete_qury){
    unlink("../../".$file_location);

    echo "POST DELETED";

}

















?>