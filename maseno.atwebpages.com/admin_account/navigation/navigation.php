<?php 



$nav ="";




$nav .='

<button class="page_up" style=" background-color: #555;color: white;padding: 6px 6px;border: none; border-radius:20px;cursor: pointer;opacity: 0.8;position: fixed;bottom: 23px;right: 28px;width: 80px;z-index: 9;"><i class="fa fa-chevron-up" style="font-size:25px;color:white"></i> </button>



<div class=" pb-1 pt-1" style=" background-image: linear-gradient(to bottom right ,#c850c0,green);">
<button class="open_menu_button" onclick="open_menu()"><i class="fa fa-bars" style="font-size:25px"></i></button>

     <div class="menu_popup" id="menu_popup">
         <div class="menu-container text-light" style=" background-image: linear-gradient(to bottom right ,black); overflow-y: scroll; height: 510px;" >

             <button type="button"  class="cancel_menu" onclick="close_menu()" >Close</button>
                  <br>
                  <br>
            

                 <a  id="menu_items" class="text-light" href="settings/change_password.php"><i class="fa fa-lock" id ="menu_items"  style="font-size:20px ;color:yellow; margin-left:7px;"></i>Change password</a>
                 <br>
                <a  id="menu_items" class="text-light" href="land_book_request.php"><i class="fa fa-ticket" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Lands Book request</a>
                 <br>
                <a id="menu_items"  class="text-light" href="completed_land_request.php"><i class="fa fa-check-circle" id ="menu_items"  style="font-size:20px ;color:green;"></i>Lands completed request </a>
                 <br>
                 <a id="menu_items"  class="text-light" href="house_book_request.php"><i class="fa fa-ticket" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>House Book request </a>
                 <br>
                 <a id="menu_items"  class="text-light" href="completed_house_request.php"><i class="fa fa-check-circle" id ="menu_items"  style="font-size:20px ;color:green;"></i>House completed request </a>
                 <br>
                 <a id="menu_items"   class="text-light" href="notification.php"><i class="fa fa-bell-o"  id ="menu_items" style="font-size:20px ;color:yellow;"></i>Send Notifications </a>
                 <br>
                 <a id="menu_items"   class="text-light" href="message_settings/notification.php"><i class="fa fa-eye"  id ="menu_items" style="font-size:20px ;color:red;"></i>View Notifications </a>
                 <br>
                <a id="menu_items" class="text-light" href="what_is_new.php"><i class="fa fa-book" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Send What is New</a>
                  <br>
                  <a id="menu_items"   class="text-light" href="message_settings/what_is_new.php"><i class="fa fa-eye"  id ="menu_items" style="font-size:20px ;color:red;"></i>View What is New </a>
                  <br>
                <a id="menu_items" class="text-light" href="fan_facts.php" ><i class="fa fa-snowflake-o" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Send Fun facts</a>
                  <br>
                  <a id="menu_items"   class="text-light" href="message_settings/fan_facts.php"><i class="fa fa-eye"  id ="menu_items" style="font-size:20px ;color:red;"></i>View Fun facts </a>
                  <br>
                <a id="menu_items" class="text-light" href="favorite.php"><i class="fa fa-smile-o" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Send Favorite</a>
                  <br>
                  <a id="menu_items"   class="text-light" href="message_settings/favorite.php"><i class="fa fa-eye"  id ="menu_items" style="font-size:20px ;color:red;"></i>View Favorite </a>
                  <br>
                  <hr class="bg-light">
                <div style="border:1px red solid; border-radius:35px; border-top:none;border-bottom:none; " >
                <a  id="menu_items" class="text-light" href="logout/logout.php" ><i class="fa fa-sign-in" id ="menu_items"  style="font-size:20px ;color:yellow;"></i> SIGN OUT</a>
                  </div>
          </div>
          
      </div>


 <div class=" scrollmenu  d-flex justify-content-center"  style=" font-size: 10px; margin-left:20px;">
    <a  class="btn btn-outline-primary buy_house  "   href="membership_request.php" style="color:white; margin-right:10px; border-bottom:none; border-top:none; " >Requests</a><br>  
    <a  class="btn btn-outline-success sell_house  "    href="membership_approved.php" style="color:white; margin-right:10px; border-bottom:none; border-top:none; " >Approved</a>
    <a  class="btn btn-outline-danger rent_house "   href="membership_denied.php" style="color:white;margin-right:10px;border-bottom:none; border-top:none;  " >Denined</a>
 
 </div>
</div>


';








?>