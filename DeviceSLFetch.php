      <?php
                
                 include("connection.php");
                 $sql = "SELECT * FROM Smartlife_Entertainment";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $sl= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $sl[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
            
                 $conn->close();
         

              echo '<div class="container-fluid">';
              echo '<div class="row">';
                
                for($i=0;$i<count($sl);++$i){
                        echo '<div class="col-sm-3 device">';
                    
                        /* Piazzamento imagine */
                    
                        echo '<div class="thumbnail" style="height:170px;">'; 
                        $img = $sl[$i]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                    
                        /* Mostra Nome e Marca */
                    
                        echo '<div class="inlineDisplay">'; 
                        echo '<p class="marca">' .$sl[$i]['Marca'] .' </p><p>'.$sl[$i]['Nome'] .'</p>';
                        echo '</div>';
                    
                        /* Mostra Prezzo */
                        echo '<div class="inlineDisplay">'; 
                        echo '<p>Price: <p class="price">' . $sl[$i]['Prezzo'] . '</p>€</p>';
                        echo '</div>'; 
                    
                        /*Assegno Mobile e Category  */
                    
                         echo '<div class="mobile" style="display:none;">' . $sl[$i]['Mobile'] . '</div>'; 
                         echo '<div class="cat" style="display:none;">' . $sl[$i]['Category'] . '</div>'; 
                        
                      
                        echo '<form action="#" method="get">';
                        echo '<input type="hidden" name="" value="" />';
                        echo '<button>View</button>';
                         echo'</form>';
                        echo '</div>';  
                    }
        echo '</div>';
     echo '</div>';       
?> 
   