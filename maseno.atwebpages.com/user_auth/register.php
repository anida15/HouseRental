<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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

margin-bottom: 20px;
margin-top: 10px;
}

.btn {
background-color:green;
color: white;
padding: 12px;
margin-top: 10px;
cursor: pointer;
width: 300px;
border: white solid 1px  ;
border-radius: 22px;

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
                    <div style="width:85%;  " class="bg-dark p-1">
<span class="text-success"><strong><a href="../index.php" class="text-success">Home</a> <i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i> <a href="register.php" class="text-success" > Registration  </a><i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i></strong></span>

</div>



 <div class="container">
    
    <div class="row d-flex justify-content-center">

         <div class="col-lg-8" >
      
        
                <div class="mb-5" style="border: yellow solid 1px ;border-radius: 10px; margin-top:10px ; margin-bottom:10px; background-image: linear-gradient(to bottom right ,black,green);">
        
          
                                  <div id="alert">
                                    
                                </div>

 
                            <div class=" d-flex justify-content-center">

                                  <span style="color:yellow" class="header_title">
                                  <h2 style="font-family:Cursive ;"> SIGN UP</h2>
                                    </span>

                            </div>
  

                            <div class=" d-flex justify-content-center">
                                <form  style="max-width:500px;margin:auto" name="form_data">

                                  <div class="input-container">
                                      <i class="fa fa-user icon"></i>
                                      <input class="input-field" type="text" placeholder="First Name" name="first_name">
                                  </div>
                                  <div class="input-container">
                                      <i class="fa fa-user-circle-o icon"></i>
                                      <input class="input-field" type="text" placeholder="Last Name" name="last_name">
                                  </div>
                                  <div class="input-container">
                                      <i class="fa fa-envelope-o icon"></i>
                                      <input class="input-field" type="email" placeholder="Email" name="user_email">
                                  </div>
                                  <div class="input-container">
                                      <i class="fa fa-phone icon"></i>
                                      <input class="input-field" type="text" value="+254" placeholder="Telphone" name="tel_phone">
                                  </div>

                                  <div class="input-container">
                                    <i class="fa fa-lock icon"></i>
                                    <input class="input-field" type="password" placeholder="Password" name="user_password">
                                  </div>
                                  <div class="input-container">
                                    <i class="fa fa-shield icon"></i>
                                    <input class="input-field" type="password" placeholder="Confirm Password" name="confirm_password">
                                  </div>

                                    <button type="button"  onclick="return authenticate_user()"  class="btn">SUBMIT</button>
                      

                                            <div class="text-center mb-3" style="margin-top: 50px;">

                                                            <a class="txt2 text-light" href="index.php">
                                                              Have Account? Login
                                                              <i class="fa fa-sign-in m-l-5" style="color:yellow;"></i>
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
  var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
    var first_name =document.forms["form_data"]["first_name"].value;
    var last_name =document.forms["form_data"]["last_name"].value;
    var user_email =document.forms["form_data"]["user_email"].value;
    var tel_phone =document.forms["form_data"]["tel_phone"].value;
    var user_password =document.forms["form_data"]["user_password"].value;
    var confirm_password=document.forms["form_data"]["confirm_password"].value; 


              if(first_name ==""){

              var message= `
              <div id = "confirm">
              <div class = "message" style="text-align: center;">
              <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
              <span class="text-light" style="font-size:12px;">Please Enter  First Name !!</span>
              </div>
              <button class = "yes" style="color: white;">OK</button>
              </div>`;

              $('#alert').html(message);

              functionAlert();

              return false;

              }



              if(last_name ==""){

              var message= `
              <div id = "confirm">
              <div class = "message" style="text-align: center;">
              <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
              <span class="text-light" style="font-size:12px;">Please Enter  Last Name !!</span>
              </div>
              <button class = "yes" style="color: white;">OK</button>
              </div>`;

              $('#alert').html(message);

              functionAlert();

              return false;

              }



              if(user_email ==""){

              var message= `
              <div id = "confirm">
              <div class = "message" style="text-align: center;">
              <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
              <span class="text-light" style="font-size:12px;">Please Enter Email Address !!</span>
              </div>
              <button class = "yes" style="color: white;">OK</button>
              </div>`;

              $('#alert').html(message);

              functionAlert();

              return false;

              }
              if( !regEmail.test(user_email)){

                var message= `
              <div id = "confirm">
              <div class = "message" style="text-align: center;">
              <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
              <span class="text-light" style="font-size:12px;"> Wrong Email Format !!</span>
              </div>
              <button class = "yes" style="color: white;">OK</button>
              </div>`;

              $('#alert').html(message);

              functionAlert();

              return false;

           



              }




              if(tel_phone ==""){

              var message= `
              <div id = "confirm">
              <div class = "message" style="text-align: center;">
              <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
              <span class="text-light" style="font-size:12px;">Please Enter Telphone !!</span>
              </div>
              <button class = "yes" style="color: white;">OK</button>
              </div>`;

              $('#alert').html(message);

              functionAlert();

              return false;

              }




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




              if( confirm_password ==""){
              var message= `
              <div id = "confirm">
              <div class = "message" style="text-align: center;">
              <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
              <span class="text-light" style="font-size:12px;">Please Enter Confirm Password!!</span>
              </div>
              <button class = "yes" style="color: white;">OK</button>
              </div>`;

              $('#alert').html(message);

              functionAlert();

              return false;
              }





              if(user_password !== confirm_password){
              var message= `
              <div id = "confirm">
              <div class = "message" style="text-align: center;">
              <span style="color:rgba(61, 203, 13, 0.935);">CONFIRMED MESSAGE</span><br>
              <span class="text-light" style="font-size:12px;">Passwords Don't Match</span>
              </div>
              <button class = "yes" style="color: white;">OK</button>
              </div>`;

              $('#alert').html(message);

              functionAlert();

              return false;
              }






                          var fd = new FormData();
                          fd.append('first_name',first_name);
                          fd.append('last_name',last_name);
                          fd.append('user_email',user_email);
                          fd.append('tel_phone',tel_phone);
                          fd.append('user_password',user_password);

                         


                          $.ajax({
                          url: 'process_data/register_process.php',
                          type: 'post',
                          data: fd,
                          contentType: false,
                          processData: false,
                          success: function(response){

                          if(response == "Registration  Completed !!"){
                          var message= `
                          <div id = "confirm">
                          <div class = "message" style="text-align: center;">
                          <span style="color:rgba(61, 203, 13, 0.935);"><i class="fa fa-spinner  fa-spin" style="font-size:30px;color:red"></i></span><br>
                          <span class="text-light" style="font-size:12px;">Successfully Registered !!</span><br>
                          <span class="text-light" style="font-size:12px;"> Please Login!! </span>


                          </div>
                          <button class = "yes" style="color: white;">OK</button>
                          </div>`;

                          $('#alert').html(message);

                          functionAlert();
                          setTimeout(redirecting, 3000);
                          function redirecting() {

                          location.replace("index.php")

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