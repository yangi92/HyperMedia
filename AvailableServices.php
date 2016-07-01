 
<?php
    if(isset($_POST['phone'])) {
        $name = $_POST['phone'];
    }
    if(isset($_POST['next'])) {
        $next = $_POST['next'];
    }if(isset($_POST['prev'])) {
        $prev = $_POST['prev'];
    }
    

    
    
    /* Getting the device data */
    echo '<script src="Scripts/dropDown.js"></script>';
    include("connection.php");
    

    $sql2 = "SELECT * FROM AssistanceDevice WHERE Device ='".$name."'";
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
    echo '<div class="col-sm-8 forSL"><h4> Assistance Services Available For : '.$name.'</h4></div>';
    echo '<div class="col-sm-2"></div>';
    echo '</div>';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    for($i=0;$i<count($as);++$i){
            include("connection.php");
            $db=$as[$i]['TypeOfA'];
            
            $sql2 ="SELECT *  FROM $db WHERE Nome ='".$as[$i]['AService']."'";
            $result = $conn->query($sql2);
            if ($result->num_rows > 0) {
                $phone= array();
                while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                    $serv[]=$row;
                }
            }else{
                echo "0 results";  
            }    
            $conn->close();
        echo '<div class="btnWrap">';
        echo '<div class="row">
            <div class="col-sm-3"></div><div class="col-sm-6">
            <form action="ServiceTemplate.html" method="get">
            <input type="hidden" name="service" value="'.$serv[$i]['Nome'].'" />
            <button class="btn btn-primary highlights">'.$serv[$i]['Nome'].'</button>
            </form>
            </div>
            <div class="col-sm-3"></div>
            </div>';
     echo '</div>';   
    echo '</div>';
    }
echo '<div class="btnWrap">';
    echo '<div class="row">
            <div class="col-sm-3"></div><div class="col-sm-6">
            <form action="deviceTemplate.html" method="get">
        <input type="hidden" name="phone" value="'.$name.'" />
        <input type="hidden" name="next" value="'.$next.'" />
        <input type="hidden" name="prev" value="'.$prev.'" />
        <button class="btn btn-primary highlights"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;Back</button>
        </form> 
            </div>
            <div class="col-sm-3"></div>
            </div>';
    echo '</div>';
    echo '</div>';
echo '</div>';
?>
