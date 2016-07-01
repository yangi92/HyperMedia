<?php
    if(isset($_POST['product'])) {
        $name = $_POST['product'];
    }
    include("connection.php");
    /* Getting the device data */
    $sql ="SELECT *  FROM DeviceSmartlife WHERE Smartlife ='".$name."' ORDER BY TypeOfSl ASC" ;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $device= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $device[]=$row;
        }
    }else{
        echo "0 results";  
    }    
    $conn->close();

    echo '<div class="row">';
    echo '<div class="col-sm-2"></div>';
    echo '<div class="col-sm-8 forSL"><h4>Available Device : '.$name.'</h4></div>';
    echo '<div class="col-sm-2"></div>';
    echo '</div>';
    echo '<div class="container-fluid">';
    echo '<div class="row">';

    for($i=0;$i<count($device);++$i){
            include("connection.php");
            $db=$device[$i]['TypeOfDevice'];
            
            $sql2 ="SELECT *  FROM $db WHERE Nome ='".$device[$i]['Device']."'";
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
        
         echo '<form action="deviceTemplate.html" method="get">';
         echo '<input type="hidden" name="phone" value="'.$sl[0]['Nome'].'" />'; 
         echo '<button style="color:red;">View</button>';
         echo '</form>';
    echo '</div>';
    }
    echo '</div>';
    echo '</div>';  
?>