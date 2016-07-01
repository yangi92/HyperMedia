<?php
    if(isset($_POST['product'])) {
        $name = $_POST['product'];
    }
    include("connection.php");
    /* Getting the device data */
$sql = "SELECT Content, Answer FROM FaqandActivation WHERE Type = \"Activation\" AND Nome ='".$name."'" ;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $act= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $act[]=$row;
        }
    }else{
        echo "0 results";  
    }    
    $conn->close();
echo'<div class="row">';
echo'<div class="col-sm-12">';
echo '<h2 style="text-align:center">'.$name.'</h2>';
echo '<h2 style="text-align:center"><u>"Activation & Rules"</u></h2>';
echo '</div>';
echo  '</div>';


echo'<div class="row">';
    echo'<div class="col-sm-1"></div>';
        
    echo'<div class="col-sm-5 elementBox">';
    echo'<p>'.$act[0]['Content'].'</p>';
    echo'</div>';

    echo'<div class="col-sm-5 elementBox">';
    echo'<p>'.$act[0]['Answer'].'</p>';
    echo'</div>';

    echo'<div class="col-sm-1></div>';
echo'</div>';







    echo '<div class="row">';
    echo '<div class="col-sm-2"></div>';
    echo '<div class="col-sm-8">';

 echo '<div class="btnWrap">
            
            <form action="Compatible.html" method="get">
            <input type="hidden" name="product" value="'.$name.'" />
            <button class="btn btn-primary highlights">Compatible Device</button>
            </form>
        
            <form action="FAQ.html" method="get">
            <input type="hidden" name="product" value="'.$name.'" />
            <button class="btn btn-primary highlights">FAQ</button>
            </form>
        
            
            
            <form action="productTemplate.html" method="get">
            <input type="hidden" name="product" value="'.$name.'" />  
            <button class="btn btn-primary highlights"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;Back</button>
            </form>         
       </div>';
 
 
  echo '<div class="col-sm-2"></div>';
    echo '</div>';

    echo '</div>';  
?>