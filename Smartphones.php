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
       <a href="index.html"><img src="Images/TimLogo.png" alt="TimLogo"></a>
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
                    <li class="active underlineFromCenter"><a href="devices.html">DEVICES <span class="sr-only">(current)</span></a></li>
                    <li class="underlineFromCenter"><a href="#">SMARTLIFE</a></li>
                    <li class="underlineFromCenter"><a href="Assistance.html">ASSISTANCE</a></li>
                    <li class="underlineFromCenter"><a href="Highlights.html">HIGHLIGHTS</a></li>
                    <li class="underlineFromCenter"><a href="TheGroup_News">THE GROUP</a></li>
                    <li class="underlineFromCenter"><a href="whoweare.html">WHO WE ARE</a></li>a
                    <li class="underlineFromCenter"><a href="shoppingCart.html">SHOPPING CART</a></li>
                </ul>
            </div>
            </div>
        </nav> 
    </div>
     <nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <p class="brand" >Device categories</p>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Smartphone and devices<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>        
        <li ><a href="#">Tablet and computers<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
        <li ><a href="#">Modem and Networking<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
        <li ><a href="#">Smartlife and Entertainment<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
        <li ><a href="#">Outlet<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
     
     <!-- Prendo iphone da database come prova -->
     
      <?php
                 $servername = "localhost";
                 $username = "projectim";
                 $password = "";
                 $dbname = "my_projectim";

                 $conn = new mysqli($servername, $username, $password, $dbname);
                 if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 }

                 $sql = "SELECT * FROM NuoviArrivi";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     $offers= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $offers[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }
            
                 $conn->close();
            ?> 
   
    
 <div class="centralBox">
       
     
     
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-3">
                 <?php
                        
                        echo '<div class="thumbnail">'; 
                        $img = $offers[0]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                        echo '<p>' .$offers[0]['Marca'] .' '.$offers[0]['Nome'] .'</p>';
                        echo '<p><b>Price: ' . $offers[0]['Prezzo_nuovo'] . ' € </b></p>';
                        echo '<a class="view-button" href="Smartphone.php">View</a>';

                    
                ?>
            </div>
            <div class="col-sm-3" >
                
                <?php
                        
                        echo '<div class="thumbnail">'; 
                        $img = $offers[0]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                        echo '<p>' .$offers[0]['Marca'] .' '.$offers[0]['Nome'] .'</p>';
                        echo '<p><b>Price: ' . $offers[0]['Prezzo_nuovo'] . ' € </b></p>';
                        echo '<a class="view-button" href="Smartphone.php">View</a>';

                    
                ?>
            </div>
            <div class="col-sm-3">
                <?php
                        
                        echo '<div class="thumbnail">'; 
                        $img = $offers[0]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                        echo '<p>' .$offers[0]['Marca'] .' '.$offers[0]['Nome'] .'</p>';
                        echo '<p><b>Price: ' . $offers[0]['Prezzo_nuovo'] . ' € </b></p>';
                        echo '<a class="view-button" href="Smartphone.php">View</a>';

                    
                ?>
            </div>
            <div class="col-sm-3">
                <?php
                        
                        echo '<div class="thumbnail">'; 
                        $img = $offers[0]['ImageName'];
                        echo '<img src="Images/' . $img . '">';
                        echo '</div>';
                        echo '<p>' .$offers[0]['Marca'] .' '.$offers[0]['Nome'] .'</p>';
                        echo '<p><b>Price: ' . $offers[0]['Prezzo_nuovo'] . ' € </b></p>';
                        echo '<a class="view-button" href="Smartphone.php">View</a>';

                ?>
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