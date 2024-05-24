<?php


include('../../database/database.php');

session_start();


  
 
if(isset($_POST['country'])){


    $price =  trim($_POST['price']);
     $type =  trim($_POST['type']);
    $facilities =  trim($_POST['facilities']);

    $tel_phone =  trim($_POST['tel_phone']);
    $land_dimension =  trim($_POST['land_dimension']);
    $location =   trim($_POST['location']);
    $country =    trim($_POST['country']);
    $description =   trim($_POST['description']);
    $username=   trim($_POST['username']);
    $land_code=   trim($_POST['land_code']);

    

  
   
      
         

               
                    $stmt = $conn->prepare("UPDATE land SET type =? ,price=?,facilities=?,tel_phone=?,land_dimension=?,location=?,country=?,description=?,username=? WHERE  land_code=? ");
                    $stmt->bind_param("ssssssssss",$type,$price,$facilities,$tel_phone,$land_dimension,$location,$country,$description,$username,$land_code);

                   if( $stmt->execute()){

                  

          
                    $stmt->close();
                    $conn->close();

                    echo "Upload Completed Successfully !!";

                }else{


                    echo "Failed";
                }

                                

         
   
 
   
}else{

    echo "Error";
}
?>
 