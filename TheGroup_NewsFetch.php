<?php
                
                 include("connection.php");
                 $sql = "SELECT * FROM News";
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
         
                                
                
                echo '<h2>Latest News</h2>';
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
                            echo '<h6><b>' . $news[$i]['Date'] . '</b></h6>';
                            echo '<h4>'.$news[$i]['Header'] .'</h4>';
                            echo '</a>';
                        echo '</h4>';
                        echo '</div>';
                        echo '<div id="'.$coll.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="'.$head.'">';
                        echo '<p>' . $news[$i]['Content'] . '</p>';
                        echo '</div>';
                        
                }
                echo  '</div>';
?> 
   