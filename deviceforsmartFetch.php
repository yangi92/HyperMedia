<?php
    if(isset($_POST['phone'])) {
        $name = $_POST['phone'];
    }
    echo '<script src="Scripts/goBack.js"></script>';
    include("connection.php");
    /* Getting the device data */
    $sql ="SELECT *  FROM DeviceSmartlife WHERE Device ='".$name."' ORDER BY TypeOfSl DESC" ;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $phone= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $phone[]=$row;
        }
    }else{
        echo "0 results";  
    }    
    $conn->close();

    echo '<div class="row">';
    echo '<div class="col-sm-2"></div>';
    echo '<div class="col-sm-8 forSL">
    <h2>Available Smartlife : '.$name.'</h2></div>';
    echo '<div class="col-sm-2"></div>';
    echo '</div>';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    for($i=0;$i<count($phone);++$i){
            include("connection.php");
            $db=$phone[$i]['TypeOfSL'];
            
            $sql2 ="SELECT *  FROM $db WHERE Nome ='".$phone[$i]['Smartlife']."'";
            $result = $conn->query($sql2);
            if ($result->num_rows > 0) {
                $sl= array();
                while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                    $sl[]=$row;
                }
            }else{
                echo "0 results";  
            }    
            $conn->close();
     echo '<div class="col-sm-3 device">';
     /* Piazzamento imagine */
     echo '<div class="thumbnail" style="height:170px;">'; 
     $img = $sl[0]['ImageName'];
     echo '<img src="Images/' . $img . '">';
     echo '</div>';
     /* Mostra Nome */
     echo '<div>'; 
     echo '<p>'.$sl[0]['Nome'] .'</p>';
     echo '</div>';
    
    /* View button */
        if(($sl[0]['Nome']=='TimGames')||($sl[0]['Nome']=='TimVision')||($sl[0]['Nome']=='TimReading')){
         echo '<form action="'.$phone[$i]['Template'].'" method="get">';
         echo '<input type="hidden" name="product" value="'.$sl[0]['Nome'].'" />'; 
         echo '<button style="color:red;">View</button>';
         echo '</form>';
        }
        else{
            echo '<button>View</button>';

        }
    echo '</div>';
    }
    echo '</div>';
    echo '<div class="row">';
                echo '<div class="col-sm-2"></div>';
                echo '<div class="col-sm-8 forSL">
                      <button onclick="goBack()" type="button" class="btn backButton"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;Back</button>
                      </div>';
                echo '<div class="col-sm-2"></div>';

         '</div>';
    echo '</div>';  
?>