<?php
      if(isset($_POST['phone'])) {
                $name = $_POST['phone'];
                }
      if(isset($_POST['db'])) {
                $db = $_POST['db'];
                }
    session_start();
    $sid= session_id();

    include('connection.php');

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM ShoppingCart WHERE Nome ='".$name."' AND Cookie='".$sid."'";   
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        }
    else{
        $sql2 = "INSERT INTO ShoppingCart (Nome, Db ,Cookie) VALUES ('$name','$db','$sid')";
            if ($conn->query($sql2) === TRUE) {     
    
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    }    
    $conn->close();
    

$conn->close();
     include("connection.php");
    /* Getting the device data */

  
    $sql ="SELECT *  FROM ShoppingCart WHERE Cookie='".$sid."'";
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
    $cont=0;
    for($i=0;$i<count($phone);++$i){
        if($phone[$i]['Nome']==null){
            ++$cont;
        }
    }
    if((count($phone)-$cont)>0){
          echo'<div class="btnWrap">
        <h3>Your shopping cart:</h3>
        </div>';
    }else{
          echo'<div class="btnWrap">
        <h3>Your shopping cart is empty!</h3>
        </div>';
    }
    
    
    $total=0;
    echo '<div class="row">';
    for($i=0;$i<count($phone);++$i){
        
        $database=$phone[$i]['Db'];
        if($phone[$i]['Nome']!=null){
        include("connection.php");
        
        $sql3="Select * From $database WHERE Nome='".$phone[$i]['Nome']."'";
        $result = $conn->query($sql3);
        if ($result->num_rows > 0) {
            $res= array();
            while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                $res[]=$row;
            }
        }else{
            echo "0 results";  
        }    
        $conn->close();
         
         echo '<div class="col-sm-3 device">';
                    
                        /* Piazzamento imagine */
                    
                        echo '<div class="thumbnail" style="height:170px;">'; 
                        $img = $res[0]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                    
                        /* Mostra Nome e Marca */
                    
                        echo '<div class="inlineDisplay" style="text-align:center";>'; 
                        echo '<p class="marca"><p>'.$res[0]['Nome'] .'</p>';
                        echo '</div>';
                    
                        /* Mostra Prezzo */
                        echo '<div class="inlineDisplay" style="text-align:center";>'; 
                        echo '<p>Price: <p class="price">' . $res[0]['Prezzo'] . '</p>€</p>';
                        echo '</div>';
                        $total=$total+(int)$res[0]['Prezzo'];
         echo '</div>';          
        }
    }   
         echo '</div>';          

    echo '<div style="width:100%;border:1px solid #bbb;">';
     echo ' <div class="row btnWrap">
              <h3><u>Total: '.$total.'€</u></h3>
              </div>
              </div>';
    echo '<div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="btnWrap">
                    <a href="#" class="btn highlights" role="button"style="border:none";>Payment</a>         
                </div>
             </div>
             <div class="col-sm-4"></div>
           </div>';
     echo '<div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="btnWrap">
                    <a href="index.html" class="btn highlights" role="button">Home</a>         
                </div>
             </div>
             <div class="col-sm-4"></div>
           </div>';

    

        

?>