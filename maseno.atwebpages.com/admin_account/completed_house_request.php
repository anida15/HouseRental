<?php
session_start();
include("../database/database.php");

if(!isset($_SESSION['session'])){
  header('Location:../admin_auth/index.php');
}

$query =mysqli_query($conn,"SELECT * FROM  book_house  WHERE   status ='YES'" );

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
<span class="text-success"><strong><a href="index.php" class="text-success">Home</a> <i class="fa fa-angle-double-right" style="font-size:20px;color:red"></i> Completed House Request </strong></span>

</div>




<div class="container mt-5 flex justify-content-center  ">
<div class="text-success m-4" > 
  <h6 style="text-align: center;"><u>Completed Booking House Request</u></h6>
</div>
 <div class="flex justify-content-center">

 <div id="alert">
 </div>

<table id="tableID" class="display"  >
    <thead>
        <tr class="text-primary">
           
           
            <th width="50%" style=" overflow: auto;" >Telphone</th>
            <th width="25%" >Status</th>
            <th width="25%" >Action</th>

            
        </tr>
    </thead>
    <tbody>
<?php while($result=mysqli_fetch_assoc($query)){?>
            <tr>
            
                        <td><?php  if($result['buyer_telphone']){
                        echo $result['buyer_telphone'];

                        }else{
                        echo "No PHONE";
                        } ?></td>

                    
                        <td> <button class="btn btn-outline-success " style="font-size:smaller" ><a   class="text-success"  href="view_house_request.php?book_code=<?php echo $result['book_code']; ?>" >Completed <i class="fa fa-check" style="font-size:20px;color:greeen"></i></a></button> <br> <sup style="z-index: 9; position:relative;" ><?php echo $result['time_update']; ?></sup>
                        </td>
                        <td> <button class="btn btn-danger  return_order " style="font-size:smaller"  data-book_code="<?php echo $result['book_code']; ?>">Return</button>
                        </td>

            </tr>
<?php } ?>
      </tbody>
</table> 
 
</div>

</div>


 

<script>
      $(document).ready(function() {
			$('#tableID').DataTable({ });
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
 

}

function close_menu() {
  document.getElementById("menu_popup").style.display = "none";


}
$(document).on('click', '.container', function(){
document.getElementById("menu_popup").style.display = "none";
});


$(document).on('click', '.return_order', function(){

  var book_code = $(this).data('book_code');
  
  $.ajax({
type: 'POST',
url: 'book_request/send_uncomplete_house_request.php',
data:{book_code:book_code},
success: function(response) {

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