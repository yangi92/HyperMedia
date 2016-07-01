      <?php
                
                 include("connection.php");
                 $sql = "SELECT * FROM Tablet_computers";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $tablet= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $tablet[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
            
                 $conn->close();
         

              echo '<div class="container-fluid">';
              echo '<div class="row">';
                
                for($i=0;$i<count($tablet);++$i){
                        echo '<div class="col-sm-3 device">';
                    
                        /* Piazzamento imagine */
                    
                        echo '<div class="thumbnail" style="height:170px;">'; 
                        $img = $tablet[$i]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                    
                        /* Mostra Nome e Marca */
                    
                        echo '<div class="inlineDisplay">'; 
                        echo '<p class="marca">' .$tablet[$i]['Marca'] .' </p><p>'.$tablet[$i]['Nome'] .'</p>';
                        echo '</div>';
                    
                        /* Mostra Prezzo */
                        echo '<div class="inlineDisplay">'; 
                        echo '<p>Price: <p class="price">' . $tablet[$i]['Prezzo'] . '</p>€</p>';
                        echo '</div>'; 
                    
                        /*Assegno grandezza schermo e MXP */
                    
                         echo '<div class="screen" style="display:none;">' . $tablet[$i]['Screensize'] . '</div>'; 
                         echo '<div class="camera" style="display:none;">' . $tablet[$i]['Pixel'] . '</div>'; 
                        
                        
                       
                        echo '<form action="" method="get">';
                        echo '<input type="hidden" name="" value="" />';
                        echo '<button>View</button>';
                         echo'</form>';
                   
                        echo '</div>';  
                    }
        echo '</div>';
     echo '</div>';       
?> 
   