<?php
session_start();
include("../database/database.php");
$book_code =$_GET['book_code'];

$query =mysqli_query($conn,"SELECT * FROM book_land WHERE book_code='{$book_code}'");
$result =mysqli_fetch_assoc($query);

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
<span class="text-success"><strong><a href="index.php" class="text-success">Home</a> <i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i> Book Land Details </strong></span>

</div>




<div class="container mt-5 flex justify-content-center  ">



 <div class="flex justify-content-center" style="border: green solid 1px; border-radius:10px;">


 <div class="text-success m-4" > 
   
  <table class="table bg-dark" id="myTable">
  
    <tbody><tr> <td width="100%" style="text-align:center;  "><span class="text-light">Customer tel <i class="fa fa-caret-right" style="font-size:12px;color:white"></i> <span class="text-success"><?php echo $result['buyer_telphone']; ?></span> </td></tr>
    </tbody>
</table>
</div>


 <table class="table" id="myTable">
   <tbody>
      <tr style="background-image: linear-gradient(to bottom right ,green,black);">
           <td width="50%" style=" text-align:end;   ">
           <span class="text-light">Full Name <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> </span>
 
           </td>
          <td width="50%"> <span class="text-warning"> <?php echo $result['full_name']; ?> </span> </td>
        </tr> 
     </tbody>
   </table>    
</div> 
</div>

<div class="container mt-5 mb-4 flex justify-content-center  "> 


 <div class="flex justify-content-center" style="border: green solid 1px; border-radius:10px;">


 <div class="text-success m-4" >  
  <table class="table bg-dark" id="myTable"> 
    <tbody><tr> <td width="100%" style="text-align:center;  "><span class="text-light"> Seller tel <i class="fa fa-caret-right" style="font-size:12px;color:white"></i> <span class="text-success"><?php echo $result['seller_telphone']; ?></span> </td></tr>
    </tbody>
</table>
</div>


 <table class="table " id="myTable">
  
    <tbody>
      <tr style="background-image: linear-gradient(to bottom right ,green,black);">
           <td width="50%" style=" text-align:end;   ">
           <span class="text-light"> Land Price<i class="fa fa-caret-right" style="font-size:12px;color:red"></i> </span>
 
           </td>
          <td width="50%"> <span class="text-warning"> <?php echo $result['price']; ?> </span> </td>

         
      </tr>

      <tr>
           <td width="50%" style="text-align:end;   ">
           <span class="text-dark"> Land Dimension <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> </span>
       
           </td>
          <td width="50%"> <span class="text-success"> <?php echo $result['land_dimension']; ?> </span> </td>

         
      </tr>
      <tr  style="  background-image: linear-gradient(to bottom right ,green,black);  ">
           <td width="50%" style="text-align:end;   ">
           <span class="text-light"> Type Of land <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> </span>
           
           </td>
          <td width="50%"> <a   class="text-warning"  > <?php echo $result['type']; ?> </a> </td>

         
      </tr>

      <tr >
           <td width="50%" style="text-align:end;  ">
           <span class="text-dark"> Address Location  <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> </span>
 
           </td>
          <td width="50%"> <span class="text-success"> <?php echo $result[ 'location']; ?> </span> </td>

         
      </tr>
      <tr  style=" background-image: linear-gradient(to bottom right ,green,black);  ">
           <td width="50%" style="text-align:center;  " colspan="2">
           <span class="text-light"> Facilities <br><i class="fa fa-caret-down" style="font-size:12px;color:red"></i> </span>
   

           </td>
          
         
      </tr>
      <tr>
      <td width="50%" colspan="2" style="text-align:center"> <a   class="text-danger"  ><?php echo $result['facilities']; ?> </a></span> </td>

      </tr>
  
    </tbody>
</table>

 
</div>

</div>

 

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