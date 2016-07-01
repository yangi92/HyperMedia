<?php
                
                 include("connection.php");
                 $sql = "SELECT * FROM TVFAQ";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $faq= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $faq[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
            
                 $conn->close();
         

    echo '<h2>' .$faq[0]['title']. '</h2>';
	$text=$faq[0]['firstquestion'];
        echo '<div class="panel panel-default" id="faq-panel">';
            echo '<div class="panel-body">';
            echo $text;
        echo'</div>';
	 echo'</div>';

 echo '<div class="panel panel-default" id="faq-panel">';
            echo '<div class="panel-body">';
            echo $faq[0]['secondquestion'];
    echo'</div>';
	 echo'</div>';   

 echo '<div class="panel panel-default" id="faq-panel">';
            echo '<div class="panel-body">';
            echo $faq[0]['thirdquestion'];
    echo'</div>';
    	 echo'</div>';
   
    echo '<div class="panel panel-default" id="faq-panel">';
            echo '<div class="panel-body">';
            echo $faq[0]['forthquestion'];
    echo'</div>';
    	 echo'</div>';
?> 