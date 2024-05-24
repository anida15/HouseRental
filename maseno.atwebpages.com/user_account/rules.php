<?php
session_start();


if(!isset($_SESSION['username']))
{
	header("location:../index.php");
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



 
 
 

<div style="width:85%; float:left;" class="bg-dark p-1 mb-3">
<span class="text-success"><strong><a href="../index.php" class="text-success">Home  <i class="fa fa-angle-double-right" style="font-size:20px;color:red"> </i><a href="index.php" class="text-success"> Dashboard</a> <i class="fa fa-angle-double-right" style="font-size:20px;color:red"></i> Rules </strong></span>

</div>

 



<div id="alert">
 </div>
 <div class="container   " style="  clear:both;">
    
    
      
        
                <div   style="border: yellow solid 1px ;border-radius: 10px; margin-top:10px ;  background-image: linear-gradient(to bottom right ,black,green); padding:10px;">
        
          
                                  <div id="alert">
                                    
                                </div>

 
                            <div class=" d-flex justify-content-center">
                            <img  src="../resource/logo.jpeg" width="128px" height="128px"  style="border-radius:25px ; left :50%;" alt="">  
   
                             </div>
                             
 
                            <div class=" d-flex justify-content-center">
                            
                                  <span style="color:yellow" class="header_title">

                                  <span style="font-family:Cursive ;font-size:30px;"> Genx Rules </span>
                                    </span>
                             </div>
                                  <hr class="bg-light">
            
                            <div class="   justify-content-center">

                             
<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
  ACCEPTANCE OF THE TERMS</span>


<p class="text-light mt-3 mb-3">
These Terms of Use (the “Terms”) constitute a binding and enforceable legal contract between genx Online Marketplace Kenya Limited, its affiliated companies (together, the “Administrator”, “we”, “us”) and you. Please read these Terms carefully.
Your access and use of the genx.co.ke website and mobile applications, as well as any service, content, and data available via them (together, the “Service” or the “Platform”) are governed by these Terms.
If you do not agree with any part of these Terms, or if you are not eligible or authorized to be bound by the Terms, then do not access or use the Service.
Please also review our Privacy Policy . The terms of the Privacy Policy and other supplemental terms, rules, policies, or documents that may be posted on the Platform from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms at any time and for any reason with or without prior notice.
</p>

<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
IMPORTANT DISCLAIMERS
</span>

<p class="text-light mt-3 mb-3">
ALL SERVICES RENDERED BY THE ADMINISTRATOR ARE RENDERED “AS IS”, “AS AVAILABLE” AND “WITH ALL FAULTS”, AND THE ADMINISTRATOR DISCLAIMS ALL WARRANTIES, EXPRESSED OR IMPLIED, INCLUDING WITHOUT LIMITATION ANY GUARANTEES REGARDING CONDITION, QUALITY, LIFE DURATION, PERFORMANCE, ACCURACY, RELIABILITY, COMMERCIAL VALUE AND SUITABILITY FOR SPECIFIC PURPOSES. ALL SUCH WARRANTIES AND LIABILITIES ARE HEREBY EXCLUDED.
ADMINISTRATOR HAS NO CONTROL OVER AND DOES NOT GUARANTEE THE EXISTENCE, QUALITY, SAFETY OR LEGALITY OF GOODS AND SERVICES PUBLISHED BY USERS ON THE PLATFORM; THE TRUSTWORTHINESS OR ACCURACY OF INFORMATION PROVIDED BY USERS IN THE ANNOUNCEMENTS; THE ABILITY OF SELLERS TO SELL GOODS OR TO PROVIDE SERVICES; THE ABILITY OF BUYERS TO PAY FOR GOODS OR SERVICES; OR THAT A USER WILL ACTUALLY COMPLETE A TRANSACTION. ADMINISTRATOR MAKES NO GUARANTEES CONCERNING THAT MANUFACTURING, IMPORT, EXPORT, OFFER, DISPLAYING, PURCHASE, SALE, ADVERTISING AND/OR USE OF PRODUCTS OR SERVICES, WHICH ARE OFFERED OR DISPLAYED ON THE PLATFORM DO NOT INFRINGE ANY THIRD PARTIES’ RIGHTS. THEREFORE, ADMINISTRATOR EXPRESSLY DISCLAIMS ANY LIABILITY IN CONNECTION TO MATERIALS AND INFORMATION POSTED BY USERS ON THE PLATFORM.
YOU ARE ENCOURAGED TO CHECK THE GOODS BEFORE PAYMENT AND TO REQUEST THE SELLER TO PROVIDE DOCUMENTS CONFIRMING COMPLIANCE OF THE GOODS WITH APPLICABLE REQUIREMENTS OF LAWS, REGULATIONS, RULES, GUIDELINES, STANDARDS.
YOU ACKNOWLEDGE THAT YOU ARE SOLELY RESPONSIBLE FOR YOUR SAFETY AND YOU UNDERSTAND THAT YOU SHOULD MEET WITH OTHER INDIVIDUALS FOR COMPLETION OF A TRANSACTION ONLY IN SAFE PUBLIC PLACES IN DAYLIGHT HOURS. YOU ARE SOLELY RESPONSIBLE FOR CONDUCTING DUE DILIGENCE OF ANY INDIVIDUAL OR ORGANIZATION REQUESTING A MEETING TO CONDUCT A JOB INTERVIEW OR TO COMPLETE A TRANSACTION. ADMINISTRATOR DISCLAIMS ANY RESPONSIBILITY FOR USER’S INTERACTION WITH ANY INDIVIDUAL OR ORGANIZATION.
</p>

<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
ACCOUNT REGISTRATION
</span>



<p class="text-light mt-3 mb-3">
In order to use certain features of the Service you may need to register an account on the Platform (the “Account”) and provide certain information about yourself as prompted by the registration form.
You may create an Account as an individual or as an authorized representative of a company. <br>

You can register only one Account. If more than one person accesses its Account from the same device, we may request to upload the proof of identity to avoid duplicate accounts.
You acknowledge that you are solely responsible for safeguarding and maintaining the confidentiality of access details to your Account and that you are fully responsible and liable for any activity performed using your Account access details. <br>

You hereby represent and warrant to us that you have reached the age of majority or are accessing the Service under the supervision of a parent or legal guardian. All users who are minors in the jurisdiction in which they reside (generally under the age of 18) must have the permission of, and be directly supervised by, their parent or guardian to use the Service. If you are a minor, you must have your parent or guardian read and agree to these Terms prior to you using the Service.
We reserve the right to suspend or terminate your Account, or your access to the Service, with or without notice to you, in the event that you breach these Terms. <br>

You agree to immediately notify us of any unauthorized use, or suspected unauthorized use of your Account or any other breach of security. We cannot and will not be liable for any loss or damage arising from your failure to comply with the above requirements.
</p>

<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
SERVICE
</span>



<p class="text-light mt-3 mb-3">
The Platform is an online service that allows users to create and publish announcements, to view announcements published by other users, to communicate with other users using the contact details provided in the announcements.
The Administrator itself is not an importer, manufacturer, distributor or seller of any item, as well as not a provider of any service posted by users on the Platform. In addition, the Administrator is neither a marketer nor a person acting on the user's behalf with respect to the marketing of any goods or services posted on the Platform. The actual sale and purchase contracts or services contracts are entered into directly between the users, and the Administrator itself is not a party to such transactions. The Administrator provides users with an opportunity to communicate.
Users shall be solely responsible to collect and remit any applicable taxes resulting from the sale of their goods or services posted on the Platform.
The Administrator reserves a right to delete or block access to announcements posted by users without any notice in the event of: <br>

(i) receiving of mandatory judgments of competent public authorities;<br>

(ii) claim of a holder of intellectual property rights to terminate infringement of his/her rights by a user on the Platform; <br>
(iii) infringements of rights or legal interests of other users, legal entities, or individuals upon their reasonable request; <br> 
(iv) detecting that announcement posted by a user on the Platform breaches these Terms or any applicable law, regulation, rule or standard. <br>
The Administrator is authorized to delete or block announcements of users regardless of providing a user with the relevant substantiation.
The Administrator retains the right to implement any changes to the Service (whether to free or paid features) at any time, with or without notice. You acknowledge that a variety of Administrator’s actions may impair or prevent you from accessing the Service at certain times and/or in the same way, for limited periods or permanently, and agree that the Administrator has no responsibility or liability as a result of any such actions or results, including, without limitation, for the deletion of, or failure to make available to you, any content or services.
<br>
Each user of the Service is solely responsible for any and all his or her User Content (as defined below). Because we do not control the User Content, you acknowledge and agree that we are not responsible for any User Content and we make no guarantees regarding the accuracy, currency, suitability, or quality of any User Content, and we assume no responsibility for any User Content. <br>
Your interactions with other Service users are solely between you and such user. You agree that the Administrator will not be responsible for any loss or damage incurred as the result of any such interactions. If there is a dispute between you and any Service user, we are under no obligation to become involved. <br>
The Service may contain links to third-party websites or resources and advertisements for third parties (collectively, "Third Party Ads"). Such Third-Party Ads are not under the control of the Administrator and the Administrator is not responsible for any Third-Party Ads. The Administrator provides these Third-Party Ads only as a convenience and does not review, approve, monitor, endorse, warrant, or make any representations with respect to Third-Party Ads. <br>
Advertisements and other information provided by online properties to which the Third Party Ads lead, may not be wholly accurate. You acknowledge sole responsibility for and assume all risk arising from your use of any such online properties. When you link to third party online properties, the applicable service provider's terms and policies, including privacy and data gathering practices, govern. You should make whatever investigation you feel necessary or appropriate before proceeding with any transaction with any third party. <br>

Your transactions and other dealings with Third-Party Ads that are found on or through the Service, including payment and delivery of related goods or services, are solely between you and such third party.
You hereby release us, our officers, employees, agents, and successors from claims, demands any and all losses, damages, rights, claims, and actions of any kind including personal injuries, death, and property damage, that is either directly or indirectly related to or arises from any interactions with or conduct of any Service users or any Third Party Ads.
</p>

<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
POSTING OF ANNOUNCEMENTS BY USERS
</span>


<p class="text-light mt-3 mb-3">
A user shall provide to the Administrator any documents confirming the legitimacy of posting of announcements and identity documents upon the Administrator’s request.
A user, who posts announcements with regard to sale of goods or services on the Platform, shall provide precise and complete information about such goods and services, as well as about the terms and conditions of sale and services provision.
The terms and conditions of sale and services provision developed by the user shall not interfere with these Terms and applicable laws.
Price of goods or services shall be exact. If it is perceived to be changed due to any specific circumstances, this shall be provided in the announcement.
  
</p>

<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
FEES
</span>

<p class="text-light mt-3 mb-3">
The Platform is generally free; however, it may contain payable services. For instance, we may set limits for publishing announcements in certain categories or offer advertising options for announcements on the Platform.
You are eligible for registering more than one Account if you use payable services on each of them.
The fees we charge for using payable services and payment methods accepted by us are disclosed on the Platform.
We reserve the right, in our sole discretion, to change the fees and acceptable payment methods from time to time and for any reason.
Unless otherwise explicitly provided by mandatory rules of the applicable law, the fees are non-refundable due to the nature of online services.
 
</p>

<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
USER REPRESENTATIONS AND WARRANTIES
</span>

<p class="text-light mt-3 mb-3">
By using the Service, you represent and warrant that:
You have the legal capacity and you agree to comply with the Terms;
If you register yourself as a representative of a legal entity, you are authorized by the company to enter into an agreement with us and with users of the Platform;
You are above 18 years of age;
You will or have provided true, accurate, and complete information in your Account;
You will update your information on your Account to maintain its truthfulness, accuracy, and completeness;
You will immediately change data for access to the Platform if you have a suspicion that your Account access details were disclosed or probably used by the third parties;
You will notify the Administrator of any unauthorized access to your Account;
You will not provide any false or misleading information about your identity or location in your Account;
You will use the Service in strict abidance by applicable laws, regulations, rules, guidelines;
You will not use the Service for any illegal or unauthorized purpose;
You will not post on the Platform announcements that infringe other person’s rights or interests, including any intellectual property rights or any other personal or proprietary rights of any third party.
You will not post on the Platform announcements that include:
false, misleading or deceptive statements;
personal or identifying information about minors or other persons without the proper consent;
pornographic, overtly sexual materials;
depictions that encourage illegal or reckless use of weapons and dangerous objects, or facilitate the purchase of firearms or ammunition;
defamatory, discriminatory, mean-spirited, threatening or harassing, improper, unacceptable materials, vulgar or abusive language;
advocacy of hate, violence, discrimination, racism, xenophobia, ethnic conflicts;
appeals to violence and unlawful actions;
offers of prostitution or other services contradicting moral or legal norms;
services, provision of which is prohibited by the applicable law;
information of solely promotional nature with no offers of specific goods or services;
counterfeit and imitated goods or unauthorized copies. Unauthorized copies include also goods having been acquired by illegal means, pirated or stolen; and
direct or indirect references to any other web sites, references or information about websites competing with the Platform;
You will not use software and pursue any other actions aimed to interference with the normal operation of the Platform;
You will not promote or distribute unsolicited commercial emails, chain letters, Ponzi schemes through the Platform or by any other means towards other users of the Platform;
You will not copy, modify, distribute any other User Content without consent of the respective user;
You will not harvest or otherwise collect information about users, including email addresses, phone numbers, without their consent or otherwise violate the privacy of another person;
You will not download, store, post, distribute and provide access to, or in any other way use worms, viruses, trojans, and other malware;
You have a legal title to the items offered for sale in your announcement; and
You have the necessary license or are otherwise authorized, as required by applicable law, to offer for sale, to advertise and distribute goods described in your announcement.
</p>

<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
INDEMNITY
</span>

<p class="text-light mt-3 mb-3">
You agree to indemnify and hold the Administrator, its successors, subsidiaries, affiliates, related companies, its suppliers, licensors and partners, and the officers, directors, employees, agents, and representatives of each of them harmless from any claim or demand, including costs and attorneys’ fees, made by any third party due to or arising out of: (i) your use of the Platform; (ii) your User Content; (iii) your violation of any representation, warranty, covenant, or obligation stipulated in these Terms; (iv) your violation of any applicable law, industry-standard, regulation, guideline, rule; (v) any transaction entered into by you via the Platform or your violation of terms of such transaction. The Administrator reserves the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us and you agree to cooperate with our defense of these claims.
LIMITATION OF LIABILITY
IN NO EVENT SHALL WE (AND OUR AFFILIATES) BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY LOST PROFIT OR ANY INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL OR PUNITIVE DAMAGES ARISING FROM THESE TERMS OR YOUR USE OF, OR INABILITY TO USE, THE SERVICE, OR THIRD-PARTY ADS, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. ACCESS TO, AND USE OF, THE SERVICE, AND THIRD-PARTY ADS ARE AT YOUR OWN DISCRETION AND RISK, AND YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTING SYSTEM OR LOSS OF DATA RESULTING THEREFROM.
NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED HEREIN, YOU AGREE THAT THE AGGREGATE LIABILITY OF THE ADMINISTRATOR TO YOU FOR ANY AND ALL CLAIMS ARISING FROM THE USE OF THE SERVICE, CONTENT OF ANNOUNCEMENTS, IS LIMITED TO THE LESSER OF THE AMOUNTS YOU HAVE PAID, IF ANY, TO US DURING THE SIX (6) MONTH PERIOD PRIOR TO ANY CAUSE OF ACTION ARISING OR KSH10,500.
</p>

<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
INTELLECTUAL PROPERTY RIGHTS
</span>
<p class="text-light mt-3 mb-3" >
Information you submit to us as part of your registration, and any data, text, pictures and other materials that you may submit or post on the Platform (the “User Content”) remain your intellectual property, and the Administrator does not claim any ownership of the copyright or other proprietary intellectual property rights in such registration information and the User Content. Notwithstanding the foregoing, you agree that the Administrator may retain copies of all registration information and the User Content and use such information and the User Content as reasonably necessary for or incidental to its operation of the Service and as described in these Terms and the Privacy Policy.
You grant the Administrator the non-exclusive, worldwide, transferable, perpetual, irrevocable right to copy, modify, adapt, store, publish, distribute, publicly display and perform, communicate and make available to the public the User Content in connection with the Service, including to use and make the User Content public on the affiliated web-site, as well as for the Administrator’s marketing, advertising, and other purposes.
You agree, and represent and warrant, that your use of the Service, or any portion thereof, will neither infringe nor violate the rights of any other party or breach any contract or legal duty to any other parties.
</p>
<p class="text-light mt-3 mb-2" >

Materials on the Platform, except those posted by the user, including but not limited to texts, software, scripts, graphics, photos, sounds, music, videos, interactive functions, etc. ("Materials") and trademarks, service marks and logos included in it ("Marks") belong to or are licensed by the Administrator representing items of copyright and of any other intellectual property rights. Any use of such Materials and Marks without prior notice of the Administrator is not allowed. Notice for Claims of Intellectual Property Violations and Copyright Infringement
If you are a holder of intellectual property rights or a person authorized to act in the name of a holder of intellectual property rights and you reasonably believe that information that is posted to the Platform someway infringes your intellectual property rights or intellectual property rights of a person, in which name you act, you may provide notification to the Administrator requiring to delete such material. In this regard, you shall warrant that your appeal has a legal basis, and you act in good faith according to law.
When providing relevant notification concerning infringement of rights you shall ensure that your request corresponds to the form below and includes the following:
an appeal should include the physical or electronic signature of a person empowered for acting in the name of a holder of the right, which is believed to be infringed;
the objects of intellectual property right, rights on which were supposedly infringed, shall be specified. If several objects exist, the entire list of such items shall be provided;
you shall specify materials (with an indication of specific URL-pages), which are stated to infringe rights or themselves are the objects of infringement;
you shall provide contact information so that the Administrator would be able to contact you, for example, address, phone number, and email address;
signed application with regard to your faithful and reasonable believe in those materials being the objects of complaint concerning infringement of intellectual property rights are used without a right holder’s or its representative’s consent, and also that this is not allowed by law;
signed application with regard to that a holder of intellectual property rights releases the Administrator from any third parties' claims related to deletion of relevant materials by the Administrator;
signed application with regard to that information contained in a notification is accurate under penalty of perjury, and you are authorized to act in the name of a holder of an exclusive right, which has been supposedly infringed;
statutory regulations which you believe to be violated in connection to using of disputable content;
state, in which territory you believe the rights to be infringed;
copies of documents establishing rights for an object of intellectual property right, which is subject to security, as well as a document that confirms powers for acting in the holder’s name, in attachments to your appeal.
The relevant notification shall be sent to email support@genx.co.ke.
</p>

<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
GOVERNING LAW AND JURISDICTION
</span>


<p class="text-light mt-3 mb-3">
These Terms shall be governed in accordance with the laws of Kenya.
Any dispute, controversy or claim arising out of or in connection to this contract, or breach, termination or invalidity thereof shall be settled by arbitration in accordance with the NCIA Arbitration Rules. The language to be used in the arbitral proceedings shall be English.
</p>

<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
MISCELLANEOUS PROVISIONS
</span>

<p class="text-light  mt-3 mb-3">
Except as otherwise provided, if any provision of these Terms is held to be invalid, void, or for any reason unenforceable, such provision shall be struck out and shall not affect the validity and enforceability of the remaining provisions.
We may transfer and assign any and all of our rights and obligations under these Terms to any other person, by any way, including by novation, and by accepting these Terms you give us consent to any such transfer or assignment.
If we fail to take an action with respect to your breach of these Terms, we will still be entitled to use our rights and remedies in any other situation where you breach these Terms.
In no event shall the Administrator be liable for any failure to comply with these Terms to the extent that such failure arises from factors outside the Administrator's reasonable control.
</p>

<span  class="text-danger " style="font-family:Cursive ;font-size:19px;">
CONTACT
</span>

<p class="text-light mt-3 mb-3">
If you want to send any notice under these Terms or have any questions regarding the Service, you may contact us at: support@genx.co.ke 
</p>                               

                         </div>
           
    </div>     
</div>
 

<?php
include("user_navigation/footer.php");
echo $footer;

?>

<script  >


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
    
  
</script>
 


 
 
</body>
</html>