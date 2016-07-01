<?php
    include("connection.php");
    $sql = "SELECT * FROM TechnicalSupport";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $serv= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $serv[]=$row;
        }
    }else{
        echo "0 results";  
    }
    $conn->close();
         
    echo '<div class="container-fluid">';
        echo '<div class="row">';
                
                for($i=0;$i<count($serv);++$i){
                        echo '<div class="col-sm-6">';
                    
                        /* titolo */
                        
                    
                        echo '<div class="TITLE">'; 
                        echo '<h2 style="text-align:center">'.$serv[$i]['Nome'].'</h2>';
                        echo '</div>';
                    
                        /* unorderlist */
                    
                        echo '<div class="LIST">'; 
                        echo '<ul style="list-style-type: none;">';
                           echo '<li><a href="#">'.$serv[$i]['option1'].'</a></li>';
                            echo '<li><a href="#">'.$serv[$i]['option2'].'</a></li>';
                            echo '<li><a href="#">'.$serv[$i]['option3'].'</a></li>';
                            echo '<li><a href="#">'.$serv[$i]['option4'].'</a></li>';
                            echo '<li><a href="#">'.$serv[$i]['option5'].'</a></li>';
                            echo '<li><a href="#">'.$serv[$i]['option6'].'</a></li>';
                        echo '</ul>';
                        echo '</div>';
                    echo'</div>';
                }
                        
        echo '</div>';
     echo '</div>';       
?> 
   