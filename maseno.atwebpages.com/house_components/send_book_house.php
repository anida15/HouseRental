<?php


include('../database/database.php');

session_start();


  
 
if(isset($_POST['country'])){


                $property_type=  $_POST['property_type'];
                $category= $_POST['category'];
                $bedroom= $_POST['bedroom'];
                $location =   $_POST['location'];
                $country =    $_POST['country'];
                $username=   $_POST['username'];
                $price=   $_POST['price'];
                $bedroom= $_POST['bedroom'];
                $seller_telphone= $_POST['seller_telphone'];
                $full_name= trim($_POST['full_name']);
                $buyer_telphone=  trim( $_POST['buyer_telphone']);
      

  
   
      
 

         function random_strings($length_of_string){
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  
          return substr(str_shuffle($str_result),
                       0, $length_of_string);
         }
         $book_code = random_strings(10);
         $status ="NO";
         
 
                    $stmt = $conn->prepare("INSERT INTO book_house (book_code,username,seller_telphone,price,location,country,property ,category,bedroom, full_name, buyer_telphone,status) VALUES (?,?, ?,?, ?,?,?,?,?,?,?,?)");
                    $stmt->bind_param("ssssssssssss", $book_code,$username,$seller_telphone,$price,$location,$country,$property_type,$category,$bedroom,$full_name,$buyer_telphone,$status);

                    if($stmt->execute()){



                    $stmt->close();
                    $conn->close();

                    echo "Booking House Completed !!";

                    }
                                

             }
     
   
 
 
?>
 