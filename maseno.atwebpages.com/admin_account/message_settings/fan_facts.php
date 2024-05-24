<?php
session_start();
if(!isset($_SESSION['session'])){
   header('Location:../../admin_auth/index.php');
 }

 

include("../../database/database.php");

$query = mysqli_query($conn,"SELECT * FROM fun_facts  ORDER BY time_update DESC");


?>

<!DOCTYPE html>
<html>
<head>
<title>Fun Facts</title>
<link rel="icon"  href="../../resource/logo.jpeg">
<meta charset="UTF-8">
<link rel="icon" href="../Glob/images/logo.png">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../../resource/home3.js"></script>
    <link href="../../resource/hom.css" rel="stylesheet" >
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
          background-color: #33475b;
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
<div class="card-header  bg-warning">GENX MESSAGE

<div class="d-flex justify-content-end"> 
  <button  class=" btn btn-outline-danger delete" data-id="<?php echo $result['id']; ?>"> DELETE</button> 
 </div>

</div>
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

<button class="page_up" style=" background-color: #555;color: white;padding: 10px 10px;border: none; border-radius:20px;cursor: pointer;opacity: 0.8;position: fixed;bottom: 23px;right: 28px;width: 100px;z-index: 9;">Page Up </button>


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


 
 

 
$(document).on('click', '.delete', function(){

var id = $(this).data('id');
 
$.ajax({
type: 'POST',
url: 'delete_fan_facts.php',
data:{id:id},
success: function(response) {

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
setInterval(update,1000);
function update(){
location.reload();

}
}
});

});


 </script>

 
 
</body>
</html> 
