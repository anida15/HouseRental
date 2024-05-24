<?php


 

$navigation_bar ='

  <button class="page_up" style=" background-color: #555;color: white;padding: 6px 6px;border: none; border-radius:20px;cursor: pointer;opacity: 0.8;position: fixed;bottom: 23px;right: 28px;width: 80px;z-index: 9;"><i class="fa fa-chevron-up" style="font-size:25px;color:white"></i> </button>

<div   class="p-0" style=" background-image: linear-gradient(to bottom right ,black,green);"  >
<span   class="d-flex justify-content-center text-light" ><strong class="text-light" style="font-family:Cursive ; "><b style="font-size:35px ;">G</b>enx Property Consultants  </strong> </span>

 
  

  
</div>

<div class=" pb-1 pt-1 bg-dark" >
<button class="open_menu_button" onclick="open_menu()"><i class="fa fa-bars" style="font-size:25px"></i></button>

     <div class="menu_popup" id="menu_popup">
         <div class="menu-container text-light" >

             <button type="button"  class="cancel_menu" onclick="close_menu()" >Close</button>
                  <br>
                  <br>

                <a id="menu_items" class="text-light"  href="notification.php"><i class="fa fa-bell-o"  id ="menu_items" style="font-size:20px ;color:yellow;"></i>Notifications </a>
                 <br>
     
                <a id="menu_items" class="text-light"  href="what_is_new.php" ><i class="fa fa-book" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>What is New</a>
                  <br>
                <a id="menu_items"  class="text-light" href="fan_facts.php" ><i class="fa fa-snowflake-o" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Fun facts</a>
                  <br>
                <a id="menu_items" class="text-light"  href="favorite.php" ><i class="fa fa-smile-o" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Favorite</a>
                  <br>
                <a  id="menu_items" class="text-light" href="tel:+254756405110"><i class="fa fa-phone" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Contact us </a>
                  <br>
                <a id="menu_items"  class="text-light" href="mailto:akellopatrick84@yahoo.com"><i class="fa fa-envelope-o" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Email Address </a>
                  <br>
                <a id="menu_items" class="text-light"  href="about.php" ><i class="fa fa-info-circle" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>About Us</a>
                <br>
                <hr class="bg-light">
                <div style="border:1px red solid; border-radius:35px; border-top:none;border-bottom:none;" >
                <a id="menu_items" href="user_auth/index.php"><i class="fa fa-sign-in" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>SIGN IN</a>
                </div>
          </div>
      </div>


 <div class=" scrollmenu  d-flex justify-content-center"  style=" font-size: 10px; margin-left:20px;">
    <a  class="btn btn-outline-light buy_house  "   href="#" style="color:white; margin-right:10px; border-bottom:none; border-top:none; " >Buy</a><br>
    <a  class="btn btn-outline-light sell_house  "    href="#" style="color:white; margin-right:10px; border-bottom:none; border-top:none; " >Sell</a>
    <a  class="btn btn-outline-light rent_house "   href="#" style="color:white;margin-right:10px;border-bottom:none; border-top:none;  " >Rent</a>
    <a   class="btn btn-outline-light air_bnb "  href="#" style="color:white; margin-right:10px;border-bottom:none; border-top:none; " >AIR BNB</a>
 </div>
</div>


<div id="buy_house" style=" display:none;position:absolute;    max-width: 800px;padding: 10px; background-color: white; border-radius:5px; z-index: 9; right: 52%;margin-left: -176px;margin-top: 50px;" >
 <span class="text-danger "> Buy <i class="fa fa-angle-double-down" style="font-size:20px;color:red"></i> </span> 
  <hr>
  <span><a   class="text-dark apartment_buy_rooms">Apartment <i class="fa fa-angle-double-right" style="font-size:20px;color:green"></i> </a></span> 
  <hr>
  <span><a   class="text-dark  mansionette_buy_rooms">Mansionette <i class="fa fa-angle-double-right" style="font-size:20px;color:green"></i></a></span> 
  <hr>
  <span><a   class="text-dark  bungalow_buy_rooms">Bungalow <i class="fa fa-angle-double-right" style="font-size:20px;color:green"></i></a></span>

  
