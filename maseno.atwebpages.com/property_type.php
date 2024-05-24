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


<style>
     
     body {font-family: Arial, Helvetica, sans-serif;}
     * {box-sizing: border-box;}
      
     .share-button {
       
       cursor: pointer;
       opacity: 0.8;
       position: absolute;
      
  
     }
     .fa:hover{
    opacity: 0.5;
    color: yellow;
}
     
      
     .share-popup {
      display: none;
       position: absolute;
       border: 1px solid #f1f1f1;
       z-index: 9;
     }
     
      
     .share-container {
       max-width: 400px;
       padding: 10px;
       background-color: white;
       max-height: 200px;
     }
     
  
     .share-container .btn {
       background-color: #04AA6D;
       color: white;
       padding: 5px 4px;
       border: none;
       cursor: pointer;
       width: 100%;
       margin-bottom:5px;
       opacity: 0.8;
       border:2px ;
       border-radius: 25px;
     }
     
      
     .share-container .cancel {
       background-color: #555;
     }
     
      
     .share-container .btn:hover, .share-button:hover {
       border:2px ;border-radius: 25px;
       opacity: 1;
     }
     </style>
<script>
$(document).on('click', '.share-button', function(){
  var house = $(this).data('house_land');
	 
  document.getElementById("share_place"+house).style.display = "block";
  
});

$(document).on('click', '.cancel', function(){
  var house = $(this).data('house_land');
	 
  document.getElementById("share_place"+house).style.display = "none";
  
});

</script>

</head>
<body>
<?php

include("navigation_settings/navbar.php");

echo $navigation_bar;

?>

<div style="width:85%; float:left;" class="bg-dark p-1">
<span class="text-success"><strong><a href="index.php" class="text-success">Home</a> </strong> <i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i><strong> Property  <i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i></strong> <?php echo $_GET['property']; ?></span>

</div>

<div class="search_box d-flex justify-content-end     pr-4" style="width:15%; float:right; ">
        <i class="fa fa-search  search_open pt-2"  id="search_open" style="font-size:20px;color:black ;margin-right:8px;"></i> 
        <input type="text" id="search_house_bar" style=" height:33px; width:300px; z-index: 9; border:#c850c0 solid; display:none;" placeholder="Search House">
      <i class="fa fa-close search_close pt-2 " id="search_close" style="font-size:20px;color:red ;margin-right:8px;display:none;"></i> 


</div>


<div id="alert">
 </div>


 <div class="  row diplay_house   " style=" max-width:99.9%; margin-left:-1px; clear:both;">

</div>


<?php
include("navigation_settings/footerbar.php");
echo $footer;

?>


<script >
  
   
    
      $(document).on('click', '#view_house_photos', function(){
        
        var house_code = $(this).data('house_code');
      
         window.location='view_house_photos.php?house_code='+house_code; 
      });
    
    
 
    
</script>
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
   document.getElementById("air_bnb").style.display = "none"; 
   document.getElementById("rent_house").style.display = "none";
   document.getElementById("buy_house").style.display = "none";

   document.getElementById("rent_apartment_room").style.display = "none";
   document.getElementById("rent_mansionette_room").style.display = "none";
   document.getElementById("rent_bungalow_room").style.display = "none";

   document.getElementById("buy_apartment_room").style.display = "none";
	 document.getElementById("buy_mansionette_room").style.display = "none";
	 document.getElementById("buy_bungalow_room").style.display = "none";

}

function close_menu() {
  document.getElementById("menu_popup").style.display = "none";
}
 

$(document).on('click', '#show_details', function(){
	 
  var value = $(this).data('value');
  
  document.getElementById("show_house_details_"+value).style.display = "block";
  document.getElementById("show_details_"+value).style.display = "none";

  
  
});

