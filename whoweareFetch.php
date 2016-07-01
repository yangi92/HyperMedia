<?php
                
                 include("connection.php");
                 $sql = "SELECT * FROM Projects_Innovation";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $news= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $news[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
            
                 $conn->close();
         
                                
                
                echo '<h2>Projects and Innovation</h2>';
                echo '<p>Tim Group firmly believes that innovation is the moving power of the future. That is why we try to invest time and resources in innovations and projects.</p>';
               echo '<div id="accordion" role="tablist" aria-multiselectable="true">';
                
                for($i=0;$i<count($news);++$i){
                      
                        $head = "heading";
                        $head.=$i."";
                        $coll = "collapse";
                        $coll.=$i."";
                        
                       
                    
                    
                        echo '<div class="panel panel-default">';
                        echo '<div class="panel-heading" role="tab" id="#'.$head.'">';
                        echo '<h4 class="panel-title">';
                        echo '<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#'.$coll.'" aria-expanded="true" aria-          
                                controls="'.$coll.'">';
                   
                            echo '<h4>'.$news[$i]['Header'] .' - '.$news[$i]['Date'].'</h4>';
                            echo '</a>';
                        echo '</h4>';
                        echo '</div>';
                        echo '<div id="'.$coll.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="'.$head.'">';
                        echo '<p>' . $news[$i]['Content'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        
                }
                echo  '</div>';
?> 
   