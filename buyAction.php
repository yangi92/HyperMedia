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

    echo'<div class="btnWrap">
        <h3>Your shopping cart</h3>
        </div>';
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
        
        echo '<div class="thumbnail">
                <img src="Images/'.$res[0]['ImageName'].'">
                </div>';
        }
    }
?>