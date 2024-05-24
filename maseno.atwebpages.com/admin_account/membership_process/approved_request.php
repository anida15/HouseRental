<?php

 include("../../database/database.php");

 $username =$_POST['username'];

 $query =mysqli_query($conn,"UPDATE membership_application SET pending_application ='0'  WHERE username ='{$username}'");

if($query){
    echo "Approved";
}else{

    echo "Erro";
}





?>