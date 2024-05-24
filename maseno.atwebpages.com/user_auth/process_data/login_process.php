<?php

include('../../database/database.php');

 

if(isset($_POST["user_email"]))
{
	
           $user_email =trim($_POST["user_email"]);
           $user_password = trim($_POST["user_password"]);
           
       

		   $stmt = $conn -> prepare('SELECT username,first_name,last_name,email,tel_phone,password,approved FROM user_details WHERE email = ? OR username=?');
                  $stmt -> bind_param('ss', $user_email ,$user_email);
		   $stmt -> execute();
		   $stmt -> store_result();
		   $stmt -> bind_result($username,$first_name,$last_name,$email,$tel_phone,$password,$approved);
		   $stmt -> fetch();
		   
		 
		   if(password_verify($user_password, $password))
			{     session_start();
               
				$_SESSION['username'] = $username; 
				$_SESSION['first_name'] = $first_name;
				$_SESSION['last_name'] = $last_name;
				$_SESSION['email'] = $email;
				$_SESSION['tel_phone'] = $tel_phone;
				$_SESSION['approved'] = $approved;

				echo "Successfully Login !!";





			}else{


				echo "Wrong Credentials";
			}
		  
 
           
     

 
}

?>