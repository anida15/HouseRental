<?php


include('../../database/database.php');

session_start();


  
 
if(isset($_POST['country'])){


                $facilities =  trim($_POST['facilities']);
                $price =  trim($_POST['price']);
                $type =  trim($_POST['type']);
                $tel_phone =  trim($_POST['tel_phone']);
                $land_dimension =  trim($_POST['land_dimension']);
                $location =   trim($_POST['location']);
                $country =    trim($_POST['country']);
                $description =   trim($_POST['description']);
                $username=   trim($_POST['username']);
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
 

               
                    $stmt = $conn->prepare("INSERT INTO land (land_code,type,price,facilities,land_dimension,location,country,description,username,tel_phone,file_storage_location) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                    $stmt->bind_param("sssssssssss",$rename,$type,$price,$facilities,$land_dimension,$location,$country,$description,$username,$tel_phone,$file_storage_location );

                   

                   if( $stmt->execute()){
                    $stmt->close();
                    $conn->close();

                    echo "Upload Completed Successfully !!";

                   }else{


                    echo "Erro";
                   }
                                

             }
         

       }else{
         echo "Invalid file extension.";
       }
    
   
 
   
}else{

    echo "Your Video is Not Allowed to be Uploaded It Has A Problem with Size Limit";
}
?>
 