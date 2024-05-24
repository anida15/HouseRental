<?php
session_start();


if(!isset($_SESSION['username']))
{
	header("location:../index.php");
}


 if( $_SESSION['approved'] ==="NO" ){

  header("location:index.php");


 }

 if(isset($_GET['house_code'])){

include("../database/database.php");
$house_code =$_GET['house_code'];

$fetch_query =mysqli_query($conn,"SELECT * FROM house WHERE house_code='{$house_code}'");
$result="";
 $result =mysqli_fetch_assoc($fetch_query);
    

 




 }

 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genx Property Consultants </title>
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
 
 margin-right: 10px;
margin-top: 20px;
min-width: 50%;
 
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

margin-bottom: 10px;
margin-top: 10px;
}

 
 
 
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

</head>
<body>

<?php

include("user_navigation/navigation.php");

echo $navigation_bar;


?>



  
<div style="width:85%; float:left;" class="bg-dark p-1">
<span class="text-success"><strong><a href="../index.php" class="text-success">Home  <i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i><a href="index.php" class="text-success"> Dashboard</a> <i class="fa fa-angle-double-right" style="font-size:20px;color:red"></i> Edit <?php echo $result['property_type']; ?> </strong></span>

</div>

 



<div id="alert">
 </div>
 <div class="container  " style="  clear:both;">
    
    <div class="row d-flex justify-content-center">

         <div class="col-lg-8">
      
        
                <div style="border: yellow solid 1px ;border-radius: 10px; margin-top:10px ;  background-image: linear-gradient(to bottom right ,black,green); padding:10px;">
        
          
                                  <div id="alert">
                                    
                                </div>

 
                            <div class=" d-flex justify-content-center">

                                  <span style="color:yellow" class="header_title">
                                  <h3 style="font-family:Cursive ;"> Update Details </h3>
                         </span></div>

                            <div class="bg-warning">
                                  <hr>
                                 
                                  </div>
                                  <div class="bg-light">
                                  <hr>
                                 
                                  </div>
                                 
  

                            <div class=" d-flex justify-content-center">
                                <form style="max-width:500px;margin:auto" name="upload_house">


 
                                  <div class="text-center">
                                  <span class="text-white">PROPERTY TYPE </span>

                                  </div>

                               
                                  
                                   <div class="input-container">
                                     
                                  
                                     <select class="input-field text-center" id="property_type" >
                                      <option value="<?php echo $result['property_type']; ?>"> <?php echo $result['property_type']; ?></option>
                                      <option value="Apartment">Apartment</option>
                                      <option value="Mansionette">Mansionette</option>
                                      <option value="Bungalow">Bungalow</option>
                                     
                                     </select>

                                   </div>
 
                                   <div class="bg-warning">
                                  <hr>
                                 
                                  </div>
                                  <div class="text-center">
                                  <span class="text-white">CATEGORY</span>

                                  </div>
                                  
                                   <div class="input-container">
                                     
                                  
                                     <select class="input-field text-center" id="category"  >
                                      <option value="<?php echo $result['category']; ?>"><?php echo $result['category']; ?></option>
                                      <option value="BUY">SELL</option>
                                      <option value="RENT">RENT</option>
                                      
                                     </select>

                                   </div>

                                   
                                   <div class="bg-warning">
                                  <hr>
                                 
                                  </div>
                                  <div class="text-center">
                                  <span class="text-white">HOUSE PRICE</span>

                                  </div>
                                  
                                   <div class="input-container">
              
                                   <input class="input-field" type="text" placeholder="Enter Price" value="Ksh " id="price">
                                      
                                     </select>

                                   </div>

                                   <div class="bg-warning">
                                  <hr>
                                 
                                  </div>
                                  <div class="text-center">
                                  <span class="text-white">BUSINESS CONTACT</span>

                                  </div>
                                  
                                   <div class="input-container">
              
                                   <input class="input-field" type="text" placeholder="TELPHONE" value="+254" id="tel_phone">
                                      
                                     </select>

                                   </div>

                                   <div class="bg-warning">
                                  <hr>
                                 
                                  </div>
                                  <div class="text-center">
                                  <span class="text-white">CHARACTERISTICS</span>

                                  </div>
                                  
                                  

                                  <div class="input-container">
                                    
                                  <input class=" icon" placeholder=" BEDROOM COUNT" value="<?php echo $result['bedroom']; ?>" type="number" id="bedroom">


                                      <input class="input-field" type="number" value="<?php echo $result['bathroom']; ?>" placeholder="BATHROOM COUNT" id="bathroom">
                                  </div>
 

                                  <div class="input-container">
                                  <input class="icon" placeholder="kITCHEN COUNT" value="<?php echo $result['kitchen']; ?>" type="number" id="kitchen">


                                      <input class="input-field" type="number" value="<?php echo $result['laundry']; ?>" placeholder="lAUNDRY COUNT" id="laundry">
                                  </div>

 

                                  <div class="input-container">
                                    <input class="icon" placeholder="VERANDAH COUNT" value="<?php echo $result['verandah']; ?>" type="number" id="verandah">
                                    <input class="input-field" type="text" value="<?php echo $result['land_dimension']; ?>" placeholder="LAND DIMENSION" id="land_dimension">
                                  </div>


                                  <div class="bg-warning">
                                  <hr>
                                 
                                  </div>
                                  <div class="text-center">
                                  <span class="text-white"> ADDRESS LOCATION</span><br>
                                  <span class="text-danger"> location : Town ,area,  </span>


                                  </div>

                                  <div class="input-container">
                                    <input class="  icon" placeholder="Location" value="<?php echo $result['location']; ?>" id="location">
                                            
                                    <select class="input-field text-center" id="country">
                                          <option value="<?php echo $result['country']; ?>"><?php echo $result['country']; ?></option>
                                          <option value="Afganistan">Afghanistan</option>
                                          <option value="Albania">Albania</option>
                                          <option value="Algeria">Algeria</option>
                                          <option value="American Samoa">American Samoa</option>
                                          <option value="Andorra">Andorra</option>
                                          <option value="Angola">Angola</option>
                                          <option value="Anguilla">Anguilla</option>
                                          <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                          <option value="Argentina">Argentina</option>
                                          <option value="Armenia">Armenia</option>
                                          <option value="Aruba">Aruba</option>
                                          <option value="Australia">Australia</option>
                                          <option value="Austria">Austria</option>
                                          <option value="Azerbaijan">Azerbaijan</option>
                                          <option value="Bahamas">Bahamas</option>
                                          <option value="Bahrain">Bahrain</option>
                                          <option value="Bangladesh">Bangladesh</option>
                                          <option value="Barbados">Barbados</option>
                                          <option value="Belarus">Belarus</option>
                                          <option value="Belgium">Belgium</option>
                                          <option value="Belize">Belize</option>
                                          <option value="Benin">Benin</option>
                                          <option value="Bermuda">Bermuda</option>
                                          <option value="Bhutan">Bhutan</option>
                                          <option value="Bolivia">Bolivia</option>
                                          <option value="Bonaire">Bonaire</option>
                                          <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                          <option value="Botswana">Botswana</option>
                                          <option value="Brazil">Brazil</option>
                                          <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                          <option value="Brunei">Brunei</option>
                                          <option value="Bulgaria">Bulgaria</option>
                                          <option value="Burkina Faso">Burkina Faso</option>
                                          <option value="Burundi">Burundi</option>
                                          <option value="Cambodia">Cambodia</option>
                                          <option value="Cameroon">Cameroon</option>
                                          <option value="Canada">Canada</option>
                                          <option value="Canary Islands">Canary Islands</option>
                                          <option value="Cape Verde">Cape Verde</option>
                                          <option value="Cayman Islands">Cayman Islands</option>
                                          <option value="Central African Republic">Central African Republic</option>
                                          <option value="Chad">Chad</option>
                                          <option value="Channel Islands">Channel Islands</option>
                                          <option value="Chile">Chile</option>
                                          <option value="China">China</option>
                                          <option value="Christmas Island">Christmas Island</option>
                                          <option value="Cocos Island">Cocos Island</option>
                                          <option value="Colombia">Colombia</option>
                                          <option value="Comoros">Comoros</option>
                                          <option value="Congo">Congo</option>
                                          <option value="Cook Islands">Cook Islands</option>
                                          <option value="Costa Rica">Costa Rica</option>
                                          <option value="Cote DIvoire">Cote D'Ivoire</option>
                                          <option value="Croatia">Croatia</option>
                                          <option value="Cuba">Cuba</option>
                                          <option value="Curaco">Curacao</option>
                                          <option value="Cyprus">Cyprus</option>
                                          <option value="Czech Republic">Czech Republic</option>
                                          <option value="Denmark">Denmark</option>
                                          <option value="Djibouti">Djibouti</option>
                                          <option value="Dominica">Dominica</option>
                                          <option value="Dominican Republic">Dominican Republic</option>
                                          <option value="East Timor">East Timor</option>
                                          <option value="Ecuador">Ecuador</option>
                                          <option value="Egypt">Egypt</option>
                                          <option value="El Salvador">El Salvador</option>
                                          <option value="Equatorial Guinea">Equatorial Guinea</option>
                                          <option value="Eritrea">Eritrea</option>
                                          <option value="Estonia">Estonia</option>
                                          <option value="Ethiopia">Ethiopia</option>
                                          <option value="Falkland Islands">Falkland Islands</option>
                                          <option value="Faroe Islands">Faroe Islands</option>
                                          <option value="Fiji">Fiji</option>
                                          <option value="Finland">Finland</option>
                                          <option value="France">France</option>
                                          <option value="French Guiana">French Guiana</option>
                                          <option value="French Polynesia">French Polynesia</option>
                                          <option value="French Southern Ter">French Southern Ter</option>
                                          <option value="Gabon">Gabon</option>
                                          <option value="Gambia">Gambia</option>
                                          <option value="Georgia">Georgia</option>
                                          <option value="Germany">Germany</option>
                                          <option value="Ghana">Ghana</option>
                                          <option value="Gibraltar">Gibraltar</option>
                                          <option value="Great Britain">Great Britain</option>
                                          <option value="Greece">Greece</option>
                                          <option value="Greenland">Greenland</option>
                                          <option value="Grenada">Grenada</option>
                                          <option value="Guadeloupe">Guadeloupe</option>
                                          <option value="Guam">Guam</option>
                                          <option value="Guatemala">Guatemala</option>
                                          <option value="Guinea">Guinea</option>
                                          <option value="Guyana">Guyana</option>
                                          <option value="Haiti">Haiti</option>
                                          <option value="Hawaii">Hawaii</option>
                                          <option value="Honduras">Honduras</option>
                                          <option value="Hong Kong">Hong Kong</option>
                                          <option value="Hungary">Hungary</option>
                                          <option value="Iceland">Iceland</option>
                                          <option value="India">India</option>
                                          <option value="Indonesia">Indonesia</option>
                                          <option value="Iran">Iran</option>
                                          <option value="Iraq">Iraq</option>
                                          <option value="Ireland">Ireland</option>
                                          <option value="Isle of Man">Isle of Man</option>
                                          <option value="Israel">Israel</option>
                                          <option value="Italy">Italy</option>
                                          <option value="Jamaica">Jamaica</option>
                                          <option value="Japan">Japan</option>
                                          <option value="Jordan">Jordan</option>
                                          <option value="Kazakhstan">Kazakhstan</option>
                                          <option value="Kenya">Kenya</option>
                                          <option value="Kiribati">Kiribati</option>
                                          <option value="Korea North">Korea North</option>
                                          <option value="Korea Sout">Korea South</option>
                                          <option value="Kuwait">Kuwait</option>
                                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                                          <option value="Laos">Laos</option>
                                          <option value="Latvia">Latvia</option>
                                          <option value="Lebanon">Lebanon</option>
                                          <option value="Lesotho">Lesotho</option>
                                          <option value="Liberia">Liberia</option>
                                          <option value="Libya">Libya</option>
                                          <option value="Liechtenstein">Liechtenstein</option>
                                          <option value="Lithuania">Lithuania</option>
                                          <option value="Luxembourg">Luxembourg</option>
                                          <option value="Macau">Macau</option>
                                          <option value="Macedonia">Macedonia</option>
                                          <option value="Madagascar">Madagascar</option>
                                          <option value="Malaysia">Malaysia</option>
                                          <option value="Malawi">Malawi</option>
                                          <option value="Maldives">Maldives</option>
                                          <option value="Mali">Mali</option>
                                          <option value="Malta">Malta</option>
                                          <option value="Marshall Islands">Marshall Islands</option>
                                          <option value="Martinique">Martinique</option>
                                          <option value="Mauritania">Mauritania</option>
                                          <option value="Mauritius">Mauritius</option>
                                          <option value="Mayotte">Mayotte</option>
                                          <option value="Mexico">Mexico</option>
                                          <option value="Midway Islands">Midway Islands</option>
                                          <option value="Moldova">Moldova</option>
                                          <option value="Monaco">Monaco</option>
                                          <option value="Mongolia">Mongolia</option>
                                          <option value="Montserrat">Montserrat</option>
                                          <option value="Morocco">Morocco</option>
                                          <option value="Mozambique">Mozambique</option>
                                          <option value="Myanmar">Myanmar</option>
                                          <option value="Nambia">Nambia</option>
                                          <option value="Nauru">Nauru</option>
                                          <option value="Nepal">Nepal</option>
                                          <option value="Netherland Antilles">Netherland Antilles</option>
                                          <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                          <option value="Nevis">Nevis</option>
                                          <option value="New Caledonia">New Caledonia</option>
                                          <option value="New Zealand">New Zealand</option>
                                          <option value="Nicaragua">Nicaragua</option>
                                          <option value="Niger">Niger</option>
                                          <option value="Nigeria">Nigeria</option>
                                          <option value="Niue">Niue</option>
                                          <option value="Norfolk Island">Norfolk Island</option>
                                          <option value="Norway">Norway</option>
                                          <option value="Oman">Oman</option>
                                          <option value="Pakistan">Pakistan</option>
                                          <option value="Palau Island">Palau Island</option>
                                          <option value="Palestine">Palestine</option>
                                          <option value="Panama">Panama</option>
                                          <option value="Papua New Guinea">Papua New Guinea</option>
                                          <option value="Paraguay">Paraguay</option>
                                          <option value="Peru">Peru</option>
                                          <option value="Phillipines">Philippines</option>
                                          <option value="Pitcairn Island">Pitcairn Island</option>
                                          <option value="Poland">Poland</option>
                                          <option value="Portugal">Portugal</option>
                                          <option value="Puerto Rico">Puerto Rico</option>
                                          <option value="Qatar">Qatar</option>
                                          <option value="Republic of Montenegro">Republic of Montenegro</option>
                                          <option value="Republic of Serbia">Republic of Serbia</option>
                                          <option value="Reunion">Reunion</option>
                                          <option value="Romania">Romania</option>
                                          <option value="Russia">Russia</option>
                                          <option value="Rwanda">Rwanda</option>
                                          <option value="St Barthelemy">St Barthelemy</option>
                                          <option value="St Eustatius">St Eustatius</option>
                                          <option value="St Helena">St Helena</option>
                                          <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                          <option value="St Lucia">St Lucia</option>
                                          <option value="St Maarten">St Maarten</option>
                                          <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                          <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                          <option value="Saipan">Saipan</option>
                                          <option value="Samoa">Samoa</option>
                                          <option value="Samoa American">Samoa American</option>
                                          <option value="San Marino">San Marino</option>
                                          <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                          <option value="Saudi Arabia">Saudi Arabia</option>
                                          <option value="Senegal">Senegal</option>
                                          <option value="Serbia">Serbia</option>
                                          <option value="Seychelles">Seychelles</option>
                                          <option value="Sierra Leone">Sierra Leone</option>
                                          <option value="Singapore">Singapore</option>
                                          <option value="Slovakia">Slovakia</option>
                                          <option value="Slovenia">Slovenia</option>
                                          <option value="Solomon Islands">Solomon Islands</option>
                                          <option value="Somalia">Somalia</option>
                                          <option value="South Africa">South Africa</option>
                                          <option value="Spain">Spain</option>
                                          <option value="Sri Lanka">Sri Lanka</option>
                                          <option value="Sudan">Sudan</option>
                                          <option value="Suriname">Suriname</option>
                                          <option value="Swaziland">Swaziland</option>
                                          <option value="Sweden">Sweden</option>
                                          <option value="Switzerland">Switzerland</option>
                                          <option value="Syria">Syria</option>
                                          <option value="Tahiti">Tahiti</option>
                                          <option value="Taiwan">Taiwan</option>
                                          <option value="Tajikistan">Tajikistan</option>
                                          <option value="Tanzania">Tanzania</option>
                                          <option value="Thailand">Thailand</option>
                                          <option value="Togo">Togo</option>
                                          <option value="Tokelau">Tokelau</option>
                                          <option value="Tonga">Tonga</option>
                                          <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                          <option value="Tunisia">Tunisia</option>
                                          <option value="Turkey">Turkey</option>
                                          <option value="Turkmenistan">Turkmenistan</option>
                                          <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                          <option value="Tuvalu">Tuvalu</option>
                                          <option value="Uganda">Uganda</option>
                                          <option value="Ukraine">Ukraine</option>
                                          <option value="United Arab Erimates">United Arab Emirates</option>
                                          <option value="United Kingdom">United Kingdom</option>
                                          <option value="United States of America">United States of America</option>
                                          <option value="Uraguay">Uruguay</option>
                                          <option value="Uzbekistan">Uzbekistan</option>
                                          <option value="Vanuatu">Vanuatu</option>
                                          <option value="Vatican City State">Vatican City State</option>
                                          <option value="Venezuela">Venezuela</option>
                                          <option value="Vietnam">Vietnam</option>
                                          <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                          <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                          <option value="Wake Island">Wake Island</option>
                                          <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                          <option value="Yemen">Yemen</option>
                                          <option value="Zaire">Zaire</option>
                                          <option value="Zambia">Zambia</option>
                                          <option value="Zimbabwe">Zimbabwe</option>
                                          </select>
                                  </div>

  
                                  <div class="bg-warning">
                                  <hr>
                                 
                                  </div>
                                  <div class="text-center">
                                  <span class="text-white">DESCRIPTION</span>

                                  </div>


                                  <div class="input-container">
                                     
                                     <textarea class="input-field"  placeholder="Description" id="description"  style="min-height:200px ;"></textarea>
                                   </div>

                                   
 

                                   <div class="input-container">
                                    <button type="button" onclick="return  upload_form()" class="btn btn-success input-field text-center">Upload Details</button>
                                   </div>
                                    <div class="progress mt-3">
                                                   <div class="progress-bar"></div>
                                                     </div>
                                          
                                </form>

                         </div>
           
             </div>
       </div>
    </div>     
