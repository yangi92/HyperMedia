<?php
                
                 include("connection.php");
                 $sql = "SELECT * FROM PersonalServices";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $services= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $services[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
            
                 $conn->close();
                 echo '<div class="container-fluid">';
	             echo '<div class="row">';
		         echo '<h2 style="text-align:center;margin-bottom:25px;">Health & Wellness</h2>';
                 for($i=0;$i<count($services);++$i){
                   echo '<div class="col-sm-4">';
                   /* nome + image*/
             
                   echo '<div class="service thumbnail" style="border:1px solid #bbb;">'; 
                   $img = $services[$i]['ImageName'];
                   
                   echo '<img src="Images/' . $img . '">';
                   echo '</div>';
                     
                     echo '<form action="#" method="get">';
                     echo '<input type="hidden" name="product" value="'.$services[$i]['Nome'].'" />'; 
                     echo '<button class="btn" style="text-align:center;">View</button>';
                     echo'</form>';
                    
                    
                     echo '</div>';
                        }
	               echo '</div>';
                  echo '</div>';

 
?> 