<div id="buy_apartment_room" style=" display:none;position: absolute; top:153px;   width: 120px;padding: 10px; background-color: white; border-radius:5px; border:#555 solid 1px; z-index: 9;  right: -115px; margin-top: -103px;" >
  <span class="text-danger ">Apartment<i class="fa fa-angle-double-down" style="font-size:20px;color:green"></i> </span> 
  <hr>
  <span><a href="category.php?bedroom=1&category=Buy&property=Apartment" class="text-dark"> 1 bedroom </a></span> 
  <hr>
  <span><a href="category.php?bedroom=2&category=Buy&property=Apartment" class="text-dark">2 bedrooom</a></span> 
  <hr>
  <span><a href="category.php?bedroom=3&category=Buy&property=Apartment" class="text-dark"> 3 bedroom</a></span>
  <hr>
  <span><a href="category.php?bedroom=4&category=Buy&property=Apartment" class="text-dark"> 4 bedroom</a></span>
</div>



<div id="buy_mansionette_room" style=" display:none;position: absolute; top:153px;   width: 120px;padding: 10px; background-color: white; border-radius:5px; border:#555 solid 1px; z-index: 9;  right: -115px; margin-top: -45px;" >
 <span class="text-danger ">Mansionette<i class="fa fa-angle-double-down" style="font-size:20px;color:green"></i> </span> 
  <hr>
  <span><a href="category.php?bedroom=1&category=Buy&property=Mansionette" class="text-dark"> 1 bedroom </a></span> 
  <hr>
  <span><a href="category.php?bedroom=2&category=Buy&property=Mansionette" class="text-dark">2 bedrooom</a></span> 
  <hr>
  <span><a href="category.php?bedroom=3&category=Buy&property=Mansionette" class="text-dark"> 3 bedroom</a></span>
  <hr>
  <span><a href="category.php?bedroom=4&category=Buy&property=Mansionette" class="text-dark"> 4 bedroom</a></span>
</div>




<div id="buy_bungalow_room" style=" display:none;position: absolute; top:153px;   width: 120px;padding: 10px; background-color: white; border-radius:5px; border:#555 solid 1px; z-index: 9;  right: -115px; margin-top: 12px;" >
 <span class="text-danger ">Bungalow<i class="fa fa-angle-double-down" style="font-size:20px;color:green"></i> </span> 
  <hr>
  <span><a href="category.php?bedroom=1&category=Buy&property=Bungalow" class="text-dark"> 1 bedroom </a></span> 
  <hr>
  <span><a href="category.php?bedroom=2&category=Buy&property=Bungalow" class="text-dark">2 bedrooom</a></span> 
  <hr>
  <span><a href="category.php?bedroom=3&category=Buy&property=Bungalow" class="text-dark"> 3 bedroom</a></span>
  <hr>
  <span><a href="category.php?bedroom=4&category=Buy&property=Bungalow" class="text-dark"> 4 bedroom</a></span>


  
</div>



</div>




