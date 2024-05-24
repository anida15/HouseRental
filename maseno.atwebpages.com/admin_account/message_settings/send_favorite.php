<?php 
include("../../database/database.php");
$title = trim($_POST['title']);
$message =trim( $_POST['message']);
$name = $_FILES['file']['name'];

  
   
      
$target_dir = "../../upload/";
$target_file = $target_dir . $_FILES["file"]["name"];

$extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



$extensions_arr = array("jpeg","jpg","png");


if(in_array($extension,$extensions_arr) ){

  
  $randomno=rand(0,100000);

  function random_strings($length_of_string){
 $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

   return substr(str_shuffle($str_result),
                0, $length_of_string);
  }
  $str_num = random_strings(10);
  $rename=  $randomno.$str_num.date('Ymd');

  $newname =$rename.'.'.$extension;

  if(move_uploaded_file($_FILES['file']['tmp_name'],'../../upload/'.$newname)){
$file_storage_location ='upload/'.$newname;
 

$stmt = $conn->prepare("INSERT INTO favorite (title,message,file_storage_location) VALUES (?,?,?)");
$stmt->bind_param("sss", $title,$message,$file_storage_location);




if( $stmt->execute()){
    $stmt->close();
    $conn->close();

    echo " Message Send !!";

   }else{


    echo "Erro";
   }
                

}


}else{
echo "Invalid file extension.";
}








?>