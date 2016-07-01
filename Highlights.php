<?php
                
                include("connection.php");
                $sql = "SELECT Highlights.Nome,AssistanceService.Nome\n"
                . "FROM Highlights\n"
                . "INNER JOIN AssistanceService\n"
                . "ON AssistanceService.Nome=Highlights.Nome";
                 
                $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $high= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $high[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
            
                 $conn->close();


      
           echo'<h2 class="titleHightlights" style="text-align:center;margin-bottom:25px;">Highlights</h2>
              <p class="" style ="text-align:center; margin-bottom:20px; font-size:15px;">This section is dedicated to help you find answers of frequentily requested topics</p>';
              
              for($i=0;$i<count($high);++$i){
              
              $text = $high[$i]['Nome'];
             
            echo '<div class="row">
            <div class="col-sm-3"></div><div class="col-sm-6">';
            if($i<3){
            echo'<form action="ServiceTemplate.html" method="get">
                <input type="hidden" name="service" value="'.$high[$i]['Nome'].'" />
                <button class="btn btn-primary highlights">'.$text.'</button>
                </form>';
            }else{
            echo'<button class="btn btn-primary highlights"style="border:none;">'.$text.'</button>';
            }
            echo'</div>
            <div class="col-sm-3"></div>
            </div>';
                  
            
                
                  
            }

     
        
              

    

?> 