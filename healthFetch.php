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
echo '<div class="container-fluid">';
	echo '<div class="row">';
		for($i=3;$i<5;++$i){

                    echo '<div class="col-sm-6">';
                        
                        /* nome + image*/
                    
                        
                        echo '<div class="service">'; 
                            $img = $services[$i]['ImageName'];
                            $point=$services[$i]['Point'];
                           echo '<a href=  '.$point .'><img src="Images/' . $img . '">';
                        	echo '</div>';
						echo '<h2>' .$services[$i]['Nome'] .'</h2>';
					echo '</div>';
                        }
	echo '</div>';
echo '</div>';

?> 