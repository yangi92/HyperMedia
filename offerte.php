                 <?php
                  include("connection.php");

                 $sql = "SELECT * FROM Offerte";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $offers= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $offers[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
                 $sql2 = "SELECT * FROM NuoviArrivi";
                 $result = $conn->query($sql2);
                 if ($result->num_rows > 0) {
                     $new= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $new[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
                $conn->close();


            echo '<div class="container-fluid">';
                echo '<div class="row">';
                    echo   '<div class="col-sm-6 boxHeader">';
                    echo '<p>Check out our new arrivals</p>';
                        echo '<div class="row newArrrivals">';
                        for($i=0;$i<2;++$i){
                            echo '<div class="col-sm-6 elementBox">';
                            echo '<div class="thumbnail">'; 
                            $img = $offers[$i]['ImageName'];
                            echo '<img src="Images/' . $img . '">';
                            echo '</div>';
                            echo '<p>' .$offers[$i]['Marca'] .' '.$offers[$i]['Nome'] .'</p>';
                            echo '<p><b>Price: <del>' .$offers[$i]['Prezzo_old'] . ' € </del>' . $offers[$i]['Prezzo_new'] . ' € </b></p>';
                            echo '<a class="view-button" href="index.html">View</a>';
                            echo '</div>';   
                            }
                        echo '</div>';
                    echo '</div>';
                    
                    echo '<div class="col-sm-6 boxHeader">';
                    echo '<p>Check out our new offers</p>';
                        echo '<div class="row newOffers">';
                        for($i=0;$i<2;++$i){
                            echo '<div class="col-sm-6 elementBox">';
                            echo '<div class="thumbnail">'; 
                            $img = $offers[$i]['ImageName'];
                            echo '<img src="Images/' . $img . '">';
                            echo '</div>';
                            echo '<p>' .$offers[$i]['Marca'] .' '.$offers[$i]['Nome'] .'</p>';
                            echo '<p><b>Price: <del>' .$offers[$i]['Prezzo_old'] . ' € </del>' . $offers[$i]['Prezzo_new'] . ' € </b></p>';
                            echo '<a class="view-button" href="index.html">View</a>';
                            echo '</div>';   
                            }
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
             echo '</div>';          
          ?>