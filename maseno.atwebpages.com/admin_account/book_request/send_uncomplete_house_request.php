<?php

include("../../database/database.php");

$book_code =$_POST['book_code'];
$query =mysqli_query($conn,"UPDATE book_house SET status ='NO' WHERE book_code ='{$book_code}'");



if($query){

    echo "Order Return To Book";
}else{


    echo "Error";

}






?>