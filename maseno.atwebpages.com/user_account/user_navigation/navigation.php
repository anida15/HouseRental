<?php

include("functions/function.php");
 

$username =$_SESSION['username'];

$status_check =application_status($conn,$username);

 

$navigation_bar ='

<button class="page_up" style=" background-color: #555;color: white;padding: 6px 6px;border: none; border-radius:20px;cursor: pointer;opacity: 0.8;position: fixed;bottom: 23px;right: 28px;width: 80px;z-index: 9;"><i class="fa fa-chevron-up" style="font-size:25px;color:white"></i> </button>

<div   class="p-0" style=" background-image: linear-gradient(to bottom right ,black,green);"  >
<span   class="d-flex justify-content-center text-light" ><strong class="text-light" style="font-family:Cursive ; "><b style="font-size:35px ;">G</b>enx Property Consultants  </strong> </span>

 
  

  
</div>

<div class=" pb-1 pt-1 bg-dark"   >
<button class="open_menu_button" onclick="open_menu()"><i class="fa fa-bars" style="font-size:25px"></i></button>

     <div class="menu_popup" id="menu_popup">
         <div class="menu-container text-light" style=" background-image: linear-gradient(to bottom right ,black);">

             <button type="button"  class="cancel_menu" onclick="close_menu()" >Close</button>
                  <br>
                 <br>';

                 if( $_SESSION['approved'] ==="NO" ){

                $navigation_bar .=' <div style="border:1px red solid; border-radius:25px;" > <a id="menu_items"><i class="fa fa-certificate"  id ="menu_items" style="font-size:20px ;color:yellow;"></i>Regular </a></div>';

                
                
                 }else{
                  $navigation_bar .=' <div style="border:1px green solid; border-radius:25px;" > <a id="menu_items" ><i class="fa fa-certificate"  id ="menu_items" style="font-size:20px ;color:green;"></i>Approved </a> </div>   ';

                 }
$navigation_bar .=' <br>
                 
                <a  id="menu_items" href="change_password.php"  class="text-light" ><i class="fa fa-cogs" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Settings</a>
                <br>
                
                <a  id="menu_items"     href="view_user_details.php?username='.$username.'"  class="text-light" ><i class="fa fa-user-circle-o" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Account</a>
                <br>

 
                ';

                     if( $status_check ==="NO" ){

                     $navigation_bar .='<a  id="menu_items" class="text-light"  href="membership_application.php" ><i class="fa fa-address-card-o" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Membership</a>';
    
                    
                    
                     }
                     
                     if($status_check ==="completed"){
                      $navigation_bar .='<a  id="menu_items" class="text-success"  ><i class="fa fa-address-card-o" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Review completed</a> ';
    
                     }


                     if($status_check ==="pending"){
                        $navigation_bar .='<a  id="menu_items" class="text-danger"    ><i class="fa fa-address-card-o" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Under Review</a> ';
      
                       }



                
                
 $navigation_bar .='
 <br>
 <a  id="menu_items" class="text-light"  href="house_booking.php"><i class="fa fa-book" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Pending Booking</a>
 
 
               <br>
                <a  id="menu_items" class="text-light"  href="complete_house_booking.php"><i class="fa fa-book" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Complete Booking</a>
                
 
                 <br>
                <a  id="menu_items" class="text-light"  href="rules.php"><i class="fa fa-book" id ="menu_items"  style="font-size:20px ;color:yellow;"></i>Rules</a>
                <br>
                <hr class="bg-light">
                <div class="text-center" style="border:1px red solid; border-radius:35px; border-top:none;border-bottom:none;" >
                <a  id="menu_items" class="text-light  " href="logout/logout.php" >SIGN OUT <i class="fa fa-sign-in" id ="menu_items"  style="font-size:20px ;color:yellow;"></i></a>
                  </div>
                
 
          </div>
      </div>


      <div class="scrollmenu d-flex justify-content-end"  style=" font-size: 20px; " >

  <a  class="btn btn-outline-primary "   id="sign_out_button"  style="color:yellow; font-family:serif; " >Sign out</a>
  

</div>


 
</div>
<div id="buy_apartment_room" style=" display:none;position:absolute; top:153px; left:175px; max-width: 400px;padding: 10px; background-color: white; border-radius:5px; border:#555 solid 1px; z-index: 9;" >
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

<div class="  bg-warning  d-flex justify-content-center bg-dark "  style="border-top:1px solid white;border-bottom:1px solid white;" >


<div class=" scrollmenu  d-flex justify-content-center"  style=" font-size: 10px; margin-left:30px; ">
    <a  class="btn btn-outline-danger sell_house  "     style="color:white; margin-right:10px; border-bottom:none; border-top:none; " >Sell House</a> 
    <a  class="btn btn-outline-info rent_house  "     style="color:white; margin-right:10px; border-bottom:none; border-top:none; " >Rent House</a>
 
 
 
 </div>

</div>';

























?>