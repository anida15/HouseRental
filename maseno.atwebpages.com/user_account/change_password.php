<?php
session_start();


if(!isset($_SESSION['username']))
{
	header("location:../index.php");
}



 if( $_SESSION['approved'] ==="NO" ){

  header("location:index.php");


 }

 if(isset($_GET['land_code'])){

    include("../database/database.php");
    $land_code =$_GET['land_code'];
    
    $fetch_query =mysqli_query($conn,"SELECT * FROM land WHERE land_code='{$land_code}'");
    $result="";
     $result =mysqli_fetch_assoc($fetch_query);
        
    
     
    
    
    
    
     }

 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genx Property Consultants </title>
    <link rel="icon"  href="../resource/logo.jpeg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../resource/home3.js"></script>
    <link href="../resource/hom.css" rel="stylesheet" >
    <style>

 
.input-container { 
display: flex;
width: 100%;
margin-bottom: 15px;
}

.icon {
padding: 10px;
 
 margin-right: 10px;
margin-top: 20px;
min-width: 50%;
 
}

.input-field {
width: 100%;
padding: 10px;
outline: none;

border: 2px;
margin-top: 20px;

}

.input-field:focus {
border: 1px solid  red;
}
.header_title{

margin-bottom: 10px;
margin-top: 10px;
}

 
 
 
.open_menu_button {
background-color: #555;
color: white;
border: none;
cursor: pointer;
opacity: 0.8;
position: absolute;
width: auto;
}

.menu_popup {
display: none;
position: fixed;
top :8%;
z-index: 9;
}

.menu-container {
max-width: 300px;
padding: 10px;
background-color: black;
border-radius:5px;

}

.menu-container .btn {
background-color: #04AA6D;
color: white;
padding: 16px 20px;
border: none;
cursor: pointer;
height: auto;
width: 100%;
margin-bottom:8px;
opacity: 0.8;
}


.menu-container .cancel_menu {
background-color: white;
border: 2px;
border-radius: 19px;
color: red;
}
.menu-container .btn:hover, .open_menu_button:hover {
opacity: 1;
color:yellow;
}
#menu_items{
padding: 10px;


}
div.scrollmenu {
overflow: auto;
white-space: nowrap;
border-top: none;
}
.contact_icon:hover{

color: blue;
}

#confirm {
position: fixed;
z-index: 2;
cursor: pointer;
display: none;
background-color: #33475b;
border: 1px solid #aaa;
border-radius: 5px;
width: 350px;
height: auto;
left: 50%;
right: 50%;
margin-left: -176px;
margin-top: 50px;
padding: 6px 8px 8px;
box-sizing: border-box;
text-align: center;
  }
#confirm button {
background-color: #255652;
display: inline-block;
border-radius: 5px;
border: 1px solid #aaa;
padding: 5px;
text-align: center;
width: 50px;
cursor: pointer;
}
#confirm .message {
text-align: left;
}



</style>

</head>
<body>

<?php

include("user_navigation/navigation.php");

echo $navigation_bar;


?>
 
<div style="width:85%; float:left;" class="bg-dark p-1">
<span class="text-success"><strong><a href="../index.php" class="text-success">Home  <i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i><a href="index.php" class="text-success"> Dashboard</a>  <i class="fa fa-angle-double-right" style="font-size:20px;color:red"></i> Password</strong></span>

</div>

 
<div id="alert">
 </div>
 <div class="container  " style="  clear:both;">
    
    <div class="row d-flex justify-content-center">

         <div class="col-lg-8">
      
        
                <div style="border: yellow solid 1px ;border-radius: 10px; margin-top:10px ;  background-image: linear-gradient(to bottom right ,black,green); padding:10px;">
        
          
                                  <div id="alert">
                                    
                                </div>

 
                            <div class=" d-flex justify-content-center">

                                  <span style="color:yellow" class="header_title">
                                  <h3 style="font-family:Cursive ;">Change Password </h3>
                         </span></div>

                            <div class="bg-warning">
                                  <hr>
                                 
                                  </div>
                                  <div class="bg-light">
                                  <hr>
                                 
                                  </div>
                                 
  

                            <div class=" d-flex justify-content-center">
                                <form style="max-width:500px;margin:auto" name="upload_house">
   
                                <div class="text-center">
                                  <span class="text-white">New Password</span>

                                  </div>
                                  
                                   <div class="input-container">
                                     
                                  
                                     <input  class="input-field "  type="password" style="width: 260px;" placeholder="New Password" id="new_password" value=""  >
                                      
                                      
                                     </select>

                                   </div>
                                   <div class="bg-warning">
                                  <hr>
                                 
                                  </div>
                                   
                                  <div class="text-center">
                                  <span class="text-white">Confirm Password</span>

                                  </div>
                                  
                                   <div class="input-container">
                                     
                                  
                                     <input  type="password" class="input-field " placeholder="Confirm Password" id="confirm_password" value=""  >
                                      
                                      
                                     </select>

                                   </div>

 
                                   <div class="input-container">
                                    <button type="button" onclick="return  upload_form()" class="btn btn-success input-field text-center">Upload Details</button>
                                   </div>
                                    <div class="progress mt-3">
                                                   <div class="progress-bar"></div>
                                                     </div>
                                          
                                </form>

                         </div>
           
             </div>
       </div>
    </div>     
</div>
 

<?php
include("user_navigation/footer.php");
echo $footer;

?>

 
<script>

$(document).on('click', '.page_up', function(){
  window.scrollTo(0, 0);  
 });

 

