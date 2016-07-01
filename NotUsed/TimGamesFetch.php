<?php
                
                 include("connection.php");
                 $sql = "SELECT * FROM Services";
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
         

              echo '<div class="row">';
              echo '<h2>' .$services[1]['Nome'] .'</h2>';
              echo '<p> ' .$services[1]['Descrizione'] . '</p>';
              
                    echo '<div class="col-sm-3">';
    
                        echo '<div class="service">'; 
                            $img = $services[1]['PrezzoSoluzione1'];
                            echo '<img src="Images/' . $img . '">';
                	    echo '</div>';
                echo '</div>';
                 echo '<div class="col-sm-3">';
                        echo '<div class="service">'; 
                            $img1 = $services[1]['PrezzoSoluzione2'];
                            echo '<img src="Images/' . $img1 . '">';
                	    echo '</div>';
                echo '</div>';
                        
                 echo '<div class="col-sm-3">';
                        echo '<div class="service">'; 
                            $img2 = $services[1]['PrezzoSoluzione3'];
                            echo '<img src="Images/' . $img2 . '">';
                	    echo '</div>';
                echo '</div>';
                        
                        echo '<div class="col-sm-3">';
                        echo '<div class="service">'; 
                            $img3 = $services[1]['PrezzoSoluzione4'];
                            echo '<img src="Images/' . $img3 . '">';
                	    echo '</div>';
                
                        
              echo '</div>';
             
     
echo '</div>';      
?> 