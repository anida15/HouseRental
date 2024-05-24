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
                $username=   trim($_POST['username']);
                $price=   trim($_POST['price']);
                $tel_phone=   trim($_POST['tel_phone']);
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
 

               
                    $stmt = $conn->prepare("INSERT INTO house (house_code,username,tel_phone,price,location,country,bedroom,bathroom,kitchen,verandah,laundry,description,property_type,land_dimension,category,file_storage_location) VALUES (?,?, ?,?, ?,?,?,?,?,?,?,?,?,?,?,?)");
                    $stmt->bind_param("ssssssssssssssss",$newname,$username,$tel_phone,$price,$location,$country,$bedroom,$bathroom,$kitchen,$verandah,$laundry,$description,$property_type,$land_dimension,$category,$file_storage_location);

                    $stmt->execute();



                    $stmt->close();
                    $conn->close();

                    echo "Upload Completed Successfully !!";

                    


                                

             }
         

       }else{
         echo "Invalid file extension.";
       }
    
   
 
   
}else{

    echo "Your Video is Not Allowed to be Uploaded It Has A Problem with Size Limit";
}
?>
 