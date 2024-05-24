<?php
 session_start();
include("../database/database.php");

$username =$_GET['username'];

$query =mysqli_query($conn,"SELECT * FROM user_details WHERE username='{$username}'");
$result =mysqli_fetch_assoc($query);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Genx Property Consultants</title>
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

</style>
</head>
<body>


<?php
include("user_navigation/navigation.php");
echo $navigation_bar;


?>


<div style="width:85%; float:left;" class="bg-dark p-1">
<span class="text-success"><strong><a href="index.php" class="text-success">Home</a> <i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i> User Details </strong></span>

</div>




<div class="container mt-5  mb-5 flex justify-content-center  ">



 <div class="flex justify-content-center" style="border: green solid 1px; border-radius:10px;">


 <div class="text-success m-4" > 
   
  <table class="table bg-dark" id="myTable">
  
    <tbody><tr> <td width="100%" style="text-align:center;  "><span class="text-light"> Username <i class="fa fa-caret-right" style="font-size:12px;color:white"></i> <span class="text-success"><?php echo $result['username']; ?></span></span> </td></tr>
    </tbody>
</table>
</div>




 <table class="table" id="myTable">
  
    <tbody>
      <tr style="background-image: linear-gradient(to bottom right ,green,black);">
           <td width="50%" style=" text-align:end;   ">
           <span class="text-light">First Name <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> </span>
 
           </td>
          <td width="50%"> <span class="text-warning"> <?php echo $result['first_name']; ?> </span> </td>

         
      </tr>

      <tr>
           <td width="50%" style="text-align:end;   ">
           <span class="text-dark"> Last Name <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> </span>
       
           </td>
          <td width="50%"> <span class="text-success"> <?php echo $result['last_name']; ?> </span> </td>

         
      </tr>
      <tr  style="  background-image: linear-gradient(to bottom right ,green,black);  ">
           <td width="50%" style="text-align:end;   ">
           <span class="text-light">Telphone No. <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> </span>
           
           </td>
          <td width="50%"> <a   class="text-warning" href="tel: <?php echo $result['tel_phone']; ?> "> <?php echo $result['tel_phone']; ?> </a> </td>

         
      </tr>

      <tr >
           <td width="50%" style="text-align:end;  ">
           <span class="text-dark"> Approved Status  <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> </span>
 
           </td>
          <td width="50%"> <span class="text-success"> <?php echo $result['approved']; ?> </span> </td>

         
      </tr>
      <tr  style=" background-image: linear-gradient(to bottom right ,green,black);  ">
           <td width="50%" style="text-align:center;  " colspan="2">
           <span class="text-light"> Email Address <br><i class="fa fa-caret-down" style="font-size:12px;color:red"></i> </span>
   

           </td>
          
         
      </tr>
      <tr>
      <td width="50%" colspan="2" style="text-align:center"> <a   class="text-danger" href="mailto:<?php echo $result['email']; ?>"><?php echo $result['email']; ?> </a></td>

      </tr>

      <tr  style="  background-image: linear-gradient(to bottom right ,green,black);  ">
           <td width="50%" style="text-align:end;   ">
           <span class="text-light">Registration <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> </span>
           
           </td>
          <td width="50%"> <a   class="text-warning"  > 
            
          <?php $date = $result['time_join']; 

    $newDate = date('Y-m-d H:i:s', strtotime($date. ' + 3 hours')); echo $newDate; ?> 
        
        </a> </td>

         
      </tr>
  
    </tbody>
</table>

 
</div>

</div>


<script>


$(document).ready(function(){
 fetch_house();
function fetch_house()
{ 
 $.ajax({
type: 'POST',
url: 'product_manage/fetch_sell_and_rent.php',
 success: function(response) {
 $('.diplay_house').html(response);
}
});
}

});



