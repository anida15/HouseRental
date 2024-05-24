<?php

include("../database/database.php");

$output ="";


$search= $_REQUEST["searchvalue"];
 
$result_house = mysqli_query($conn,"SELECT * FROM `house` WHERE property_type LIKE '%$search%'");

if(mysqli_num_rows($result_house) ==0){
    $output.='<table class="table" id="myTable">
  
    <tbody><tr> <td width="100%" style="text-align:center;  "><span class="text-danger"> No House Available </span> </td></tr>
    </tbody>
</table>

'; 

   
}else{

    while($result=mysqli_fetch_assoc($result_house)){ 
        $output .='  
         
        <div  class="col-lg-6"  >
        <div class="card text-white bg-light border border-info mt-2 mb-2  "  >
                 <img src="../'.$result['file_storage_location'].'" alt=""  width="100%"  style="height:300px; ">
               <div class="card-body bg-dark" >
        
        
                               <div>
                                 <span   style="width:70%; float:left;">Type  &nbsp;   <i class="fa fa-angle-double-down" style="font-size:15px;color:green"></i> '.$result['property_type'].'</span>
                                 <span   style="width:30%; float:right;" ><i class="fa fa-cart-arrow-down " style="font-size:15px;color:yellow"></i>  &nbsp; '.$result['category'].' </span>
        
                                
                                    <table class="table mt-2 mb-"  >
                                        <tbody>
                                           <tr> 
                                             <td width="50%" style="  color:white; border:white solid 1px; border-left: none; font-size:13px; ">Bedroom &nbsp;   <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> '.$result['bedroom'].'</td>
                                             <td width="50%" style=" color:white; border:white solid 1px;   border-right: none; font-size:13px; ">Price  &nbsp;   <i class="fa fa-caret-down" style="font-size:12px;color:red"></i> <br>'.$result['price'].'</td>
                                            </tr>
                                            <tr> 
                                            <td width="50%" style="  color:white; border:white solid 1px;  border-bottom: none; border-left: none; font-size:13px; "> 
                                            
                                              <div id="show_details_'.$result['house_code'].'" >
                                              <a  id="show_details"  style="cursor:pointer"  data-value="'.$result['house_code'].'"  >  <span class="text-primary"  >  <i class="fa fa-info-circle"   style="font-size:20px ;color:yellow;"></i>  Show details </span></a>
                                              </div>
        
                                            
                                            </td>
                                            <td   width="50%" style=" color:white; border:white solid 1px;  border-bottom: none;   border-right: none; font-size:13px; ">
        
                                            <div class="share-popup " id="share_place'.$result['house_code'].'">
                                            <form   class="share-container bg-dark">
                                           <a rel="nofollow noopener noreferrer" href="https://www.twitter.com/share?url=http://genxconsultants.atwebpages.com/view_house_photos.php?house_code='.$result['house_code'].'" target="_blank" title="Click to share on Twitter"><i class="fa fa-twitter" style="font-size:30px ;"></i></a>
                                           <a rel="nofollow noopener noreferrer" href="https://telegram.me/share/url?url=http://genxconsultants.atwebpages.com/view_house_photos.php?house_code='.$result['house_code'].'" target="_blank" title="Click to share on Telegram"><i class="fa fa-telegram" style="font-size:30px ;"></i></a>
                                           <a rel="nofollow noopener noreferrer" href="https://wa.me/?text=http://genxconsultants.atwebpages.com/view_house_photos.php?house_code='.$result['house_code'].'" target="_blank" title="Click to share on WhatsApp"><i class="fa fa-whatsapp" style="font-size:30px ;"></i></a>
                                           <button type="button" data-house_land="'.$result['house_code'].'" class=" btn btn cancel"  >Close</button>
                                                 </form>    
                                           </div> &nbsp; 
                                           <button   data-house_land="'.$result['house_code'].'" class="share-button text-light btn btn-success" ><span class="text-light  ">Share</span></button>
                                            
        
        
        
        
        
        
        
                                            </td>
                                           </tr>
                                           <tr>
                                            
        
                                           <td>
                                           <button  data-house_code="'.$result['house_code'].'" class=" btn btn-outline-warning book_house" style="border-top:none;" >Book</button>
        
                                           
                                           </td>
                                           </tr>
                                          
                                           
                                         </tbody>
                                     </table>
        
        
        
                                     <table class="table mt-2"  >
                                       <tbody>
        
                                     <tr> 
                                     <td width="50%" style="   color:white; border:white solid 1px;  border-bottom: none;   font-size:13px; " class="text-center">
        
                                     <a  id="view_house_photos"   style="cursor:pointer"  data-house_code="'.$result['house_code'].'" data-username="'.$result['username'].'" >
                                       View Photos  &nbsp;   <i class="fa fa-image" style="font-size:15px;color:yellow"></i> </td></a>
                                    </tr>
                                    </tbody>
                                    </table>
        
        
                                 </div>
        
                          
                       
                         <div style="display: none;" id="show_house_details_'.$result['house_code'].'">
                            <div style=" position: absolute ;width: 95%;padding: 10px;background-color: black;border-radius:5px;z-index: 9;">
                                 <span  id="show_less" style="cursor:pointer"   class="text-warning d-flex justify-content-end" data-value="'.$result['house_code'].'" > Dismiss </span>
        
                                 
        
                                 <table class="table mt-2"  >
                                 <tbody>
                                    <tr> 
                                     <td width="50%" style="  color:white; border:white solid 1px;   border-left: none; font-size:13px; ">Bathroom  &nbsp;   <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> '.$result['bathroom'].'  </td>
                                      <td width="50%" style=" color:white; border:white solid 1px;   border-right: none; font-size:13px; ">Laundry &nbsp;   <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> '.$result['laundry'].'</td>
                                     </tr>
                                     <tr> 
                                     <td width="50%" style="  color:white; border:white solid 1px; border-bottom: none; border-left: none; font-size:13px; ">Location &nbsp;   <i class="fa fa-caret-down" style="font-size:12px;color:red"></i> '.$result['location'].'</td>
                                      <td width="50%" style="  color:white; border:white solid 1px;  border-bottom: none; border-right: none;  font-size:13px; ">Kitchen  &nbsp;   <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> '.$result['kitchen'].'  </td>
        
                                    </tr>
                                   
                                    
                                  </tbody>
                              </table>
        
        
        
                              <table class="table mt-2"  >
                                <tbody>
        
                              <tr> 
                              <td width="50%" style="   color:white; border:white solid 1px;  border-bottom: none;   font-size:13px; " class="text-center">
                               <span style="float:left">Country <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> '.$result['country'].' </span>
                               <br>
                              
                               <strong class="text-success"> Description </strong> &nbsp;   <i class="fa fa-book" style="font-size:15px;color:yellow"></i> <br> '.$result['description'].' </td> 
                             </tr>
                             </tbody>
                             </table>
                                 
        
        
        
        
        
        
        
                            </div>
                     </div>
        
                 </div>
          </div>
        
        </div>
         ';
        }
 

}

 echo $output;


















?>