<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genx Property Consultants </title>
    <link rel="icon"  href="resource/logo.jpeg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="resource/home3.js"></script>
    <link href="resource/hom.css" rel="stylesheet" >
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

include("navigation_settings/navbar.php");

echo $navigation_bar;


?>


 
<div style="width:85%; float:left;" class="bg-dark p-1 mb-3">
<span class="text-success"><strong><a href="../index.php" class="text-success">Home  </a><i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i> About Genx </strong></span>

</div>

 



<div id="alert">
 </div>
 <div class="container   " style="  clear:both;">
    
    
      
        
                <div   style="border: yellow solid 1px ;border-radius: 10px; margin-top:10px ;  background-image: linear-gradient(to bottom right ,black,green); padding:10px;">
        
          
                                  <div id="alert">
                                    
                                </div>

 
                            <div class=" d-flex justify-content-center">
                            <img  src="../resource/logo.jpeg" width="148px" height="148px"  style="border-radius:25px ; left :50%;" alt="">  
   
                             </div>
                             
 
                            <div class=" d-flex justify-content-center">
                            
                                  <span style="color:yellow" class="header_title">

                                  <span style="font-family:Cursive ;font-size:25px;"> Genx Presents </span>
                                    </span>
                             </div>
                                  <hr class="bg-light">
            
                            <div class=" text-light  justify-content-center">

<p><span style="font-size:25px ;font-family:Cursive ;">T</span>he home journey has been one riddled withy mysteries and conspiracies. From rogue agents to conniving conspirators, the experience has not been great for those seeking home ownership or good experience house hunting.
<strong class="text-warning">GENX </strong> was born out of the desire of making this experience a great one.</p>

<p>
<span style="font-size:25px ;font-family:Cursive ;">W</span>e’re creating a seamless online experience – from shopping on the largest rental network, to buying a home, to paying rent.
</p>

<p>
<span style="font-size:25px ;font-family:Cursive ;">N</span>o matter what path you take to sell your home, buy your home or rent a space we can help you navigate a successful shopping experience.</p>
<p>
<span style="font-size:25px ;font-family:Cursive ;">A</span>t GENX we will help you find your place with an immersive photo experience and a plethora of listings, including things you won’t find anywhere else.
</p>
<p class="text-center">
Welcome to GENX </p>
<p class="text-center">
<strong class="text-warning "> ‘BRINGING YOU HOME’</strong></p>

                         </div>
           
    </div>     
</div>
 

<?php
include("navigation_settings/footerbar.php");
echo $footer;

?>

<script  >


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

   
 
 
  
</script>
 


 
 
</body>
</html>