<?php
    include("connection.php");
   $sql = "SELECT * FROM `AssistanceService` WHERE UpperCat=\"CostPayment\"";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $serv= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $serv[]=$row;
        }
    }else{
        echo "0 results";  
    }

$sql = "SELECT DISTINCT Category FROM `AssistanceService` WHERE UpperCat=\"CostPayment\"";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $cat= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $cat[]=$row;
        }
    }else{
        echo "0 results";  
    }

    
    $conn->close();
         
    echo '<div class="container-fluid">';
        echo '<div class="row">';
                    for($i=0;$i<2;++$i){
                        echo'<div class="col-sm-6">';
                    /* titolo */
                     echo '<div class="titleAssistance">';echo '<h2 style="text-align:center">'.$cat[$i]['Category'].'</h2>';
                        echo '</div>';
                    /* unorderlist */
                    echo '<div class="listAssistance">'; 
                        echo '<ul style="list-style-type: none;">';
                    for($j=0;$j<count($serv);++$j){
                        if($serv[$j]['Category']==$cat[$i]['Category']){
                            echo '<li><a href="#">'.$serv[$j]['Nome'].'</a></li>'; 
                        }
                            
                    }
                    echo '</ul>';
                        echo '</div>';
                    echo'</div>';}

                for($i=2;$i<3;++$i){
                        echo'<div class="col-sm-6">';
                    /* titolo */
                     echo '<div class="titleAssistance">';echo '<h2 style="text-align:center">'.$cat[$i]['Category'].'</h2>';
                        echo '</div>';
                    /* unorderlist */
                    echo '<div class="listAssistance">'; 
                        echo '<ul style="list-style-type: none;">';
                    for($j=0;$j<count($serv);++$j){
                        if($serv[$j]['Category']==$cat[$i]['Category']){
                            echo '<li><a href="#">'.$serv[$j]['Nome'].'</a></li>'; 
                        }
                            
                    }
                    echo '</ul>';
                        echo '</div>';
                    echo'</div>';}
                
                    echo '</div>'; 
                    echo '</div>';
?>   