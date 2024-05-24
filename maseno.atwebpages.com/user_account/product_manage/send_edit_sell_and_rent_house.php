<?php


include('../../database/database.php');

session_start();


  
 
if(isset($_POST['country'])){


                $property_type=  trim($_POST['property_type']);
                $category= trim($_POST['category']);
                $bedroom= trim($_POST['bedroom']);
                $bathroom=  trim($_POST['bathroom']);
                $kitchen =  trim($_POST['kitchen']);
                $laundry = trim($_POST['laundry']);
                $verandah= trim($_POST['verandah']);
                $land_dimension =  trim($_POST['land_dimension']);
                $location =   trim($_POST['location']);
                $country =    trim($_POST['country']);
                $description =   trim($_POST['description']);
                $house_code=   trim($_POST['house_code']);
                $price=   trim($_POST['price']);
                $tel_phone=   trim($_POST['tel_phone']);

               

  
   
      
         

               
                    $stmt = $conn->prepare("UPDATE house SET tel_phone=?, price=?,location=? ,country=?,bedroom=?,bathroom=?,kitchen=?,verandah=?,laundry=?,description=?,property_type=?,land_dimension=?,category=? WHERE  house_code=? ");
                    $stmt->bind_param("ssssssssssssss",$tel_phone,$price,$location,$country,$bedroom,$bathroom,$kitchen,$verandah,$laundry,$description,$property_type,$land_dimension,$category,$house_code);

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
 