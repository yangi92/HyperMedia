<?php
                
                 include("connection.php");
                 $sql = "SELECT * FROM TvEntertainment";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $services= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $services[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
            
                 $conn->close();
                 echo '<div class="container-fluid">';
	             echo '<div class="row">';
		         echo '<h2 style="text-align:center;margin-bottom:25px;">Tv & Entertainment</h2>';
                 for($i=0;$i<3;++$i){
                   echo '<div class="col-sm-4">';
                   /* nome + image*/
             
                   echo '<div class="service thumbnail" style="border:1px solid #bbb;">'; 
                   $img = $services[$i]['ImageName'];
                   $point= $services[$i]['Point'];
                   echo '<img src="Images/' . $img . '">';
                   echo '</div>';
                     if($i!=1){
                     echo '<form action="productTemplate.html" method="get">';
                     echo '<input type="hidden" name="product" value="'.$services[$i]['Nome'].'" />'; 
                     echo '<button class="btn" style="text-align:center;border: 1px solid red;">View</button>';
                     echo'</form>';
                    }
                     else{
                     echo '<form action="timGames.html" method="get">';
                     echo '<button class="btn" style="text-align:center;border: 1px solid red;">View</button>';
                     echo'</form>';
                     }
                     echo '</div>';
                        }
	echo '</div>';
echo '</div>';

?> 