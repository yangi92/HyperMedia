      <?php
                
                 include("connection.php");
                 $sql = "SELECT * FROM Modem_networking";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $net= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $net[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
            
                 $conn->close();
         

              echo '<div class="container-fluid">';
              echo '<div class="row">';
                
                for($i=0;$i<count($net);++$i){
                        echo '<div class="col-sm-3 device">';
                    
                        /* Piazzamento imagine */
                    
                        echo '<div class="thumbnail" style="height:170px;">'; 
                        $img = $net[$i]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                    
                        /* Mostra Nome e Marca */
                    
                        echo '<div class="inlineDisplay">'; 
                        echo '<p class="marca">' .$net[$i]['Marca'] .' </p><p>'.$net[$i]['Nome'] .'</p>';
                        echo '</div>';
                    
                        /* Mostra Prezzo */
                        echo '<div class="inlineDisplay">'; 
                        echo '<p>Price: <p class="price">' . $net[$i]['Prezzo'] . '</p>€</p>';
                        echo '</div>'; 
                    
                        /*Assegno Mobile e Speed */
                    
                         echo '<div class="mobile" style="display:none;">' . $net[$i]['Mobile'] . '</div>'; 
                         echo '<div class="speed" style="display:none;">' . $net[$i]['Speed'] . '</div>'; 
                        
                        
                        /*View Button*/
                        /*
                        echo '<form action="deviceTemplate.html" method="get">';
                        echo '<input type="hidden" name="phone" value="'.$net[$i]['Nome'].'" />';
                        echo '<button>View</button>';
                         echo'</form>';*/
                        echo '</div>';  
                    }
        echo '</div>';
     echo '</div>';       
?> 
   