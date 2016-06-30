<?php
        include("connection");

        session_start();
        $sid= session_id();
        if(isset($_POST['id'])){
        $product = $_POST['id'];
        if(!empty($_POST['id'])){
        $delete = mysql_query("DELETE FROM ShoppingCart WHERE Nome='".$product."'");
        }
    if($delete){
        echo "Record deleted successfully";
    }else{
        echo "Sorry, record could not be deleted";
    }
}
    
    
?>