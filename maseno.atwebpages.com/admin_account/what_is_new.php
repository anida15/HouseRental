<?php
session_start();
include("../database/database.php");
$query =mysqli_query($conn,"SELECT * FROM user_details");
if(!isset($_SESSION['session'])){
  header('Location:../admin_auth/index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin</title>
    <link rel="icon"  href="../resource/logo.jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../resource/home3.js"></script>
    <link href="../resource/hom.css" rel="stylesheet" >
    <link rel="stylesheet" href="../resource/tablecss.css" />
 
	<script type="text/javascript" src="../resource/table.js"></script>

 
	<script type="text/javascript" src="../resource/tab.js"></script>

    <style>


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
top :7%;
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
include("navigation/navigation.php");
echo $nav;


?>


<div style="width:85%; float:left;" class="bg-dark p-1">
<span class="text-success"><strong><a href="index.php" class="text-success">Home</a> <i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i>What is New </strong></span>

</div>




<div class="container mt-5 flex justify-content-center  ">
<div class="text-success m-4" > 
  <h6 style="text-align: center;"><u> SEND  WHAT IS NEW</u></h6>
</div>

<div class="row d-flex justify-content-center">

<div class="col-lg-8">


       <div style="border: yellow solid 1px ;border-radius: 10px; margin-top:10px ;  background-image: linear-gradient(to bottom right ,black,green); padding:10px;">

 
                         <div id="alert">
                           
                       </div>


                   <div class=" d-flex justify-content-center">

                   
                     <div class=" d-flex justify-content-center">
                       <form style="max-width:500px;margin:auto" name="send_message">

                       <div class="input-container">
                            <textarea style="border: white solid 1px;   height:90px;" placeholder="Title..."  class="input-field" id="title"  ></textarea>

                          </div>

 
                       <div class="input-container">
                            <textarea style="border: white solid 1px;  height:150px;" placeholder="Message..."  class="input-field" id="message"  ></textarea>

                          </div>
                       
   
                         <hr  class="bg-warning">
                         
                          <div class="input-container">
                            <input style="border: white solid 1px; color:white;"  class="input-field text-center" type="file" name="file[]" id="file" multiple>

                          </div>

                      
                       

                          <div class="input-container">
                           <button type="button" onclick="return  upload_form()" class="btn btn-success input-field text-center">SEND</button>
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

 
<script>

$(document).on('click', '.page_up', function(){
  window.scrollTo(0, 0);  
 });
 

  
function functionAlert(msg, myYes) {
    var confirmBox = $("#confirm");
    confirmBox.find(".message").text(msg);
    confirmBox.find(".yes").unbind().click(function() {
    confirmBox.hide();
    });
    confirmBox.find(".yes").click(myYes);
    confirmBox.show();
    }
function open_menu() {
   document.getElementById("menu_popup").style.display = "block";
 

}

function open_menu() {
   document.getElementById("menu_popup").style.display = "block";
 

}

function close_menu() {
  document.getElementById("menu_popup").style.display = "none";


}

 
$(document).on('click', '.container', function(){
document.getElementById("menu_popup").style.display = "none";
});

 




function upload_form() {

var title = document.forms["send_message"]["title"].value;
var message = document.forms["send_message"]["message"].value;
var files = $('#file')[0].files;





if(title ==""){

    var message= `
    <div id = "confirm">
    <div class = "message" style="text-align: center;">
    <span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
    <span class="text-light" style="font-size:12px;">Please Enter Title</span>
    </div>
    <button class = "yes" style="color: white;">OK</button>
    </div>`;



    $('#alert').html(message);

    functionAlert();


    return false;


}


if(message ==""){

var message= `
 <div id = "confirm">
 <div class = "message" style="text-align: center;">
 <span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
 <span class="text-light" style="font-size:12px;">Please Enter Message</span>
 </div>
 <button class = "yes" style="color: white;">OK</button>
 </div>`;



 $('#alert').html(message);

 functionAlert();


 return false;


}



if(files.length ==1 ){


  fd = new FormData();

fd.append('title',title);
fd.append('message',message);
fd.append('file',files[0]);


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
                          url: 'message_settings/send_what_is_new.php',
                          type: 'post',
                          data: fd,
                          contentType: false,
                          processData: false,
                          success: function(response){

                          var message= `
                          <div id = "confirm">
                          <div class = "message" style="text-align: center;">
                          <span class="text-light" style="font-size:12px;"><i class="fa fa-spinner  fa-spin" style="font-size:30px;color:red"></i></span><br>
                          <span class="text-light" style="font-size:12px;">`+response+`</span>
                          </div>
                          <button class = "yes" style="color: white;">OK</button>
                          </div>`;



                          $('#alert').html(message);

                          functionAlert();

                          setInterval(update,3000);
                          function update(){


                          $(".progress-bar").width('0%');
                          $(".progress-bar").html('0%');
                          location.reload();
                         
                        
                          }


                          },
                          });
                        }else{
                      
                      var message= `
                            <div id = "confirm">
                            <div class = "message" style="text-align: center;">
                            <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE </span><br>
                            <span class="text-light" style="font-size:12px;">Please Select One Photo !!</span>
                            </div>
                            <button class = "yes" style="color: white;">OK</button>
                            </div>`;

                        $('#alert').html(message);

                        functionAlert();
                    }
                         
                    
                       
}


</script>
    
</body>
</html>