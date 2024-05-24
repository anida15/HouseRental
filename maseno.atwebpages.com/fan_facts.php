<?php


$nofication ="";

include("database/database.php");

$query = mysqli_query($conn,"SELECT * FROM fun_facts  ORDER BY time_update DESC");


?>

<!DOCTYPE html>
<html>
<head>
<title>Fun Facts</title>
<meta charset="UTF-8">
<link rel="icon" href="../Glob/images/logo.png">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon"  href="resource/logo.jpeg">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../resource/home3.js"></script>
    <link href="../resource/hom.css" rel="stylesheet" >
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
 
body{
				background-color:#33475b;
				
}
</style>

<style>
       #confirm {
          position: fixed;
          z-index: 2;
          cursor: pointer;
          display: none;
          background-color: rgba(61, 203, 13, 0.935);
          border: 1px solid #aaa;
          border-radius: 5px;
          width: 350px;
          height: auto;
          left: 50%;
          right: 50%;
          margin-left: -176px;
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
<body >

<?php
include("navigation_settings/navbar.php");
echo $navigation_bar;


?>
 
<div style="width:85%;  " class="bg-dark p-1">
<span class="text-success"><strong><a href="../index.php" class="text-success">Home </a><i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i> Fun & Facts </strong> </span>

</div>
<div class="container  d-flex justify-content-center">
<div id="alert">
      </div>
      <div class="row" >
 
 <?php       
if(mysqli_num_rows($query)==0){
?>
 <table class="table" id="myTable">

<tbody><tr> <td width="100%" style="text-align:center;  "><span class="text-danger"> No Fun Facts Available</span> </td></tr>
</tbody>
</table>
  
<?php 
}else{

while($result =mysqli_fetch_assoc($query)){
?>

<div class="col-lg-12  text-center ">
<div class="card text-white bg-danger m-3 "  style="border:green solid 1px; border-radius:20px;"  >
<div class="card-header  bg-warning">GENX MESSAGE</div>
<div class="card-body">
<h5 class="card-title text-light"><?php echo $result['title']; ?> </h5>
<p class="card-text"><?php echo $result['message']; ?></p>
<p style="float:right;"><?php echo $result['time_update'] ?></p>

</div>
</div>
</div>
<?php 
}

}
     
?>
        
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
    <span class="text-light" style="font-size:12px;">Wish To Sell House  OR Lands Please Login !!</span>
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



 $(document).on('click', '.book_house', function(){
  var house_code = $(this).data('house_code');
 
  window.location='book_house.php?house_code='+house_code ;
 
 });


 $(document).on('click', '.container', function(){
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





 $(document).ready(function(){
  fetch_notification();


 function fetch_notification()
{ 
  
  $.ajax({
type: 'POST',
url: 'house_components/fetch_notification.php',

success: function(response) {


  $('.display_notification').html(response);
}
});


}

});

 </script>

 
 
</body>
</html> 
