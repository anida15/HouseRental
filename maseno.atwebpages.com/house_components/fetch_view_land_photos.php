<?php

$output="";

include("../database/database.php");

 
$land_code =$_POST['land_code'];
 

$query_fetch_house= mysqli_query($conn,"SELECT * FROM land WHERE land_code='{$land_code}' ");


if(mysqli_num_rows($query_fetch_house)==0){


    $output.='<table class="table" id="myTable">
  
    <tbody><tr> <td width="100%" style="text-align:center;  "><span class="text-danger"> No House Available </span> </td></tr>
    </tbody>
</table>

'; 




}else{

  

$query_fetch= mysqli_query($conn,"SELECT * FROM land_extend_photos WHERE land_code='{$land_code}'   ");

while($result_extend=mysqli_fetch_assoc($query_fetch) ){

$output .='<div  class="col-lg-6"  >
<div class="card text-white bg-light border border-info mt-2 mb-2  "  >
         <img src="../'.$result_extend['file_storage_location'].'" alt=""  width="100%"  style="height:300px; ">
       <div class="card-body bg-dark" >

     

         </div>
  </div>

</div>



';
}


$query_fetch_video= mysqli_query($conn,"SELECT * FROM land_extend_video WHERE land_code='{$land_code}'   ");

while($result_extend_video=mysqli_fetch_assoc($query_fetch_video) ){

$output .='<div  class="col-lg-6"  >
<div class="card text-white bg-light border border-info mt-2 mb-2  "  >
         <video src="../'.$result_extend_video['file_storage_location'].'"  controls  width="100%"  style="height:300px; "></video>
       <div class="card-body bg-dark" >

  

                  

         </div>
  </div>

</div>



';
}


while($result=mysqli_fetch_assoc($query_fetch_house)){ 
    $output .='  
     
    <div  class="col-lg-6"  >
    <div class="card text-white bg-light border border-info mt-2 mb-2  "  >
             <img src="../'.$result['file_storage_location'].'" alt=""  width="100%"  style="height:300px; ">
           <div class="card-body bg-dark" >
    
    
                           <div>
                             <span   style="width:70%; float:left;">Location  &nbsp;   <i class="fa fa-angle-double-down" style="font-size:15px;color:green"></i> '.$result['location'].'</span>
                             <span   style="width:30%; float:right;" ><i class="fa fa-cart-arrow-down " style="font-size:15px;color:yellow"></i>    &nbsp;  BUY Land</span>
    
    
                            
                                <table class="table mt-2"  >
                                    <tbody>
                                       <tr> 
                                         <td width="50%" style="  color:white; border:white solid 1px; border-left: none; font-size:13px; ">Price &nbsp;   <i class="fa fa-caret-down" style="font-size:12px;color:red"></i> <br>'.$result['price'].'</td>
                                         <td width="50%" style=" color:white; border:white solid 1px;   border-right: none; font-size:13px; ">Type &nbsp;   <i class="fa fa-caret-down" style="font-size:12px;color:red"></i> '.$result['type'].'</td>
                                        </tr>
                                        <tr> 
                                        <td width="50%" style="  color:white; border:white solid 1px;  border-bottom: none; border-left: none; font-size:13px; ">
                                        
                                        
                                        <div id="show_details_'.$result['land_code'].'" >
                         
                                        <a  id="show_details"  style="cursor:pointer"  data-value="'.$result['land_code'].'"  >  <span class="text-primary"  >  <i class="fa fa-info-circle"   style="font-size:20px ;color:yellow;"></i>  Show details </span></a>
              
                                        </div>
    
    
                                        
                                        </td>
                                        <td width="50%" style=" color:white; border:white solid 1px;  border-bottom: none;   border-right: none; font-size:13px; ">
    
                                        <div class="share-popup " id="share_place'.$result['land_code'].'">
                                        <form   class="share-container bg-dark">
                                       <a rel="nofollow noopener noreferrer" href="https://www.twitter.com/share?url=http://genxconsultants.atwebpages.com/view_land_photos.php?land_code='.$result['land_code'].'" target="_blank" title="Click to share on Twitter"><i class="fa fa-twitter" style="font-size:30px ;"></i></a>
                                       <a rel="nofollow noopener noreferrer" href="https://telegram.me/share/url?url=http://genxconsultants.atwebpages.com/view_land_photos.php?land_code='.$result['land_code'].'" target="_blank" title="Click to share on Telegram"><i class="fa fa-telegram" style="font-size:30px ;"></i></a>
                                       <a rel="nofollow noopener noreferrer" href="https://wa.me/?text=http://genxconsultants.atwebpages.com/view_land_photos.php?land_code='.$result['land_code'].'" target="_blank" title="Click to share on WhatsApp"><i class="fa fa-whatsapp" style="font-size:30px ;"></i></a>
                                       <button type="button" data-house_land="'.$result['land_code'].'" class=" btn btn cancel"  >Close</button>
                                             </form>    
                                       </div>
                                       <button   data-house_land="'.$result['land_code'].'" class="share-button text-light btn btn-success" ><span class="text-light  ">Share</span></button>
                                        
     
                                        </td>
                                       </tr>

                                       <tr>
                                    

                                       <td>
                                       <button  data-land_code="'.$result['land_code'].'" class=" btn btn-outline-warning book_land" style="border-top:none;" >Book</button>
    
                                       
                                       </td>
                                       </tr>
                                      
                                       
                                     </tbody>
                                 </table>
    
    
    
                                 <table class="table mt-2"  >
                                 <tbody>
    
                               <tr> 
                               <td width="50%" style="   color:white; border:white solid 1px;  border-bottom: none;   font-size:13px; " class="text-center">
    
                               <a  id="view_land_photos"   style="cursor:pointer"  data-land_code="'.$result['land_code'].'"   >
                                 View Photos  &nbsp;   <i class="fa fa-image" style="font-size:15px;color:yellow"></i> </td></a>
                              </tr>
                              </tbody>
                              </table>
    
    
                             </div>
    
                            
      
                     <div style="display: none;" id="show_house_details_'.$result['land_code'].'">
                        <div style=" position: absolute ;width: 95%;padding: 10px;background-color: black;border-radius:5px;z-index: 9;">
                             <span  id="show_less" style="cursor:pointer"   class="text-warning d-flex justify-content-end" data-value="'.$result['land_code'].'" > Dismiss </span>
                               
    
    
                          <table class="table mt-2"  >
                                    <tbody>
                                       <tr> 
                                         <td width="50%" style="  color:white; border:white solid 1px;    border-bottom: none; font-size:13px; ">Dimension &nbsp;   <i class="fa fa-caret-down" style="font-size:12px;color:red"></i> <br>'.$result['land_dimension'].'</td>
                                         <td width="50%" style="  color:white; border:white solid 1px;    border-bottom: none; font-size:13px; ">Country &nbsp;   <i class="fa fa-caret-down" style="font-size:12px;color:red"></i> <br>'.$result['country'].'</td>
                                     
                                       </tr>
                                       <tr> 
                   
                                        
                                      <td width="50%" style="  color:white; border:white solid 1px;  border-bottom: none;   font-size:13px; "  colspan="2">Facilities  &nbsp;   <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> '.$result['facilities'].'  </td>
                                   
                                     </tr>
                                      
                                       
                                     </tbody>
                                 </table>
    
    
    
                                 <table class="table mt-2"  >
                                 <tbody>
    
                               <tr> 
                               <td width="50%" style="   color:white; border:white solid 1px;  border-bottom: none;   font-size:13px; " class="text-center">
    
    
                               <strong class="text-success">Description  </strong> &nbsp;   <i class="fa fa-book" style="font-size:15px;color:yellow"></i>
                               <br> '.$result['description'].'
                               
                               
                               </td>
                              </tr>
                              </tbody>
                              </table>
    
    
                             </div>
    
    
    
    
    
    
    
                          
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