function upload_form() {

     
    var new_password =document.forms["upload_house"]["new_password"].value;
    var confirm_password =document.forms["upload_house"]["confirm_password"].value;
 
 
 if(new_password ==""){

    var message= `
    <div id = "confirm">
    <div class = "message" style="text-align: center;">
    <span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
    <span class="text-light" style="font-size:12px;">Fill New Password</span><br>
  
    </div>
    <button class = "yes" style="color: white;">OK</button>
    </div>`;
    
    $('#alert').html(message);
    
    functionAlert();
    return false;
 }


 if(confirm_password ==""){

var message= `
<div id = "confirm">
<div class = "message" style="text-align: center;">
<span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
<span class="text-light" style="font-size:12px;">Fill Confirm Password</span><br>

</div>
<button class = "yes" style="color: white;">OK</button>
</div>`;

$('#alert').html(message);

functionAlert();
return false;
}




if(new_password !== confirm_password){

var message= `
<div id = "confirm">
<div class = "message" style="text-align: center;">
<span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
<span class="text-light" style="font-size:12px;">Password Don't Match</span><br>

</div>
<button class = "yes" style="color: white;">OK</button>
</div>`;

$('#alert').html(message);

functionAlert();
return false;
}
 
			
                          fd = new FormData();
                          fd.append('new_password',new_password);
                          
           
                          $.ajax({xhr: function() {
                          var xhr = new window.XMLHttpRequest();
                          xhr.upload.addEventListener("progress", function(evt) {
                          if (evt.lengthComputable) {
                          var percentComplete = ((evt.loaded / evt.total) * 100);
                          $(".progress-bar").width(percentComplete + '%');
                          $(".progress-bar").html(percentComplete+'%');
                          }
                          }, false);
                          return xhr;
                          },
                          beforeSend: function(){
                          $(".progress-bar").width('0%');

                          },
                          url: 'product_manage/send_change_password.php',
                          type: 'post',
                          data: fd,
                          contentType: false,
                          processData: false,
                          success: function(response){

                          var message= `
                          <div id = "confirm">
                          <div class = "message" style="text-align: center;">
                          <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
                          <span class="text-light" style="font-size:12px;">`+response+`</span>
                          </div>
                          <button class = "yes" style="color: white;">OK</button>
                          </div>`;



                          $('#alert').html(message);

                          functionAlert();

                          setInterval(update,5000);
                          function update(){


                          $(".progress-bar").width('0%');
                          $(".progress-bar").html('0%');


                          setInterval(success,3000);
                          function success(){
                          location.reload();


                          }
                          }


                          },
                          });
                       
                    
                      
                    }
 
 

 

</script>


<script  >
  function functionAlert(msg, myYes) {
    var confirmBox = $("#confirm");
    confirmBox.find(".message").text(msg);
    confirmBox.find(".yes").unbind().click(function() {
    confirmBox.hide();
    });
    confirmBox.find(".yes").click(myYes);
    confirmBox.show();
    }
    
    $(document).on('click', '#sign_out_button', function(){
      document.getElementById("menu_popup").style.display = "block";
    
    });

    function open_menu() {
    document.getElementById("menu_popup").style.display = "block";
    
    }
    
    function close_menu() {
    document.getElementById("menu_popup").style.display = "none";
    
    
    }
    
    $(document).on('click', '.diplay_house', function(){
      document.getElementById("menu_popup").style.display = "none";
    
    });

    

    $(document).on('click', '.container', function(){
      document.getElementById("menu_popup").style.display = "none";
    
    });

   
    
    
    
    $(document).on('click', '.sell_house', function(){
    var approved = "<?php echo $_SESSION['approved'];?>";
    if(approved =="NO"){
    
    var message= `
    <div id = "confirm">
    <div class = "message" style="text-align: center;">
    <span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
    <span class="text-light" style="font-size:12px;">Access Denied !!</span><br>
       <p class="text-light" style="font-size:12px;">Provide Details On  Membership Located On Menu </p>
    </div>
    <button class = "yes" style="color: white;">OK</button>
    </div>`;
    
    $('#alert').html(message);
    
    functionAlert();
    
    }else{
    location.replace("upload_sell_house_and_rent_house.php")
    
    }
    
    });
    
    
    
    $(document).on('click', '.sell_land', function(){
    var approved = "<?php echo $_SESSION['approved'];?>";
    if(approved =="NO"){
    
    var message= `
    <div id = "confirm">
     <div class = "message" style="text-align: center;">
       <span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
      <span class="text-light" style="font-size:12px;">Access Denied !!</span><br>
         <p class="text-light" style="font-size:12px;">Provide Details On  Membership Located On Menu </p>
      </div>
     <button class = "yes" style="color: white;">OK</button>
    </div>`;
    
    $('#alert').html(message);
    
    functionAlert();
    
    }else{
      location.replace("upload_lands.php")
    
    }
    });
    
    
    
    $(document).on('click', '.rent_house', function(){
    var approved = "<?php echo $_SESSION['approved'];?>";
    if(approved =="NO"){
    var message= `
    <div id = "confirm">
     <div class = "message" style="text-align: center;">
       <span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
      <span class="text-light" style="font-size:12px;">Access Denied !!</span><br>
         <p class="text-light" style="font-size:12px;">Provide Details On  Membership Located On Menu </p>
      </div>
     <button class = "yes" style="color: white;">OK</button>
    </div>`;
    
    $('#alert').html(message);
    
    functionAlert();
    
    }else{
      location.replace("upload_sell_house_and_rent_house.php")
    
    }
    });
    
  
</script>


 
 
</body>
</html>