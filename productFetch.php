 
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
        $phone= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $phone[]=$row;
        }
    }else{
        echo "0 results";  
    }    
    $conn->close();
     
    echo '<div class="row">';
     echo '<div class=col-sm-4 style="margin-top:2%;">';
        echo '<h3 style="text-align:center;">'.$phone[0]['Marca'].' '.$phone[0]['Nome'].'</h3>'; 
        echo '<div class="elementBox" style="margin-left:5%;">';
            echo '<div id="mainImage" class="thumbnail" style="height:220px; border:none;">'; 
            $img = $phone[0]['ImageName'];
            echo '<img src="Images/' . $img . '">';
            echo '</div>';
        echo '</div>';
    echo '</div>';
     echo '<div class="col-sm-8" style="margin-top:2%;">';
        echo '<h3 style="text-align:center;">Details</h3   >'; 
        echo '<div class="details">';
            echo '<p style="margin-left:5%;font-size:16px;">'.$phone[0]['Descrizione'].'</p>';
            echo '<ul>';
                echo '<li>'.$phone[0]['PrezzoSoluzione1'].'</li>';
                echo '<li>'.$phone[0]['PrezzoSoluzione2'].'</li>';
                echo '<li>'.$phone[0]['PrezzoSoluzione3'].'</li>';
                if($phone[0]['PrezzoSoluzione4']!=null){
                echo '<li>'.$phone[0]['PrezzoSoluzione4'].'</li>';
                }
          echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
   
   
     
    echo '<div class="row">';
   echo '<div class=col-sm-4 style="margin-top:2%;">';
    echo'<div class="btnWrap">   
        <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">FAQ </button>
        <button type="button" class="btn btn-primary">Activation & Rules</button>
        <button type="button" class="btn btn-primary">Compatible devices</button>
        </div>
        </div>
        </div>';
        

     echo '<div class="col-sm-8" style="margin-top:2%;">';

     echo'<div class="form-group" style="text-align:center;">
          <label for="sel1">Price List:</label>
          <select class="form-control" id="sel1">
          <option>'.$phone[0]['PrezzoSoluzione1'].'</option>
          <option>'.$phone[0]['PrezzoSoluzione2'].'</option>
          <option>'.$phone[0]['PrezzoSoluzione3'].'</option>';
          if($phone[0]['PrezzoSoluzione4']!=null){
     echo '<option>'.$phone[0]['PrezzoSoluzione4'].'</option>';
          }
     echo '</select>';
     echo '</div>';
     echo '<div class="btnWrap">';
     echo '<button class="btn href="#">Buy now</button>';
     echo '</div>';
     echo '</div>';
     

     echo '</div>';
     echo '</div>';
     ?>