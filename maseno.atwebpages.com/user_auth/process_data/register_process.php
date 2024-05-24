<?php

include('../../database/database.php');

 

if(isset($_POST["user_email"]))
{
	
            function random_strings($length_of_string){
                $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        
                return substr(str_shuffle($str_result),
                            0, $length_of_string);
                }

            $username = random_strings(10);
            $fisrt_name = trim($_POST["first_name"]);
            $last_name  = trim($_POST["last_name"]);
            $user_email = trim($_POST["user_email"]);
            $user_password = trim($_POST["user_password"]);
            $tel_phone = trim($_POST["tel_phone"]);
            $user_password = password_hash($user_password, PASSWORD_DEFAULT);
            $approved ="NO";
            

           

$stmt_check = $conn -> prepare("SELECT email,tel_phone FROM user_details WHERE email= ? AND tel_phone=? ");
 
$stmt_check -> bind_param("ss", $user_email,$tel_phone);
$stmt_check -> execute();
$stmt_check -> store_result();
 
$stmt_check -> bind_result( $email,$tel_phone);

 
$stmt_check -> fetch();
$numberofrows = $stmt_check->num_rows;

 
$stmt_check -> close();
              


            if($numberofrows > 0){


                echo "Phone or Email Already Registered !!";



            }else{

 



            
        $stmt = $conn->prepare("INSERT INTO user_details (username,first_name,last_name,email,tel_phone,password,approved) VALUES ( ?, ?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$username,$fisrt_name ,$last_name,$user_email,$tel_phone,$user_password,$approved);

       if( $stmt->execute()){

         echo "Registration  Completed !!";

         $stmt->close();
         $conn->close();

       
       }else{

        echo "Registration Failed";

       }

     

    }

     

 
}

?>