<?php

include("../../database/database.php");

$land_code =$_POST['land_code'];
$file_location =$_POST['file_location'];



$delete_qury = mysqli_query($conn ,"DELETE FROM land WHERE land_code='{$land_code}'");

if($delete_qury){

    $unlink_extended = mysqli_query($conn, "SELECT * FROM  land_extend_photos WHERE land_code ='{$land_code}' ");

    if(mysqli_num_rows($unlink_extended) >0){

        while($result =mysqli_fetch_assoc($unlink_extended)){

            unlink("../../".$result['file_storage_location']);


        }
    }
    
    $unlink_extended_video = mysqli_query($conn, "SELECT * FROM  land_extend_video WHERE land_code ='{$land_code}' ");

    if(mysqli_num_rows($unlink_extended_video) >0){

        while($result_video =mysqli_fetch_assoc($unlink_extended_video)){

            unlink("../../".$result_video['file_storage_location']);


        }
    }


    $delete_qury_e = mysqli_query($conn ,"DELETE FROM land_extend_photos WHERE land_code ='{$land_code}'");

    if($delete_qury){
 
        $delete_qury_video = mysqli_query($conn ,"DELETE FROM land_extend_video WHERE land_code ='{$land_code}'");

        if($delete_qury_video){
     
         unlink("../../".$file_location);
     
         echo "POST DELETED";
        }else{
     
     
         echo "Error";
        }
        
    }else{
 
 
     echo "Error";
    }
     

}else{


    echo "Error";
}

