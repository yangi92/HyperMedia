 
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
     echo '<div class=row>';
     echo '<div class="col-sm-6" style="margin-top:2%;">';
     echo '<h3 style="text-align:center;">Technical specifications</h3   >'; 
     echo '<div class="details">';
     echo '<ul>';
     echo '<li>Screen Size: '.$phone[0]['Screensize'].'"</li>';
     echo '<li>'.$phone[0]['Feature1'].'</li>';
     echo '<li>'.$phone[0]['Feature2'].'</li>';
     echo '<li>'.$phone[0]['Feature3'].'</li>';
     echo '<li>'.$phone[0]['Feature4'].'</li>';
     echo '<li>'.$phone[0]['Feature5'].'</li>';
     echo '</ul>';
     echo '</div>';
     echo '</div>';

     echo '<div class="col-sm-6" style="margin-top:2%;">';
     
         echo '<h3 style="text-align:center;">Image Gallery</h3   >'; 

echo '<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active thumbnail" style="border:none;">
      <img src="Images/'.$colors[0]['Colore1'].'"  alt="pic1">
    </div>

    <div class="item thumbnail"style="border:none;">
      <img src="Images/'.$colors[0]['Colore2'].'" alt="pic2">
    </div>

    <div class="item thumbnail"style="border:none;">
      <img src="Images/'.$colors[0]['Colore3'].'"  alt="pic3">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>';     


     echo '</div>';
     echo '</div>';


     echo '<div class="row">';

      echo '<div class="col-sm-6">';     
       
        echo '<div class="btnWrap">   
        <div class="btn-group-vertical">
       
        <form action="deviceforsmartlife.html" method="get">
        <input type="hidden" name="phone" value="'.$phone[0]['Nome'].'" />
        <input type="hidden" name="next" value="'.$next.'" />
        <input type="hidden" name="prev" value="'.$prev.'" />
        <button class="btn btn-primary highlights">Available Smartlife Service</button>
        </form>
        
        <form action="AvailableServices.html" method="get">
        <input type="hidden" name="phone" value="'.$phone[0]['Nome'].'" />
        <input type="hidden" name="next" value="'.$next.'" />
        <input type="hidden" name="prev" value="'.$prev.'" />
        <button class="btn btn-primary highlights">Available Assistance Service</button>
        </form>
        
        <form action="deviceTemplate.html" method="get">
        <input type="hidden" name="phone" value="'.$phone[0]['Nome'].'" />
        <input type="hidden" name="next" value="'.$next.'" />
        <input type="hidden" name="prev" value="'.$prev.'" />
        <button class="btn btn-primary highlights"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;Back</button>
        </form>        
        </div>
        </div>';

    echo '</div>';
    echo '<div class="col-sm-6">';

     echo '<div class="btnWrap">';     
    if($prev!=null){
        echo '<div class="indexWrapper" style="text-align:center;">';
        echo '<div class="colorBox thumbnail"><img src="Images/'.$prevPhone[0]['ImageName'].'"></div>';
        echo '<p>'.$prevPhone[0]['Nome'].'</p>';
     
        echo '<form action="deviceTemplate.html" method="get">';
        echo '<input type="hidden" name="next" value="'.$phone[0]['Nome'].'" />'; 
        echo '<input type="hidden" name="phone" value="'.$prev.'" />';
        echo '<input type="hidden" name="prev" value="'.$all[$newPrev]['Nome'].'"/>';
        echo '<button class="btn" style="text-align:center;border: 1px solid red;"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;</button>';        
        echo'</form>';
        echo '</div>';
     }
     if($next!=null){
        echo '<div class="indexWrapper" style="text-align:center;">';
        echo '<div class="colorBox thumbnail"><img src="Images/'.$nextPhone[0]['ImageName'].'"></div>';
        echo '<p>'.$nextPhone[0]['Nome'].'</p>';
        if($newNext<4){
            
        echo '<form action="deviceTemplate.html" method="get">';
        echo '<input type="hidden" name="prev" value="'.$phone[0]['Nome'].'" />'; 
        echo '<input type="hidden" name="phone" value="'.$next.'" />';
        echo '<input type="hidden" name="next" value="'.$all[$newNext]['Nome'].'" />';
        echo '<button class="btn" style="text-align:center;border: 1px solid red;"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;</button>';
        echo'</form>';
            
        }
        else{
        echo '<button class="btn" style="text-align:center;"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;</button>';
        }
        echo '</div>';
     }
     echo '</div>';
     echo '</div>';
     echo '</div>';
     
 
    
 

    
 
     ?>