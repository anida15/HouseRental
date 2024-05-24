<?php

include("database/database.php");
 

if ($result_apartment = mysqli_query($conn, "SELECT * from house WHERE property_type='Apartment' ")) {
    $apartments = mysqli_num_rows( $result_apartment);
 }

 if ($result_mansionette = mysqli_query($conn, "SELECT * from house WHERE property_type='Mansionette' ")) {
    $mansionette = mysqli_num_rows( $result_mansionette);
 }

 if ($result_bungalow = mysqli_query($conn, "SELECT * from house WHERE property_type='Bungalow' ")) {
    $bungalow = mysqli_num_rows( $result_bungalow);
 }

 $air_bnb =$apartments + $mansionette + $bungalow;

 if ($result_land = mysqli_query($conn, "SELECT * from land  ")) {
    $land = mysqli_num_rows( $result_land);
 }


$footer ='
<div style="clear: both; width: 100%;  text-align: center;margin-top:50px;  padding:20px; ">
                    <p style="font-size: 25px; font-family:serif;color:green;"> Statistics </p>
                    <p style="font-size: 25px; font-family:serif; "> Properties Available </p>


                                <div class="row">
                                       <div class="col-6">
                                            <span style="font-family:Monospace ;">Mansionette</span>
                                            <br>
                                            <span class="text-danger" >'.$mansionette.'</span>

                                       </div>
                                      <div class="col-6">
                                              <span style="font-family:Monospace ;">Apartment </span> 
                                              <br>
                                              <span class="text-danger" >'.$apartments.'</span>
 
                                      </div>
                                       <div class="col-6">
                                              <span style="font-family:Monospace ;">Bungalow</span>
                                              <br>
                                              <span class="text-danger" >'.$bungalow.'</span>
 
                                        </div>
                                          <div class="col-6">
                                              <span style="font-family:Monospace ;">AIR BNB</span>
                                              <br>
                                              <span class="text-danger">'.$air_bnb.'</span>


                                          </div>
                                </div>

                              
  
   
</div>



<footer style="position: absolute;         clear: both; width: 100%; background-image: linear-gradient(to bottom right ,black,green); color: white; text-align: center; margin-top:10px;">
<p  style="font-family:Cursive ;" >Genx Property Consultants <br></p>
<p> Management By : &copy; Maseno </p>
<p><a  href=" https://twitter.com/akellopatrick84"  ><i class="fa fa-twitter contact_icon" style="font-size:35px ;margin-right:10px ;color:yellow;"></i></a>
    <a href="https://telegram.me/PAT_Akello"  ><i class="fa fa-telegram contact_icon" style="font-size:35px ;margin-right:10px;color:yellow;"></i></a>
    <a href="https://wa.me/+254756405110"><i class="fa fa-whatsapp  contact_icon" style="font-size:35px ;margin-right:10px;color:yellow; "></i></a>
    </p>
</footer>';













?>