</div>
 

<?php
include("user_navigation/footer.php");
echo $footer;

?>
 
<script>

$(document).on('click', '.page_up', function(){
  window.scrollTo(0, 0);  
 });

 
document.getElementById("description").value = "<?php echo $result['description']; ?>";

 

function upload_form() {

    var property_type = document.forms["upload_house"]["property_type"].value;
    var category =document.forms["upload_house"]["category"].value;
    var bedroom =document.forms["upload_house"]["bedroom"].value;
    var bathroom =document.forms["upload_house"]["bathroom"].value;
    var kitchen =document.forms["upload_house"]["kitchen"].value;
    var laundry =document.forms["upload_house"]["laundry"].value;
    var verandah =document.forms["upload_house"]["verandah"].value;
    var land_dimension =document.forms["upload_house"]["land_dimension"].value;
    var location =document.forms["upload_house"]["location"].value;
    var country =document.forms["upload_house"]["country"].value;
    var description =document.forms["upload_house"]["description"].value;
    var price =document.forms["upload_house"]["price"].value;
    var tel_phone =document.forms["upload_house"]["tel_phone"].value;

    var house_code="<?php echo $_GET['house_code']; ?>";
   
     
 
 
			              fd = new FormData();
                          
                          fd.append('property_type',property_type);
                          fd.append('category',category);
                          fd.append('bedroom',bedroom);
                          fd.append('bathroom',bathroom);
                          fd.append('kitchen',kitchen);
                          fd.append('laundry',laundry);
                          fd.append('verandah',verandah);
                          fd.append('land_dimension',land_dimension);
                          fd.append('location',location);
                          fd.append('country',country);
                          fd.append('description',description);
                          fd.append('house_code',house_code);
                          fd.append('price',price);
                          fd.append('tel_phone',tel_phone);






                          $.ajax({xhr: function() {
                          var xhr = new window.XMLHttpRequest();
                          xhr.upload.addEventListener("progress", function(evt) {
                          if (evt.lengthComputable) {
                          var percentComplete = ((evt.loaded / evt.total) * 100);
                          $(".progress-bar").width(percentComplete + '%');
                          $(".progress-bar").html(percentComplete+'%');
                          }
                          }, false);
                          return xhr;
                          },
                          beforeSend: function(){
                          $(".progress-bar").width('0%');

                          },
                          url: 'product_manage/send_edit_sell_and_rent_house.php',
                          type: 'post',
                          data: fd,
                          contentType: false,
                          processData: false,
                          success: function(response){

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

                          setInterval(update,3000);
                          function update(){


                          $(".progress-bar").width('0%');
                          $(".progress-bar").html('0%');

                          location.reload();

                           
                          }


                          },
                          });
                
                    
                      
                    }
 
 

 

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
    <span class="text-light" style="font-size:12px;">Approved Members Only </span>
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
      <span class="text-light" style="font-size:12px;">Approved Members Only </span>
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
      <span class="text-light" style="font-size:12px;">Approved Members Only </span>
      </div>
     <button class = "yes" style="color: white;">OK</button>
    </div>`;
    
    $('#alert').html(message);
    
    functionAlert();
    
    }else{
      location.replace("upload_sell_house_and_rent_house.php")
    
    }
    });
    
  
</script>
 
 
</body>
</html>