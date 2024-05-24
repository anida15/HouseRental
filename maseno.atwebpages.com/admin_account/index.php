<?php
session_start();
include("../database/database.php");
$query =mysqli_query($conn,"SELECT * FROM user_details");
if(!isset($_SESSION['session'])){
  header('Location:../admin_auth/index.php');
}

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

</style>
</head>
<body>


<?php
include("navigation/navigation.php");
echo $nav;


?>


<div style="width:85%; float:left;" class="bg-dark p-1">
<span class="text-success"><strong><a href="index.php" class="text-success">Home</a></strong> <i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i></span>

</div>




<div class="container mt-5 flex justify-content-center  ">
<div class="text-success m-4" > 
  <h6 style="text-align: center;"><u>GENX USERS</u></h6>
</div>
 <div class="flex justify-content-center">
<table id="tableID" class="display"  >
    <thead>
        <tr class="text-primary">
           
           
            <th>Telphone</th>
            <th>User Deatils</th>
            
        </tr>
    </thead>
    <tbody>
<?php while($result=mysqli_fetch_assoc($query)){?>
        <tr>
           
     
            <td><?php  if($result['tel_phone']){
              echo $result['tel_phone'];

            }else{
              echo "No Phone";
            } ?></td>

          
         <td> <button class="btn btn-success "><a class="text-light" href="view_users_details.php?username=<?php echo $result['username']; ?>">View details</a></button>
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
  
function open_menu() {
   document.getElementById("menu_popup").style.display = "block";
 

}

function close_menu() {
  document.getElementById("menu_popup").style.display = "none";


}

 
$(document).on('click', '.container', function(){
document.getElementById("menu_popup").style.display = "none";
});

 

</script>
    
</body>
</html>