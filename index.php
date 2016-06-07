<!DOCTYPE html>
<html lang="en">
 <head>
    <meta name="viewport" content="initial-scale=1">
    <meta charset="utf-8">
    <title>TIM-Homepage</title>
    <link rel="icon" href="img/favicon.ico"/>     
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="Styles/stylesheet.css">
    <script src="Scripts/myscripts.js"></script>
 </head>
    
 
 <body> 
    <div class="upperBox">
       <a href="index.php"><img src="Images/TimLogo.png" alt="TimLogo"></a>
    </div> 
             
    <div class="navigationBar">
         <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                 </button>
                </div>
    
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="underlineFromCenter"><a href="devices.html">DEVICES <span class="sr-only">(current)</span></a></li>
                    <li class="underlineFromCenter"><a href="#">SMARTLIFE</a></li>
                    <li class="underlineFromCenter"><a href="#">ASSISTANCE</a></li>
                    <li class="underlineFromCenter"><a href="#">HIGHLIGHTS</a></li>
                    <li class="underlineFromCenter"><a href="#">THE GROUP</a></li>
                    <li class="underlineFromCenter"><a href="#">WHO WE ARE</a></li>
                    <li class="underlineFromCenter"><a href="#">SHOPPING CART</a></li>
                </ul>
            </div>
            </div>
        </nav> 
    </div>
    
     <div class="centralBox">
     <!-- Prendo i dati di nuovi arrivi e offerte -->
         <?php
                 $servername = "localhost";
                 $username = "projectim";
                 $password = "";
                 $dbname = "my_projectim";

                 $conn = new mysqli($servername, $username, $password, $dbname);
                 if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 }

                 $sql = "SELECT * FROM Offerte";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $offers= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $offers[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
                 $sql2 = "SELECT * FROM NuoviArrivi";
                 $result = $conn->query($sql2);
                 if ($result->num_rows > 0) {
                     $new= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $new[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
              

                 $conn->close();
            ?> 
     <!-- fine fetching -->
        
 
    <div class="container-fluid ">
        
        <div class="row">
            <div class="col-sm-6 boxHeader" >
                <p>Check out our new arrivals</p>
                <div class="row">
                <?php
                    for($i=0;$i<2;++$i){
                        echo '<div class="col-sm-6 elementBox">';
                        echo '<div class="thumbnail">'; 
                        $img = $new[$i]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                        echo '<p>' .$new[$i]['Marca'] .' '.$new[$i]['Nome'] .'</p>';
                        echo '<p><b>Price: ' . $new[$i]['Prezzo_nuovo'] . ' € </b></p>';
                        echo '<a class="view-button" href="index.php">View</a>';
                        echo '</div>';   
                    }
                ?>
                </div>
            </div>
            <div class="col-sm-6 boxHeader">
                <p>Check out our new offers</p>
                <div class="row">
                <?php
                    for($i=0;$i<2;++$i){
                        echo '<div class="col-sm-6 elementBox">';
                        echo '<div class="thumbnail">'; 
                        $img = $offers[$i]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                        echo '<p>' .$offers[$i]['Marca'] .' '.$offers[$i]['Nome'] .'</p>';
                        echo '<p><b>Price: <del>' .$offers[$i]['Prezzo_old'] . ' € </del>' . $offers[$i]['Prezzo_new'] . ' € </b></p>';
                        echo '<a class="view-button" href="index.php">View</a>';
                        echo '</div>';   
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
   </div>
   <div class="socialMediaIcons">
             <ul>
                <li><a href="https://www.facebook.com/TimOfficialPage/?fref=ts"><img src="Images/FACEBOOKICON.png" alt="Facebook" height="40px"></a></li>
                <li><a href="https://twitter.com/tim_official"><img src="Images/TWITTERICON.png" alt="Twitter" height="40px"></a></li>
                <li><a href="https://plus.google.com/+TIM/posts"><img src="Images/GOOGLEICON.png" alt="Facebook" height="40px"></a></li>
             </ul>
            </div>
     
 </body>
</html>