<?php
                
                 include("connection.php");
                 $sql = "SELECT * FROM TVACTIVE";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $act= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $act[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
            
                 $conn->close();
         

    echo '<h2>' .$act[0]['title']. '</h2>';
    echo '<div class=row>';
    echo '<div class=col-sm-6>';
	$text="Offer";
    $text1="On-Demand Cost";
        echo '<div class="panel panel-default" id="act-panel">';
            echo '<div class="panel-body">';
            echo'<h3>' .$text. '</h3>';
           echo $act[0]['offer'];
           echo'<h3>' .$text1. '</h3>';
           echo $act[0]['cost'];
        echo'</div>';
	 echo'</div>';
   echo'</div>';

 echo '<div class=col-sm-6>';
	$text2="Activation &#38; Disactivation";
        echo '<div class="panel panel-default" id="act-panel">';
            echo '<div class="panel-body">';
            echo'<h3>' .$text2. '</h3>';
           echo $act[0]['activation'];
           echo $act[0]['disactivation'];
        echo'</div>';
	 echo'</div>';
   echo'</div>';
echo'</div>';

?> 