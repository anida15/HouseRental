<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <link rel="icon"  href="../resource/logo.jpeg">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../resource/home3.js"></script>
<link href="../resource/hom.css" rel="stylesheet" >

<style>
 
.input-container { 
display: flex;
width: 100%;
margin-bottom: 15px;
}

.icon {
padding: 10px;
background: pink;
color: red;
margin-top: 20px;
min-width: 45px;
text-align: center;
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

margin-bottom: 30px;
margin-top: 25px;
}

.btn {
background-color:green;
color: white;
padding: 12px;
margin-top: 10px;
cursor: pointer;
width: 300px;
opacity: 0.9;
 
border: white solid 1px  ;
border-radius: 25px;

}
.btn:hover {
opacity: 0.5;
color: black;
}
.txt2:hover{
opacity: o.5;
color: yellow;
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

<div   style=" background-image: linear-gradient(to bottom right ,black,green);"  >
<span   class="d-flex justify-content-center text-light" ><strong class="text-light" style="font-family:Cursive ; "><b style="font-size:35px ;">G</b>enx Property Consultants  </strong> </span>


</div>
<div style="width:85%; float:left;" class="bg-dark p-1">
<span class="text-success"><strong><a href="../index.php" class="text-success">Home</a> <i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i> <a href="index.php" class="text-success" > Login page  </a><i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i></strong></span>

</div>



 <div class="container" style="clear:both;">
    
    <div class="row d-flex justify-content-center">

         <div class="col-lg-7" >
      
        
                <div class="mb-5" style="border: yellow solid 1px ;border-radius: 10px; margin-top:10px ;  background-image: linear-gradient(to bottom right ,black,green);">
        
          
                                  <div id="alert">
                                    
                                </div>

 
                            <div class=" d-flex justify-content-center">

                                  <span style="color:yellow" class="header_title">
                                  <h2 style="font-family:Cursive ;"> SIGN IN</h2>
                                    </span>

                            </div>
  

                            <div class=" d-flex justify-content-center">
                                <form  style="max-width:500px;margin:auto" name="form_data">

                                  <div class="input-container">
                                      <i class="fa fa-envelope-o icon"></i>
                                      <input class="input-field" type="email" placeholder="Email or Username" name="user_email">
                                  </div>

                                  <div class="input-container">
                                    <i class="fa fa-shield icon"></i>
                                    <input class="input-field" type="password" placeholder="Password" name="user_password">
                                  </div>

                                    <button type="button"  onclick="return authenticate_user()"  class="btn">LOGIN</button>
                                    <div class=" text-center"style="margin-top: 10px;">
              
                                            <span class="txt2 text-light" > WELCOME BACK</span>
                                      </div>

                                            <div class="text-center mb-3" style="margin-top: 150px;">

                                                            <a class="txt2 text-light" href="register.php">
                                                              CREATE MEMEBERSHIP ACCOUNT
                                                              <i class="fa fa-address-card m-l-5" style="color:yellow;"></i>
                                                          </a>
                                              </div>
                                </form>

                         </div>
           
             </div>
       </div>
    </div>     
</div>


<script>

  		
function functionAlert(msg, myYes) {
    var confirmBox = $("#confirm");
    confirmBox.find(".message").text(msg);
    confirmBox.find(".yes").unbind().click(function() {
       confirmBox.hide();
    });
    confirmBox.find(".yes").click(myYes);
    confirmBox.show();
 }


function authenticate_user(){

  // var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
   
    var user_email =document.forms["form_data"]["user_email"].value;
 
    var user_password =document.forms["form_data"]["user_password"].value;
   
 
              if(user_email ==""){

              var message= `
              <div id = "confirm">
              <div class = "message" style="text-align: center;">
              <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
              <span class="text-light" style="font-size:12px;">Please Enter Email or Username !!</span>
              </div>
              <button class = "yes" style="color: white;">OK</button>
              </div>`;

              $('#alert').html(message);

              functionAlert();

              return false;

              }


              // if( !regEmail.test(user_email)){

              // var message= `
              // <div id = "confirm">
              // <div class = "message" style="text-align: center;">
              // <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
              // <span class="text-light" style="font-size:12px;"> Wrong Email Format !!</span>
              // </div>
              // <button class = "yes" style="color: white;">OK</button>
              // </div>`;

              // $('#alert').html(message);

              // functionAlert();

              // return false;

              


              // }


 

              if(user_password ==""){
              var message= `
              <div id = "confirm">
              <div class = "message" style="text-align: center;">
              <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
              <span class="text-light" style="font-size:12px;">Please Enter Password!!</span>
              </div>
              <button class = "yes" style="color: white;">OK</button>
              </div>`;

              $('#alert').html(message);

              functionAlert();

              return false;
              }


 
                          var fd = new FormData();
                           
                          fd.append('user_email',user_email);
                         
                          fd.append('user_password',user_password);

                         


                          $.ajax({
                          url: 'process_data/login_process.php',
                          type: 'post',
                          data: fd,
                          contentType: false,
                          processData: false,
                          success: function(response){

                          if(response == "Successfully Login !!"){
                          var message= `
                          <div id = "confirm">
                          <div class = "message" style="text-align: center;">
                          <span class="text-light" style="font-size:12px;"><i class="fa fa-spinner  fa-spin" style="font-size:30px;color:red"></i></span><br>
                          <span class="text-light" style="font-size:12px;"> Successfully Login !! </span><br>

 


                          </div>
                          <button class = "yes" style="color: white;">OK</button>
                          </div>`;

                          $('#alert').html(message);

                          functionAlert();
                          setTimeout(redirecting, 3000);
                          function redirecting() {

                          location.replace("../user_account/index.php")

                          }



                          }else{
                          var message= `
                          <div id = "confirm">
                          <div class = "message" style="text-align: center;">
                          <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
                          <span class="text-light" style="font-size:12px;">`+response+`</span>
                          </div>
                          <button class = "yes" style="color: white;">OK</button>
                          </div>`;

                          $('#alert').html(message);

                          functionAlert();
                          return false;

                          }

                   },
                          });

  
}
</script>
    
</body>
</html>