<div id="rent_house" style=" display:none;position:absolute;    max-width: 800px;padding: 10px; background-color: white; border-radius:5px; z-index: 9; right: 42%;margin-top: 50px;" >
  <span class="text-danger ">Rent <i class="fa fa-angle-double-down" style="font-size:20px;color:red"></i></span> 
  <hr>
  <span><a   class="text-dark apartment_rent_rooms">Apartment <i class="fa fa-angle-double-right" style="font-size:20px;color:green"></i></a></span> 
  <hr>
  <span><a   class="text-dark  mansionette_rent_rooms">Mansionette <i class="fa fa-angle-double-right" style="font-size:20px;color:green"></i></a></span> 
  <hr>
  <span><a   class="text-dark  bungalow_rent_rooms">Bungalow <i class="fa fa-angle-double-right" style="font-size:20px;color:green"></i></a></span>



      <div id="rent_apartment_room" style=" display:none;position:absolute;    max-width: 800px;padding: 10px; background-color: white; border-radius:5px; border:#555 solid 1px; z-index: 9; right: -110px;margin-top: -156px;" >
        <span class="text-danger ">Apartment<i class="fa fa-angle-double-down" style="font-size:20px;color:green"></i> </span> 
        <hr>
        <span><a href="category.php?bedroom=1&category=Rent&property=Apartment" class="text-dark"> 1 bedroom </a></span> 
        <hr>
        <span><a href="category.php?bedroom=2&category=Rent&property=Apartment" class="text-dark">2 bedrooom</a></span> 
        <hr>
        <span><a href="category.php?bedroom=3&category=Rent&property=Apartment" class="text-dark"> 3 bedroom</a></span>
        <hr>
        <span><a href="category.php?bedroom=4&category=Rent&property=Apartment" class="text-dark"> 4 bedroom</a></span>
      </div>


      <div id="rent_mansionette_room" style=" display:none;position:absolute;    max-width: 800px;padding: 10px; background-color: white; border-radius:5px; border:#555 solid 1px; z-index: 9; right: -118px;margin-top: -96px;" >
        <span class="text-danger ">Mansionette<i class="fa fa-angle-double-down" style="font-size:20px;color:green"></i> </span> 
        <hr>
        <span><a href="category.php?bedroom=1&category=Rent&property=Mansionette" class="text-dark"> 1 bedroom </a></span> 
        <hr>
        <span><a href="category.php?bedroom=2&category=Rent&property=Mansionette" class="text-dark">2 bedrooom</a></span> 
        <hr>
        <span><a href="category.php?bedroom=3&category=Rent&property=Mansionette" class="text-dark"> 3 bedroom</a></span>
        <hr>
        <span><a href="category.php?bedroom=4&category=Rent&property=Mansionette" class="text-dark"> 4 bedroom</a></span>
      </div>


      <div id="rent_bungalow_room" style=" display:none;position:absolute;    max-width: 800px;padding: 10px; background-color: white; border-radius:5px; border:#555 solid 1px; z-index: 9; right: -107px;margin-top: -43px;" >
        <span class="text-danger ">Bungalow<i class="fa fa-angle-double-down" style="font-size:20px;color:green"></i> </span> 
        <hr>
        <span><a href="category.php?bedroom=1&category=Rent&property=Bungalow" class="text-dark"> 1 bedroom </a></span> 
        <hr>
        <span><a href="category.php?bedroom=2&category=Rent&property=Bungalow" class="text-dark">2 bedrooom</a></span> 
        <hr>
        <span><a href="category.php?bedroom=3&category=Rent&property=Bungalow" class="text-dark"> 3 bedroom</a></span>
        <hr>
        <span><a href="category.php?bedroom=4&category=Rent&property=Bungalow" class="text-dark"> 4 bedroom</a></span>
      </div>

</div>


<div id="air_bnb" style=" display:none;position:absolute;    max-width: 800px;padding: 10px; background-color: white; border-radius:5px; z-index: 9; right: 39%;margin-top: 50px;" >
 <span class="text-danger"> AIR BNB <i class="fa fa-angle-double-down" style="font-size:20px;color:red"></i></span><br>
 <hr>
 <span><a href="air_bnb.php?bedroom=1" class="text-dark"> 1 Bedroom </a></span><br>
 <hr>
 <span><a href="air_bnb.php?bedroom=2" class="text-dark"> 2 Bedroom </a></span><br>
 <hr>
 <span><a href="air_bnb.php?bedroom=3" class="text-dark"> 3 bedroom </a> </span>
 <hr>
 <span><a href="air_bnb.php?bedroom=4" class="text-dark"> 4 bedroom </a> </span>

</div>












<div class="  bg-dark  d-flex justify-content-end "  style="border-top:1px solid white;border-bottom:1px solid white;">
<div class="scrollmenu "  style=" font-size: 20px; ">
 
  <a  class="btn btn-outline-light "   href="property_type.php?property=Apartment" style="color:white;  font-family:serif; " >Apartment</a>
  <a   class="btn btn-outline-light"  href="property_type.php?property=Mansionette" style="color:white; font-family:serif; " >Mansionette</a>
  <a   class="btn btn-outline-light"   href="property_type.php?property=Bungalow" style="color:white;  font-family:serif;" >Bungalow</a>

</div>

</div>';

























?>