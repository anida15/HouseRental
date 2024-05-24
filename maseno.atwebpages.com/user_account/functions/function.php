<?php


include("../database/database.php");

function application_status($conn,$username){


    $check =mysqli_query($conn,"SELECT * FROM membership_application WHERE username ='{$username}'");

if(mysqli_num_rows($check) >0){

    $result =mysqli_fetch_assoc($check);

    if($result['status'] == "NO"){

        return "pending";

    }else{
        return "completed";

    }



}else{

    return "NO";
}



}









?>