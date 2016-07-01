 
<?php
    if(isset($_POST['product'])) {
        $name = $_POST['product'];
    }
    /* Getting the device data */
    echo '<script src="Scripts/dropDown.js"></script>';
    include("connection.php");
                
    $sql = "SELECT * FROM TvEntertainment";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $all= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $all[]=$row;
        }
    }

    $sql2 = "SELECT * FROM TvEntertainment WHERE Nome ='".$name."'";
    $result = $conn->query($sql2);
    if ($result->num_rows > 0) {
        $device= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $device[]=$row;
        }
    }else{
        echo "0 results";  
    }    
    $conn->close();
     
    echo '<div class="row">';
     echo '<div class=col-sm-4 style="margin-top:2%;">';
        echo '<h3 style="text-align:center;">'.$device[0]['Marca'].' '.$device[0]['Nome'].'</h3>'; 
        echo '<div class="elementBox" style="margin-left:5%;">';
            echo '<div id="mainImage" class="thumbnail" style="height:220px; border:none;">'; 
            $img = $device[0]['ImageName'];
            echo '<img src="Images/' . $img . '">';
            echo '</div>';
        echo '</div>';
    echo '</div>';
     echo '<div class="col-sm-8" style="margin-top:2%;">';
        echo '<h3 style="text-align:center;">Details</h3   >'; 
        echo '<div class="details">';
            echo '<p style="margin-left:5%;font-size:16px;">'.$device[0]['Descrizione'].'</p>';
            echo '<ul>';
                echo '<li>'.$device[0]['PrezzoSoluzione1'].'</li>';
                echo '<li>'.$device[0]['PrezzoSoluzione2'].'</li>';
                echo '<li>'.$device[0]['PrezzoSoluzione3'].'</li>';
                if($device[0]['PrezzoSoluzione4']!=null){
                echo '<li>'.$device[0]['PrezzoSoluzione4'].'</li>';
                }
          echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
   
   
     
    echo '<div class="row">';
   echo '<div class=col-sm-4 style="margin-top:2%;">';
    echo'<div class="btnWrap">   
        <div class="btn-group-vertical">
        
        <form action="FAQ.html" method="get">
            <input type="hidden" name="product" value="'.$device[0]['Nome'].'" />
            <button class="btn btn-primary highlights">F.A.Q.</button>
            </form>
            
        <form action="Activation.html" method="get">
            <input type="hidden" name="product" value="'.$device[0]['Nome'].'" />
            <button class="btn btn-primary highlights">Activation&Rules</button>
            </form>
            
        <form action="Compatible.html" method="get">
            <input type="hidden" name="product" value="'.$device[0]['Nome'].'" />
            <button class="btn btn-primary highlights">Compatible Devices</button>
            </form>
        </div>
        </div>
        </div>';
        

     echo '<div class="col-sm-8" style="margin-top:2%;">';

     echo'<div class="form-group" style="text-align:center;">
          
          <label for="sel1">Price List:</label>
          <select class="form-control" id="sel1">
          <option>'.$device[0]['PrezzoSoluzione1'].'</option>';
            if($device[0]['PrezzoSoluzione4']!=null){
            echo '<option>'.$device[0]['PrezzoSoluzione4'].'</option>';
          }          if($device[0]['PrezzoSoluzione3']!=null){
            echo '<option>'.$device[0]['PrezzoSoluzione3'].'</option>';
          }
          if($device[0]['PrezzoSoluzione4']!=null){
            echo '<option>'.$device[0]['PrezzoSoluzione4'].'</option>';
          }
     echo '</select>';
     echo '</div>
      <div class="btnWrap">
    
      <button class="btn btn-primary">Buy</button>
      </div>';
     echo '</div>';
     

     echo '</div>';
     echo '</div>';
     ?>