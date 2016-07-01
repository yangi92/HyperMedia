 
<?php
    if(isset($_POST['product'])) {
        $name = $_POST['product'];
    }
    /* Getting the device data */
    echo '<script src="Scripts/dropDown.js"></script>';
    include("connection.php");
                
    $sql = "SELECT * FROM TvEntertainment";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $all= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $all[]=$row;
        }
    }

    $sql2 = "SELECT * FROM AssistanceService WHERE Nome ='".$name."'";
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
     
    echo '<div class="row">';
        echo'<h3>'.$phone[0]['Nome'].'</h3>';
        echo'<h2 class="titleAssistance">' ."ACTIVATION". '</h2>';
        echo'<p class="assistanceDescription">'
            .$phone[0]['Description'].'</p>';
echo '<div class="btnWrap">';
echo '<button type="button" class="btn btn-default" style="text-align: center";>'."Assistance For".'</button>';
    echo'</div>';
    echo'</div>';

     ?>