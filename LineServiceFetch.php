<?php
    include("connection.php");
   $sql = "SELECT * FROM `AssistanceService` WHERE UpperCat=\"LineService\"";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $serv= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $serv[]=$row;
        }
    }else{
        echo "0 results";  
    }

$sql = "SELECT DISTINCT Category FROM `AssistanceService` WHERE UpperCat=\"LineService\"";
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
                     echo '<div class="titleAssistance">';echo '<p style="text-align:center">'.$cat[$i]['Category'].'</p>';
                        echo '</div>';
                    
                     echo '<div class="listAssistance">'; 
               
                    for($j=0;$j<count($serv);++$j){
                    
                     if($serv[$j]['Category']==$cat[$i]['Category']){  
                      if(($serv[$j]['Nome']=="ChangeContract")||($serv[$j]['Nome']=="AllAboutYourSimCard")||($serv[$j]['Nome']=="AbroadWithTim")){     
                     echo '<form action="ServiceTemplate.html" method="get">';
                     echo '<input type="hidden" name="service" value="'.$serv[$j]['Nome'].'" />'; 
                     echo '<button class="btnservice" style="text-align:center;color:red;">'.$serv[$j]['Nome'].'</button>';
                     echo'</form>';}
                        else{
                     echo '<form action="#" method="get">';
                     echo '<input type="hidden" name="service" value="" />'; 
                     echo '<button class="btnservice" style="text-align:center;">'.$serv[$j]['Nome'].'</button>';
                     echo'</form>'; 
                        }
                    
                            
            
                        }
                            
                    }
                  
                        echo '</div>';
                    echo'</div>';}

                for($i=2;$i<4;++$i){
                        echo'<div class="col-sm-6">';
                    /* titolo */
                     echo '<div class="titleAssistance">';echo '<p style="text-align:center">'.$cat[$i]['Category'].'</p>';
                        echo '</div>';
                    
                    
                  
                    echo '<div class="listAssistance">'; 
                  
                    for($j=0;$j<count($serv);++$j){
                        if($serv[$j]['Category']==$cat[$i]['Category']){
                    
                     echo '<form action="#" method="get">';
                     echo '<input type="hidden" name="service" value="" />'; 
                     echo '<button class="btnservice" style="text-align:center;">'.$serv[$j]['Nome'].'</button>';
                     echo'</form>'; 
                        }
                            
                    }
                        echo '</div>';
                    echo'</div>';}
                
                    echo '</div>'; 
                    echo '</div>';
?>   