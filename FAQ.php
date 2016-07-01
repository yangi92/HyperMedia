<?php
    if(isset($_POST['product'])) {
        $name = $_POST['product'];
    }
    include("connection.php");
    /* Getting the device data */
$sql = "SELECT Content, Answer FROM FaqandActivation WHERE Type = \"FAQ\" AND Nome ='".$name."'" ;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $faq= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $faq[]=$row;
        }
    }else{
        echo "0 results";  
    }    
    $conn->close();
echo '<div class="container-fluid">';
echo'<div class="row">';
echo'<div="col-sm-12">';
echo '<h2 style="text-align:center">'.$name.'</h2>';
echo '<h2 style="text-align:center">'."FAQ".'</h2>';
               echo '<div id="accordion" role="tablist" aria-multiselectable="true">';
                
                for($i=0;$i<count($faq);++$i){
                      
                        $head = "heading";
                        $head.=$i."";
                        $coll = "collapse";
                        $coll.=$i."";
                        
                       
                    
                    
                        echo '<div class="panel panel-default">';
                        echo '<div class="panel-heading" role="tab" id="#'.$head.'">';
                        echo '<h4 class="panel-title">';
                        echo '<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#'.$coll.'" aria-expanded="true" aria-          
                                controls="'.$coll.'">';
                   
                            echo '<h4>'.$faq[$i]['Content'] .' - '.$faq[$i]['Date'].'</h4>';
                            echo '</a>';
                        echo '</h4>';
                        echo '</div>';
                        echo '<div id="'.$coll.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="'.$head.'">';
                        echo '<p>' . $faq[$i]['Answer'] . '</p>';
                        echo '</div>';
                    echo'</div>';
                        
                }
                echo  '</div>';
 echo  '</div>';
 echo  '</div>';





    echo '<div class="row">';
    echo '<div class="col-sm-2"></div>';
    echo '<div class="col-sm-8">';

 echo '<div class="btnWrap">
            
            <form action="Compatible.html" method="get">
            <input type="hidden" name="product" value="'.$name.'" />
            <button class="btn btn-primary highlights">Compatible Device</button>
            </form>
        
            <form action="Activation.html" method="get">
            <input type="hidden" name="product" value="'.$name.'" />
            <button class="btn btn-primary highlights">Activation & Rules</button>
            </form>
        
            
            
            <form action="productTemplate.html" method="get">
            <input type="hidden" name="product" value="'.$name.'" />  
            <button class="btn btn-primary highlights"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;Back</button>
            </form>            
         
        </div>
       
        </div>';
 
 
  echo '<div class="col-sm-2"></div>';
    echo '</div>';

    echo '</div>';  
?>