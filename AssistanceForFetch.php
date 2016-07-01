 
<?php
    if(isset($_POST['product'])) {
        $name = $_POST['product'];
    }
    /* Getting the device data */
    echo '<script src="Scripts/dropDown.js"></script>';
    include("connection.php");
    

    $sql2 = "SELECT * FROM AssistanceDevice WHERE AService ='".$name."'";
    $result = $conn->query($sql2);
    if ($result->num_rows > 0) {
        $as= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $as[]=$row;
        }
    }else{
        echo "0 results";  
    }    
    $conn->close();

    echo '<div class="row">';
    echo '<div class="col-sm-2"></div>';
    echo '<div class="col-sm-8 forSL"><h4> Device Available For : '.$name.'</h4></div>';
    echo '<div class="col-sm-2"></div>';
    echo '</div>';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    for($i=0;$i<count($as);++$i){
            include("connection.php");
            $db=$as[$i]['TypeOfD'];
            
            $sql2 ="SELECT *  FROM $db WHERE Nome ='".$as[$i]['Device']."'";
            $result = $conn->query($sql2);
            if ($result->num_rows > 0) {
                $phone= array();
                while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                    $phone[]=$row;
                }
            }else{
                echo "0 results";  
            }    
            $conn->close();
     echo '<div class="col-sm-3 device">';
     /* Piazzamento imagine */
     echo '<div class="thumbnail" style="height:170px;">'; 
     $img = $phone[0]['ImageName'];
     echo '<img src="Images/' . $img . '">';
     echo '</div>';
     /* Mostra Nome */
     echo '<div>'; 
     echo '<p>'.$phone[0]['Nome'].''.$phone[0]['Marca'].'</p>';
     echo '</div>';
    
    /* View button */
        
         echo '<form action="deviceTemplate.html" method="get">';
         echo '<input type="hidden" name="phone" value="'.$phone[0]['Nome'].'" />'; 
         echo '<button style="color:red;">View</button>';
         echo '</form>';
    echo '</div>';
    }
    echo '</div>';
    echo '<div class="row">';
                echo '<div class="col-sm-4"></div>';
                echo '<div class="col-sm-4">
                      <form action="ServiceTemplate.html" method="get">
                      <input type="hidden" name="service" value="'.$name.'" />
                      <button class="btn btn-primary highlights"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;Back</button>
                      </form> 
                      </div>';
                echo '<div class="col-sm-4"></div>';
    
    echo '</div>';  
    echo '</div>';  
?>
