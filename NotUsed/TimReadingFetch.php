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
              echo '<div class="col-sm-4">';
                        
                        /* nome + image*/
                    
                        echo '<h2>' .$services[2]['Nome'] .'</h2>';
                        echo '<div class="service">'; 
                            $img = $services[2]['ImageName'];
                            echo '<img src="Images/' . $img . '">';
                        	echo '</div>';
						echo '</div>';
                            
    
                       
                   
                   /*servizi */
                    echo '<div class="col-sm-8">';
                            echo '<h2> Details </h2>';
                            echo '<p> ' .$services[2]['Descrizione'] . '</p>';
                            echo "<h2> Prices </h2>";  
                            
                            echo '<ul>';
                            echo '<li align="left"> ' .$services[2]['PrezzoSoluzione1'] . '</li>';
                            echo '<li align="left"> ' .$services[2]['PrezzoSoluzione2'] . '</li>';
                            echo '<li align="left"> ' .$services[2]['PrezzoSoluzione3'] . '</li>';
                           // echo '<li align="left"> ' .$services[2]['PrezzoSoluzione4'] . '</li>';
                            echo '</ul>';
                    
                    echo '<div class="btn-group">';
                   
                        echo '<button type="button" class="btn btn-default dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" align="left"
                        style="padding: 15px 20px">';
               			echo "Select";
                       echo '<span class="claret">';
                        echo '</span>';
                        echo '</button>';
                        echo '<ul class="dropdown-menu">';
                             echo '<li align="left"><a href="#"> ' .$services[2]['PrezzoSoluzione1'] . '</li>';
                            echo '<li align="left"><a href="#"> ' .$services[2]['PrezzoSoluzione2'] . '</li>';
                            echo '<li align="left"><a href="#"> ' .$services[2]['PrezzoSoluzione3'] . '</li>';
                            echo '<li align="left"><a href="#"> ' .$services[2]['PrezzoSoluzione4'] . '</li>';
                        echo '</ul>';
                    echo '</div>';
                    
                echo '</div>';      
?> 

   