<?php
    include("connection.php");
    $sql = "SELECT * FROM Smartphone_phones";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $phones= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $phones[]=$row;
        }
    }else{
        echo "0 results";  
    }
    $conn->close();
         
    echo '<div class="container-fluid">';
        echo '<div class="row">';
                
                for($i=0;$i<count($phones);++$i){
                        echo '<div class="col-sm-3 device">';
                    
                        /* Piazzamento imagine */
                    
                        echo '<div class="thumbnail" style="height:170px;">'; 
                        $img = $phones[$i]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                    
                        /* Mostra Nome e Marca */
                    
                        echo '<div class="inlineDisplay">'; 
                        echo '<p class="marca">' .$phones[$i]['Marca'] .' </p><p>'.$phones[$i]['Nome'] .'</p>';
                        echo '</div>';
                    
                        /* Mostra Prezzo */
                        echo '<div class="inlineDisplay">'; 
                        echo '<p>Price: <p class="price">' . $phones[$i]['Prezzo'] . '</p>€</p>';
                        echo '</div>'; 
                    
                        /*Assegno grandezza schermo e MXP */
                    
                         echo '<div class="screen" style="display:none;">' . $phones[$i]['Screensize'] . '</div>'; 
                         echo '<div class="camera" style="display:none;">' . $phones[$i]['Pixel'] . '</div>'; 
                        
                        
                        /*View Button*/
                        if(($phones[$i]['Nome']=='iPhone6s')||($phones[$i]['Nome']=='GalaxyS7')||($phones[$i]['Nome']=='Z5')){
                            $next="";
                            $prev="";
                            if($i>=1){
                                $prev=$phones[$i-1]['Nome'];
                                
                            }
                            if(($i)<(count($phones))){
                                $next=$phones[$i+1]['Nome'];
                                
                            }
                             
                            echo '<form action="deviceTemplate.html" method="get">';
                            echo '<input type="hidden" name="phone" value="'.$phones[$i]['Nome'].'" />'; 
                            echo '<input type="hidden" name="next" value="'.$next.'" />';
                            echo '<input type="hidden" name="prev" value="'.$prev.'" />';
                            echo '<button style="color:red;">View</button>';
                            echo'</form>';
                        }
                        else{
                            echo '<button>View</button>';

                        }
                        echo '</div>';  
                    }
        echo '</div>';
     echo '</div>';       
?> 
   