<?php

include('../../database/database.php');

session_start();

if(isset($_POST["user_email"]))
{
	
           $user_email =trim($_POST["user_email"]);
           $user_password = trim($_POST["user_password"]);
           
       

		   $stmt = $conn -> prepare('SELECT admin_email,admin_password,session FROM admin_details WHERE admin_email = ? ');
           $stmt -> bind_param('s', $user_email );
		   $stmt -> execute();
		   $stmt -> store_result();
		   $stmt -> bind_result($admin_email,$admin_password,$session);
		   $stmt -> fetch();
		   
		 
		   if(password_verify($user_password, $admin_password))
			{
               
				 
				$_SESSION['email'] = $admin_email;
				$_SESSION['session'] = $session;
				 

				echo "Successfully Login !!";





			}else{


				echo "Wrong Credentials";
			}
		  
 
           
     

 
}

?>