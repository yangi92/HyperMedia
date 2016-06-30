<?php
    include("connection.php");
  $sql = "SELECT * From Offers AS O JOIN Smartphone_phones AS A ON A.Nome=O.Nome UNION\n"
    . "SELECT * From Offers AS O JOIN Tablet_computers AS A ON A.Nome=O.Nome UNION\n"
    . "SELECT * From Offers AS O JOIN Modem_networking AS A ON A.Nome=O.Nome UNION\n"
    . "SELECT * From Offers AS O JOIN Smartlife_Entertainment AS A ON A.Nome=O.Nome\n"
    . "\n"
    . "";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $offers= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $offers[]=$row;
        }
                    
    } 
    else {
        echo "0 results";  
    }
                 
    $sql2 = "SELECT * FROM NuoviArrivi";
    $result = $conn->query($sql2);
    if ($result->num_rows > 0) {
        $new= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $new[]=$row;
        }
    }
    else {
        echo "0 results";  
    }
    
    $conn->close();


            echo '<div class="container-fluid">';
                echo '<div class="row">';
                    echo '<div class="col-sm-6 boxHeader">';
                    echo '<p>Check out our new arrivals</p>';
                        echo '<div class="row">';
                           for($i=0;$i<2;++$i){
                            echo '<div class="col-sm-6 elementBox">';
                            echo '<div class="thumbnail">'; 
                            $img = $new[$i]['ImageName'];
                            echo '<img src="Images/' . $img . '">';
                            echo '</div>';
                            echo '<p>' .$new[$i]['Marca'] .' '.$new[$i]['Nome'] .'</p>';
                            echo '<p><b> '. $new[$i]['Prezzo_nuovo'] . ' € </b></p>';
                              
                            echo '<form action="deviceTemplate.html" method="get">';
                            echo '<input type="hidden" name="phone" value="'.$new[$i]['Nome'].'" />'; 
                            echo '<button class="btn" style="text-align:center;border: 1px solid red;">View</button>';
                            echo'</form>';
                            
                            echo '</div>';   
                            }
                        echo '</div>';
                    echo '</div>';
                    
                    echo '<div class="col-sm-6 boxHeader">';
                    echo '<p>Check out our new offers</p>';
                        echo '<div class="row">';   
                           for($i=0;$i<2;++$i){
                            echo '<div class="col-sm-6 elementBox">';
                            echo '<div class="thumbnail">'; 
                            $img = $offers[$i]['ImageName'];
                            echo '<img src="Images/' . $img . '">';
                            echo '</div>';
                            echo '<p>' .$offers[$i]['Marca'] .' '.$offers[$i]['Nome'] .'</p>';
                            echo '<p><b>Price: <del>' .$offers[$i]['Prezzo'] . ' € </del>' . $offers[$i]['Prezzo_new'] . ' € </b></p>';
                            echo '<button class="btn" style="text-align:center;">View</button>';
                            echo '</div>';   
                            }
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
             echo '</div>';          
?>