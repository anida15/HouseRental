<?php

 include("../../database/database.php");

 $username =$_POST['username'];

 $query =mysqli_query($conn,"UPDATE membership_application SET pending_application ='0' , status ='YES' WHERE username ='{$username}'");

if($query){

 $query_user_details =mysqli_query($conn,"UPDATE user_details SET approved ='YES'   WHERE username ='{$username}'");
 if($query_user_details){
    echo "Approved";
 }else{

    echo "Error";
 }
}else{

    echo "Erro";
}





?>