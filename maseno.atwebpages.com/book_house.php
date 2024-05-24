<?php
 
include("database/database.php");
$house_code =$_GET['house_code'];


$query = mysqli_query($conn,"SELECT * FROM house WHERE house_code ='{$house_code}'");

$result = mysqli_fetch_assoc($query);

 

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  href="resource/logo.jpeg">
    <title>Genx Property Consultants </title>
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



 
 
 

<div style="width:85%; float:left;" class="bg-dark p-1">
<span class="text-success"><strong><a href="../index.php" class="text-success">Home </a> <i class="fa fa-angle-double-right" style="font-size:20px;color:red"></i>Book House </strong></span>

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
                                  <h3 style="font-family:Cursive ;"> BooK Now </h3>
                         </span></div>

                         <div id="book_details" style="background-color: black; z-index: 2;position:absolute; width:85%; display:none;">

                                  <button class="close_book_details"><span style="float:right;color:red">Hide</span></button>
                                <table class="table mt-2"  >
                                <tbody>

                                <tr> 
                                <td width="50%" style="   color:white; border:white solid 1px;     font-size:13px; " class="text-center"><i class="fa fa-caret-right" style="font-size:12px;color:red"></i>   <?php echo $result['property_type']; ?></td>
                                <td width="50%" style="   color:white; border:white solid 1px;    font-size:13px; " class="text-center">Price <i class="fa fa-caret-down" style="font-size:12px;color:red"></i> <br> 
                                  <?php echo $result['price']; ?> </td>
                                </tr>

                                <tr> 
                                <td width="50%" style="   color:white; border:white solid 1px;    font-size:13px; " class="text-center"><i class="fa fa-caret-right" style="font-size:12px;color:red"></i><?php echo $result['bedroom']; ?> Bedroom </td>
                                <td width="50%" style="   color:white; border:white solid 1px;    font-size:13px; " class="text-center">location <i class="fa fa-caret-down" style="font-size:12px;color:red"></i><br>
                                <?php echo $result['location']; ?>
                                </td>
                                </tr>

                                <tr> 
                                <td width="50%" style="   color:white; border:white solid 1px;     font-size:13px; " class="text-center"><i class="fa fa-caret-down" style="font-size:12px;color:red"></i> <?php echo $result['bathroom']; ?> Bathroom </td>
                                <td width="50%" style="   color:white; border:white solid 1px;     font-size:13px; " class="text-center">House Id <i class="fa fa-caret-down" style="font-size:12px;color:red"></i><br>
                                <?php echo $result['house_code'] ?>
                               </td>
                                </tr>

                                </tbody>
                                </table>



                                </div>

                            <div class="bg-warning">
                                  <hr>
                                 
                                  </div>
                                
                                 
  

                            <div class=" d-flex justify-content-center">
                                <form style="max-width:500px;margin:auto" name="upload_house">

                               

 
                                  <div class="text-center">
                                  <span class="text-primary show_book_details"><i class="fa fa-info-circle"   style="font-size:20px ;color:yellow;"></i> Book Details</span><br>
                                 
                                  </div>
                                  <div class="bg-light">
                                  <hr>
                                 
                                  </div>
                                  
                                 
                                  <div class="text-center">
                                  <span class="text-white">Full Name </span><br>
 



                                  </div>
                                  
                                  <div class="input-container">
                                     
                                  
                                     <input class="input-field" type="text" placeholder="Full Name"  id="full_name">
                                        
                                      
  
                                     </div>
 
                                  <div class="text-center">
                                  <span class="text-white">TELPHONE NUMBER</span>

                                  </div>
                                  
                                  <div class="input-container">
                                     
                                  
                                     <input class="input-field" type="text" placeholder="TELPHONE" value="+254" id="tel_phone">
                                        
                                      
  
                                     </div>
                                     
                               
                                

                                   <div class="input-container">
                                    <button type="button" onclick="return  upload_form()" class="btn btn-success input-field text-center">Book NOW</button>
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
include("navigation_settings/footerbar.php");
echo $footer;

?>
 
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

 

 
 

function upload_form() {
     
    var fd = new FormData();
    var buyer_telphone = document.forms["upload_house"]["tel_phone"].value;
    
    var full_name =document.forms["upload_house"]["full_name"].value;
    var seller_telphone ="<?php echo $result['tel_phone']; ?>";
    var property_type = "<?php echo $result['property_type']; ?>";
    var username = "<?php echo $result['username']; ?>";
    var location = "<?php echo $result['location']; ?>";
    var price = "<?php echo $result['price']; ?>";
    var bedroom = "<?php echo $result['bedroom']; ?>";
    var country = "<?php echo $result['country']; ?>";
    var category = "<?php echo $result['category']; ?>";
    


 
    

if(full_name==""){


    var message= `
    <div id = "confirm">
    <div class = "message" style="text-align: center;">
    <span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
    <span class="text-light" style="font-size:12px;">Enter Full Name</span><br>
 
    </div>
    <button class = "yes" style="color: white;">OK</button>
    </div>`;
    
    $('#alert').html(message);
    
    functionAlert();

    return false;



}



 

if(tel_phone == ""){


var message= `
<div id = "confirm">
<div class = "message" style="text-align: center;">
<span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
<span class="text-light" style="font-size:12px;">Please Fill Telphone</span><br>

</div>
<button class = "yes" style="color: white;">OK</button>
</div>`;

$('#alert').html(message);

functionAlert();

return false;



}

 



 
 
 
			
                          fd.append('full_name',full_name);
                          fd.append('buyer_telphone',buyer_telphone);
                          fd.append('username',username);
                          fd.append('seller_telphone',seller_telphone);
                          fd.append('price',price);
                          fd.append('location',location);
                          fd.append('country',country);
                          fd.append('category',category);
                          fd.append('bedroom',bedroom);
                          fd.append('property_type',property_type);









                          

 
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
                          url: 'house_components/send_book_house.php',
                          type: 'post',
                          data: fd,
                          contentType: false,
                          processData: false,
                          success: function(response){

                          var message= `
                          <div id = "confirm">
                          <div class = "message" style="text-align: center;">
                          <span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>

                          <span class="text-light" style="font-size:12px;">`+response+`</span>
                          </div>
                          <button class = "yes" style="color: white;">OK</button>
                          </div>`;



                          $('#alert').html(message);

                          functionAlert();

                          setInterval(update,4000);
                          function update(){


                          $(".progress-bar").width('0%');
                          $(".progress-bar").html('0%');
                          document.getElementById("full_name").value = "";
                          document.getElementById("tel_phone").value = "";


 
                          }


                          },
                          });
                       
                    
                      
                    }
 
 

 

</script>

<script  >



 

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

   
    
    
    
    $(document).on('click', '.show_book_details', function(){
        document.getElementById("book_details").style.display = "block";
  
    
    });
    
 
    $(document).on('click', '.close_book_details', function(){
        document.getElementById("book_details").style.display = "none";
  
    
    });
    
  
  
</script>
 
 
</body>
</html>