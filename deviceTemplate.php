<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 

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
                    <li class="underlineFromCenter"><a href="#">ASSISTANCE</a></li>
                    <li class="underlineFromCenter"><a href="#">HIGHLIGHTS</a></li>
                    <li class="underlineFromCenter"><a href="TheGroup_TimGroup.html">THE GROUP</a></li>
                    <li class="underlineFromCenter"><a href="#">WHO WE ARE</a></li>
                    <li class="underlineFromCenter"><a href="#">SHOPPING CART</a></li>
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
        
 <div class="centralBox">
     <script>
     $(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'deviceFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.centralBox').html(response);
                }
            }); 
     });
     </script>   
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