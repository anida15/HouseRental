<?php


include('../database/database.php');

session_start();


  
 
if(isset($_POST['country'])){


                $type=  $_POST['type'];
                $land_dimension= $_POST['land_dimension'];
                $facilities= $_POST['facilities'];
                $location =   $_POST['location'];
                $country =    $_POST['country'];
                $username=   $_POST['username'];
                $price=   $_POST['price'];
              
                $seller_telphone= $_POST['seller_telphone'];
                $full_name= trim($_POST['full_name']);
                $buyer_telphone=   trim($_POST['buyer_telphone']);
      

  
   
      
 

         function random_strings($length_of_string){
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  
          return substr(str_shuffle($str_result),
                       0, $length_of_string);
         }
         $book_code = random_strings(10);
         $status ="NO";
         
 
                    $stmt = $conn->prepare("INSERT INTO book_land (book_code,username,seller_telphone,price,land_dimension,type,facilities,location,country, full_name, buyer_telphone,status) VALUES (?,?, ?,?, ?,?,?,?,?,?,?,?)");
                    $stmt->bind_param("ssssssssssss", $book_code,$username,$seller_telphone,$price,$land_dimension,$type,$facilities,$location,$country,$full_name,$buyer_telphone,$status);

                    if($stmt->execute()){



                    $stmt->close();
                    $conn->close();

                    echo "Booking House Completed !!";

                    }
                                

             }
     
   
 
 
?>
 