$(document).ready(function(){
 fetch_lands();
 function fetch_lands()
{ 
var username = "<?php echo $_SESSION['username'];?>";
  $.ajax({
type: 'POST',
url: 'product_manage/fetch_lands.php',
data:{username:username},
success: function(response) {
  $('.diplay_lands').html(response);
}
});
}

});

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
    
    
    
    
    
    
      $(document).on('click', '#view_house_photos', function(){
        
        var house_code = $(this).data('house_code');
        var username = $(this).data('username');
         window.location='view_house_photos.php?house_code='+house_code+'&username='+username; 
      });
    
    
    
    $(document).on('click', '#add_house_photo', function(){
      
      var house_code = $(this).data('house_code');
      var property_type = $(this).data('property_type');
      window.location='add_sell_house_and_rent_house_photo.php?house_code='+house_code+'&property_type='+property_type;
        
      
    });
    
    
    
    $(document).on('click', '#edit_house_post', function(){
      
      var house_code = $(this).data('house_code');
      window.location='edit_sell_and_rent_house.php?house_code='+house_code ;
    });
    
    
    
    $(document).on('click', '#edit_house_photo', function(){
    
    var house_code = $(this).data('house_code');
    var property_type = $(this).data('property_type');
    var  file_storage_location = $(this).data('file_storage_location');
    window.location='edit_photo_rent_and_sell_house.php?house_code='+house_code+'&property_type='+property_type+'&file_storage_location='+file_storage_location ;
    
    });
    
    
    
    
     $(document).on('click', '#delete_house', function(){
        
        var house_code = $(this).data('house_code');
        var file_location = $(this).data('file_location');
     $.ajax({
    type: 'POST',
    url: 'product_manage/delete_house.php',
     data:{house_code:house_code,file_location:file_location},
    
    success: function(response) {
    
      var message= `
    <div id = "confirm">
     <div class = "message" style="text-align: center;">
       <span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
      <span class="text-light" style="font-size:12px;"> `+response+`</span><br>
       </div>
     <button class = "yes" style="color: white;">OK</button>
    </div>`;
    $('#alert').html(message);
    functionAlert();
    setTimeout(redirecting, 3000);
    function redirecting() {
    location.reload();
    
    }



    }
    });
    });
    
    
    ///Lands operations 
    
    $(document).on('click', '#delete_land_post', function(){
    
    var land_code = $(this).data('land_code');
    var file_location = $(this).data('file_location');
    
    $.ajax({
    type: 'POST',
    url: 'product_manage/delete_land.php',
    data:{land_code:land_code,file_location:file_location},
     success: function(response) {

      
      var message= `
    <div id = "confirm">
     <div class = "message" style="text-align: center;">
       <span  style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
      <span class="text-light" style="font-size:12px;">`+response+`</span><br>
       </div>
     <button class = "yes" style="color: white;">OK</button>
    </div>`;
    $('#alert').html(message);
    functionAlert();
    setTimeout(redirecting, 3000);
    function redirecting() {
    location.reload();
    
    }
    
    
      
    }
    });
     
     
    });
    
    $(document).on('click', '#add_extend_land_photo', function(){
      
      var land_code = $(this).data('land_code');
      var username = $(this).data('username');
    
      window.location='add_lands_photo.php?land_code='+land_code+'&username='+username;
        
      
    });
    
    
    
    $(document).on('click', '#edit_land_post', function(){
      
      var land_code = $(this).data('land_code');
      
      window.location='edit_lands.php?land_code='+land_code ;
        
      
    });
    
    
    
    $(document).on('click', '#edit_land_photo', function(){
      
      var land_code = $(this).data('land_code');
      var  file_location = $(this).data('file_storage_location');
      
      window.location='edit_photo_land.php?land_code='+land_code+'&file_location='+file_location ;
        
      
    });
    
    $(document).on('click', '#view_land_photos', function(){
      
      var land_code = $(this).data('land_code');
      var   username= $(this).data('username');
      
      window.location='view_land_photos.php?land_code='+land_code+'&username='+username ;
        
      
    });
</script>
    
</body>
</html>