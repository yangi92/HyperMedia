<?php
                
                 include("connection.php");
                 $sql = "SELECT * FROM Highlights";
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


                 echo '<div class="container-fluid">';
	             echo '<div class="row">';
		         echo '<h2 class="titleHightlights" style="text-align:center;margin-bottom:25px;">'."Highlights".'</h2>';
                 echo'<p class="descriptionHighlights" style ="text-align:center; margin-bottom:20px; font-size:15px;">'."This section is dedicated to help you find answers of
                 frequentily requested topics".'</h2>';
                 for($i=0;$i<6;++$i){
                     $text = $high[$i]['Nome'];
                     $point = $high[$i]['Point'];
                   echo '<div id="bottoniHighlights" class="col-sm-6">';
                   /* button*/
                     
                     
                     //echo '<form action="timGames.html" method="get">';
                     echo '<button class="btn" style="text-align:center;">'.$text.'</button>';
                     echo'</form>';
                 echo '</div>';}
                   
	echo '</div>';
echo '</div>';

?> 