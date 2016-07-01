<!DOCTYPE html>
<html lang="en">
 <head>
        <meta name="viewport" content="initial-scale=1">
    <meta charset="utf-8">
    <title>TIM-Tim Vision F.A.Q.</title>
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
                    <li class="underlineFromCenter"><a href="devices.html">DEVICES <span class="sr-only">(current)</span></a></li>
                    <li class="active underlineFromCenter"><a href="smartlife.html">SMARTLIFE</a></li>
                    <li class="underlineFromCenter"><a href="Assistance.html">ASSISTANCE</a></li>
                    <li class="underlineFromCenter"><a href="Highlights.html">HIGHLIGHTS</a></li>
                    <li class="underlineFromCenter"><a href="TheGroup_News">THE GROUP</a></li>
                    <li class="underlineFromCenter"><a href="whoweare.html">WHO WE ARE</a></li>
                    <li class="underlineFromCenter"><a href="shoppingCart.html">SHOPPING CART</a></li>
                </ul>
            </div>
            </div>
        </nav> 
    </div>
     <nav class="navbar navbar-default sidebar" tyle="z-index:100;" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <p class="brand" style="font-size:0.9em;" >Smartlife categories</p>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="tventertainment.html">Tv &#38; Entertainment<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>        
        <li ><a href="healthwellness.html">Health &#38; Wellness<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
        <li ><a href="homefamily.html">Home &#38; Family<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
        <li ><a href="personalservices.html">Personal Services<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
        <li ><a href="sloutlet.html">Outlet<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<script>
     $(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'TimVisionFAQFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.firstrow').html(response);
                }
            }); 
     });
</script>
     
      
       
 <div class="centralBox">
      
     
     
<div class="container-fluid ">
    
<div class="firstrow">
     </div>
<div class="row">
    <div class="col-sm-12">
                    
          <div class="btn-group btn-group-lg" role="group" aria-label="...">
           <button type="button" class="btn btn-default"><a href="#">Details</a></button>
           <button type="button" class="btn btn-default"><a href="#">Activation &#38; Rules</a></button>
            <button type="button" class="btn btn-default"><a href="#">For Devices</a></button>
          </div>

    </div>
</div>   

   <div class="socialMediaIcons">
             <ul style="list-style-type: none">
                <li><a href="https://www.facebook.com/TimOfficialPage/?fref=ts"><img src="Images/FACEBOOKICON.png" alt="Facebook" height="40px"></a></li>
                <li><a href="https://twitter.com/tim_official"><img src="Images/TWITTERICON.png" alt="Twitter" height="40px"></a></li>
                <li><a href="https://plus.google.com/+TIM/posts"><img src="Images/GOOGLEICON.png" alt="Facebook" height="40px"></a></li>
             </ul>
            </div>
     </div>
     </div>
 </body>
</html>