$(document).on('click', '#show_less', function(){
	 
   var value = $(this).data('value');
   
   document.getElementById("show_house_details_"+value).style.display = "none";
   document.getElementById("show_details_"+value).style.display = "block";
 
   
   
 });

 $(document).on('click', '.buy_house', function(){
	 document.getElementById("buy_house").style.display = "block";
   
   document.getElementById("rent_house").style.display = "none";
   document.getElementById("air_bnb").style.display = "none"; 

   document.getElementById("rent_apartment_room").style.display = "none";
   document.getElementById("rent_mansionette_room").style.display = "none";
   document.getElementById("rent_bungalow_room").style.display = "none";

   document.getElementById("buy_apartment_room").style.display = "none";
	 document.getElementById("buy_mansionette_room").style.display = "none";
	 document.getElementById("buy_bungalow_room").style.display = "none";



   
    

 });

 $(document).on('click', '.apartment_buy_rooms', function(){
	 document.getElementById("buy_apartment_room").style.display = "block";
   
   document.getElementById("rent_house").style.display = "none";
   document.getElementById("air_bnb").style.display = "none"; 

   document.getElementById("rent_apartment_room").style.display = "none";
   document.getElementById("rent_mansionette_room").style.display = "none";
   document.getElementById("rent_bungalow_room").style.display = "none";

   
	 document.getElementById("buy_mansionette_room").style.display = "none";
	 document.getElementById("buy_bungalow_room").style.display = "none";
   
    

 });

 $(document).on('click', '.mansionette_buy_rooms', function(){
	 document.getElementById("buy_mansionette_room").style.display = "block";
  
   document.getElementById("rent_house").style.display = "none";
   document.getElementById("air_bnb").style.display = "none";
   
   document.getElementById("rent_apartment_room").style.display = "none";
   document.getElementById("rent_mansionette_room").style.display = "none";
   document.getElementById("rent_bungalow_room").style.display = "none";

   document.getElementById("buy_apartment_room").style.display = "none";
   document.getElementById("buy_bungalow_room").style.display = "none";
   
    

 });

 $(document).on('click', '.bungalow_buy_rooms', function(){
	 document.getElementById("buy_bungalow_room").style.display = "block";
 
   document.getElementById("rent_house").style.display = "none";
   document.getElementById("air_bnb").style.display = "none"; 

   document.getElementById("rent_apartment_room").style.display = "none";
   document.getElementById("rent_mansionette_room").style.display = "none";
   document.getElementById("rent_bungalow_room").style.display = "none";

   document.getElementById("buy_apartment_room").style.display = "none";
	 document.getElementById("buy_mansionette_room").style.display = "none";
 
   
    

 });

 

 $(document).on('click', '.sell_house', function(){

  document.getElementById("alert").style.display = "block"; 

   document.getElementById("rent_house").style.display = "none";
   document.getElementById("buy_house").style.display = "none";
   document.getElementById("rent_house").style.display = "none";
   document.getElementById("air_bnb").style.display = "none"; 

   document.getElementById("rent_apartment_room").style.display = "none";
   document.getElementById("rent_mansionette_room").style.display = "none";
   document.getElementById("rent_bungalow_room").style.display = "none";

   document.getElementById("buy_apartment_room").style.display = "none";
	 document.getElementById("buy_mansionette_room").style.display = "none";
	 document.getElementById("buy_bungalow_room").style.display = "none";

  var message= `
  <div id = "confirm">
   <div class = "message" style="text-align: center;">
     <span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
    <span class="text-light" style="font-size:12px;">Wish To Sell House OR Lands Please Login !!</span>
    </div>
   <button class = "yes" style="color: white;">OK</button>
  </div>`;

  $('#alert').html(message);

functionAlert();

  

 });


 $(document).on('click', '.rent_house', function(){
  document.getElementById("rent_house").style.display = "block";
  
  document.getElementById("buy_house").style.display = "none";
  document.getElementById("air_bnb").style.display = "none"; 

   document.getElementById("rent_apartment_room").style.display = "none";
   document.getElementById("rent_mansionette_room").style.display = "none";
   document.getElementById("rent_bungalow_room").style.display = "none";

   document.getElementById("buy_apartment_room").style.display = "none";
	 document.getElementById("buy_mansionette_room").style.display = "none";
	 document.getElementById("buy_bungalow_room").style.display = "none";



  
  

 });

 $(document).on('click', '.apartment_rent_rooms', function(){
  document.getElementById("rent_apartment_room").style.display = "block";
  
  document.getElementById("buy_house").style.display = "none";
  document.getElementById("air_bnb").style.display = "none";

  
   document.getElementById("rent_mansionette_room").style.display = "none";
   document.getElementById("rent_bungalow_room").style.display = "none";

   document.getElementById("buy_apartment_room").style.display = "none";
	 document.getElementById("buy_mansionette_room").style.display = "none";
	 document.getElementById("buy_bungalow_room").style.display = "none";
  
  
  
  

 });
 $(document).on('click', '.mansionette_rent_rooms', function(){
  document.getElementById("rent_mansionette_room").style.display = "block";
   
  document.getElementById("buy_house").style.display = "none";
  document.getElementById("air_bnb").style.display = "none"; 

   document.getElementById("rent_apartment_room").style.display = "none";
   document.getElementById("rent_bungalow_room").style.display = "none";

   document.getElementById("buy_apartment_room").style.display = "none";
	 document.getElementById("buy_mansionette_room").style.display = "none";
	 document.getElementById("buy_bungalow_room").style.display = "none";
  
  

 });

 $(document).on('click', '.bungalow_rent_rooms', function(){
  document.getElementById("rent_bungalow_room").style.display = "block";
  
  document.getElementById("buy_house").style.display = "none";
  document.getElementById("air_bnb").style.display = "none"; 

   document.getElementById("rent_apartment_room").style.display = "none";
   document.getElementById("rent_mansionette_room").style.display = "none";
  

   document.getElementById("buy_apartment_room").style.display = "none";
	 document.getElementById("buy_mansionette_room").style.display = "none";
	 document.getElementById("buy_bungalow_room").style.display = "none";
  
  

 });

 $(document).on('click', '.air_bnb', function(){
  document.getElementById("air_bnb").style.display = "block"; 
  document.getElementById("rent_house").style.display = "none";
 
  document.getElementById("buy_house").style.display = "none";
  
   document.getElementById("rent_apartment_room").style.display = "none";
   document.getElementById("rent_mansionette_room").style.display = "none";
   document.getElementById("rent_bungalow_room").style.display = "none";

   document.getElementById("buy_apartment_room").style.display = "none";
	 document.getElementById("buy_mansionette_room").style.display = "none";
	 document.getElementById("buy_bungalow_room").style.display = "none";

   

 });

 $(document).on('click', '.diplay_house', function(){
   document.getElementById("air_bnb").style.display = "none"; 
   document.getElementById("rent_house").style.display = "none";
   document.getElementById("buy_house").style.display = "none";

   document.getElementById("rent_apartment_room").style.display = "none";
   document.getElementById("rent_mansionette_room").style.display = "none";
   document.getElementById("rent_bungalow_room").style.display = "none";

   document.getElementById("buy_apartment_room").style.display = "none";
	 document.getElementById("buy_mansionette_room").style.display = "none";
	 document.getElementById("buy_bungalow_room").style.display = "none";

   document.getElementById("menu_popup").style.display = "none";


   

 });

 $(document).on('click', '.book_house', function(){
  var house_code = $(this).data('house_code');
 
  window.location='book_house.php?house_code='+house_code ;
 
 });
 

 $(document).on('click', '.search_open', function(){
  document.getElementById("search_house_bar").style.display = "block"; 
  document.getElementById("search_close").style.display = "block"; 
  document.getElementById("search_open").style.display = "none"; 
 });


 $(document).on('click', '.search_close', function(){
  document.getElementById("search_house_bar").style.display = "none"; 
  document.getElementById("search_close").style.display = "none"; 
  document.getElementById("search_open").style.display = "block"; 
 });

 
 

$(document).ready(function(){
    $('.search_box input[type="text"]').on("keyup input", function(){
     
          
        var inputVal = $(this).val();
    $.get("house_components/search_home_page.p", {searchvalue: inputVal }).done(
               function(data){
                       
				$('.diplay_house').html(data);

            }
            
            );
            
        
    });
    
  }); 
     

 



$(document).ready(function(){
 fetch_property_type();




 function fetch_property_type()
{ var property_type="<?php echo $_GET['property']; ?>"
     
  
  $.ajax({
type: 'POST',
url: 'house_components/fetch_property_type.php',
data:{property_type:property_type },
success: function(response) {


  $('.diplay_house').html(response);
}
});


}

});



</script>


 
 
</body>
</html>