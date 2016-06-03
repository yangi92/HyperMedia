<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>TIM-Homepage</title>
    <link rel="icon" href="img/favicon.ico"/>     
    <link rel="stylesheet" type="text/css" href="Styles/stylesheet.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="Scripts/myscripts.js"></script>
    <script src="Scripts/jquery-1.12.4.min.js"></script>
 </head>
    
 
 <body style="overflow:hidden; margin:0"> 
     
     <div class="upperBox">
        <a href="index.php"><img src="Images/TimLogo.png" alt="TimLogo"></a>
        <div class="navigationBar">
               <div class="table">
                <ul>
                <li class="underlineFromCenter"><a href="devices.html">DEVICES</a></li>
                <li class="underlineFromCenter"><a href="index.php">SMARTLIFE</a></li>
                <li class="underlineFromCenter"><a href="index.php">ASSISTANCE</a></li>
                <li class="underlineFromCenter"><a href="index.php">HIGHLIGHTS</a></li>
                <li class="underlineFromCenter"><a href="index.php">THE GROUP</a></li>
                <li class="underlineFromCenter"><a href="index.php">WHO WE ARE</a></li>
                <li class="underlineFromCenter"><a href="index.php">SHOPPING CART</a></li>
                </ul>
               </div>
         </div>
     </div>
     <div class="centralBox"> 
         
         <div class="newElementBox">
            <p>Check out our latest entries</p>
                 
              <?php
                 $servername = "localhost";
                 $username = "projectim";
                 $password = "";
                 $dbname = "my_projectim";

                     $conn = new mysqli($servername, $username, $password, $dbname);
                 if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 }

                 $sql = "SELECT ImagePath FROM NuoviArrivi WHERE Nome ='iPhone 6s'";
                 $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc())
                         $path = $row["ImagePath"];

                    
                 } else {
                     echo "0 results";
                 }
                 $sql = "SELECT ImagePath FROM NuoviArrivi WHERE Nome ='Galaxy S7'";
                 $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc())
                         $path2 = $row["ImagePath"];

                    
                 } else {
                     echo "0 results";
                 }
                 $conn->close();
                ?> 
             
             
             <div class="newPhone">
                 <img class="fetchImg" src="<?php echo $path; ?>">
             </div>
             <div class="newPhone">
                 <img class="fetchImg" src="<?php echo $path2; ?>" >
             </div>
                 
           
             
           
         </div>
         <div class="newElementBox">
             <p>Check out our new offers</p>
         </div>
         <div class="dividerBar">
         </div>
         <div class="socialMediaIcons">
             <ul>
                <li><a href="https://www.facebook.com/TimOfficialPage/?fref=ts"><img src="Images/FACEBOOKICON.png" alt="Facebook" height="40px"></a></li>
                <li><a href="https://twitter.com/tim_official"><img src="Images/TWITTERICON.png" alt="Twitter" height="40px"></a></li>
                <li><a href="https://plus.google.com/+TIM/posts"><img src="Images/GOOGLEICON.png" alt="Facebook" height="40px"></a></li>
             </ul>
         </div>
     </div>
        
 </body>
</html> 