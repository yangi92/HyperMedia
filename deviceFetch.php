 
            <?php
                if(isset($_POST['phone'])) {
                $name = $_POST['phone'];
                }
                if(isset($_POST['next'])) {
                $next = $_POST['next'];
                } 
                if(isset($_POST['prev'])) {
                $prev = $_POST['prev'];
                }
                

               /* Getting the device data */
                
                echo '<script src="Scripts/colorBox.js"></script>';
                include("connection.php");
                
                $sql5 = "SELECT * FROM Smartphone_phones";
                    $result = $conn->query($sql5);
                
                    if ($result->num_rows > 0) {
                     $all= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $all[]=$row;
                     }
                    }

                 $sql = "SELECT * FROM Smartphone_phones WHERE Nome ='".$name."'";
                 $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                     $phone= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $phone[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }    
                
                /* Getting al colors of the device */

                 $sql2 = "SELECT * FROM DeviceColors WHERE Nome ='".$name."'";
                 $result = $conn->query($sql2);
                
                if ($result->num_rows > 0) {
                     $colors= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $colors[]=$row;
                    
                    }
                    
                 } 
                /* Getting the next device data [if existant]  */
                if($next != null){
                     $sql3 = "SELECT * FROM Smartphone_phones WHERE Nome ='".$next."'";
                    $result = $conn->query($sql3);
                
                    if ($result->num_rows > 0) {
                     $nextPhone= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $nextPhone[]=$row;
                    
                     }
                    }
                }
                /* Getting the previous device data [if existant]*/

                  if($prev != null){
                     $sql4 = "SELECT * FROM Smartphone_phones WHERE Nome ='".$prev."'";
                    $result = $conn->query($sql4);
                
                    if ($result->num_rows > 0) {
                     $prevPhone= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $prevPhone[]=$row;
                    
                     }
                    }
                    
                      
                   
                }
              
        
            
                 $conn->close();
     $newPrev=null;
     $newNext=null;
     for($i=0;$i<count($all);++$i){   
       if($prev!=null){
         if($all[$i]['Nome']==''.$prev.''){
            if($i>0){
                $newPrev=$i-1;
            }
         }
       }
       if($next!=null){
           if($all[$i]['Nome']==''.$next.''){
               if($i<count($all)){
                   $newNext=$i+1;
               }
           }
       }
     }
     echo '<div class="row">';
     echo '<div class=col-sm-4 style="margin-top:2%;">';
     echo '<h3 style="text-align:center;">'.$phone[0]['Marca'].' '.$phone[0]['Nome'].'</h3>'; 
     echo '<div class="elementBox" style="margin-left:5%;">';
     echo '<div id="mainImage" class="thumbnail" style="height:220px; border:none;">'; 
     $img = $phone[0]['ImageName'];
     echo '<img src="Images/' . $img . '">';
     echo '</div>';
    
     echo '</div>';
     echo '</div>';
     echo '<div class="col-sm-2" style="margin-top:2%;"></div>';

     echo '<div class="col-sm-6" style="margin-top:2%;">';
     echo '<h3 style="text-align:center;">Details</h3   >'; 
     echo '<div class="details">';
     echo '<ul>';
     echo '<li>Screen Size: '.$phone[0]['Screensize'].'"</li>';
     echo '<li>'.$phone[0]['Feature1'].'</li>';
     echo '<li>'.$phone[0]['Feature2'].'</li>';
     echo '<li>'.$phone[0]['Feature3'].'</li>';
     echo '<li><h3 style="text-decoration:underline;">Price :'.$phone[0]['Prezzo'].' €</h3></li>';
     echo '</ul>';
     echo '</div>';
     echo '</div>';

     echo '</div>';


 

    echo '<div class="row">';
       
    echo '<div class=col-sm-4 style="margin-top:2%;">';
    echo '<div class="btnWrap">   
        <div class="btn-group-vertical">
       
       <form action="deviceTechnical.html" method="get">
        <input type="hidden" name="phone" value="'.$phone[0]['Nome'].'" />
        <input type="hidden" name="next" value="'.$next.'" />
        <input type="hidden" name="prev" value="'.$prev.'" />
        <button class="btn btn-primary">Technical Informations</button>
        </form>
        
         <form action="deviceforsmartlife.html" method="get">
        <input type="hidden" name="phone" value="'.$phone[0]['Nome'].'" />
        <button class="btn btn-primary">Available Smartlife Service</button>
        </form>
         
        <button type="button" class="btn btn-primary">Available Assistance</button>
        </div>
        </div>';
     echo'</div>';
     
    echo '<div class="col-sm-2"></div>';
     
    echo '<div class="col-sm-6">';
    echo '<div class="wrapper">';
    if($prev!=null){
        echo '<div class="indexWrapper" style="text-align:center;">';
        echo '<p>Previous</p>';
        echo '<div class="colorBox thumbnail"><img src="Images/'.$prevPhone[0]['ImageName'].'"></div>';
        echo '<p>'.$prevPhone[0]['Nome'].'</p>';
     
        echo '<form action="deviceTemplate.html" method="get">';
        echo '<input type="hidden" name="next" value="'.$phone[0]['Nome'].'" />'; 
        echo '<input type="hidden" name="phone" value="'.$prev.'" />';
        echo '<input type="hidden" name="prev" value="'.$all[$newPrev]['Nome'].'"/>';
        echo '<button class="btn" style="text-align:center;border: 1px solid red;">View</button>';        
        echo'</form>';
        echo '</div>';
     }
     if($next!=null){
        echo '<div class="indexWrapper" style="text-align:center;">';
        echo '<p>Next</p>';
        echo '<div class="colorBox thumbnail"><img src="Images/'.$nextPhone[0]['ImageName'].'"></div>';
        echo '<p>'.$nextPhone[0]['Nome'].'</p>';
        if($newNext<4){
        echo '<form action="deviceTemplate.html" method="get">';
        echo '<input type="hidden" name="prev" value="'.$phone[0]['Nome'].'" />'; 
        echo '<input type="hidden" name="phone" value="'.$next.'" />';
        echo '<input type="hidden" name="next" value="'.$all[$newNext]['Nome'].'" />';
        echo '<button class="btn" style="text-align:center;border: 1px solid red;">View</button>';
        echo'</form>';
        }
        else{
         echo '<button class="btn" style="text-align:center;">View</button>';
        }

         echo '</div>';
     }
     echo '</div>';
     echo '</div>';
     echo '</div>';
     

     ?>