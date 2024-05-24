<?php


include('../../database/database.php');

session_start();


  
 
if(isset($_POST['house_code'])){


                $house_code=  $_POST['house_code'];
              
                $username=   $_POST['username'];
                $name = $_FILES['file']['name'];
                $file_storage_location_remove = $_POST['file_storage_location'];

  
   
      
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

              
 

               
              $stmt = $conn->prepare("UPDATE house SET  file_storage_location=?  WHERE  house_code=? ");
              $stmt->bind_param("ss",$file_storage_location, $house_code);

                   

                    if($stmt->execute()){
                    unlink("../../".$file_storage_location_remove);


                    $stmt->close();
                    $conn->close();

                    echo "Upload Completed Successfully !!";
                    }else{

                        echo "Error";
                    }

                                

             }
         

       }else{
         echo "Invalid file extension.";
       }
    
   
 
   
}else{

    echo "Your Video is Not Allowed to be Uploaded It Has A Problem with Size Limit";
}
?>
 