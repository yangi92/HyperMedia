      <?php
                 include("connection.php");
                 $sql = "SELECT A.Prezzo ,A.Nome, O.Prezzo_new, A.ImageName FROM SLOffers as O JOIN HealthWellness as A ON A.Nome = O.Nome UNION\n"
                      . "SELECT A.Prezzo ,A.Nome, O.Prezzo_new , A.ImageName FROM SLOffers as O JOIN TvEntertainment as A ON A.Nome = O.Nome\n"
                      . "\n"
                      . "";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $offer= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $offer[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
            
                 $conn->close();
         

              echo '<div class="container-fluid">';
              echo '<div class="row">';
                
                for($i=0;$i<count($offer);++$i){
                        echo '<div class="col-sm-3 device">';
                    
                        /* Piazzamento imagine */
                    
                        echo '<div class="thumbnail" style="height:170px;">'; 
                        $img = $offer[$i]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                    
                        /* Mostra Nome e Marca */
                    
                        echo '<div class="inlineDisplay">'; 
                        echo '<p class="marca">' .$offer[$i]['Marca'] .' </p><p>'.$offer[$i]['Nome'] .'</p>';
                        echo '</div>';
                    
                        /* Mostra Prezzo */
                        echo '<div class="inlineDisplay">'; 
                        if($offer[$i]['Prezzo_new']!=0){
                             echo '<p><b>Price: <del>' .$offer[$i]['Prezzo'] . ' € </del><div class="price" style="display:inline">' . $offer[$i]['Prezzo_new'] . '</div> € </b></p>';   
                        }
                        else{
                             echo '<p><b>Price: <del>' .$offer[$i]['Prezzo'] . ' € </del><div class="price" style="display:inline">FREE!</div></b></p>';   
                        }
                        echo '</div>'; 
                 
                    
                        
                        /*View Button*/
                        /*
                        echo '<form action="deviceTemplate.html" method="get">';
                        echo '<input type="hidden" name="phone" value="'.$offer[$i]['Nome'].'" />';
                        echo '<button>View</button>';
                         echo'</form>';*/
                    
                        echo '</div>';  
                    }
        echo '</div>';
     echo '</div>';       
?> 
   