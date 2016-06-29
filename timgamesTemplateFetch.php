
            <?php
                if(isset($_POST['product'])) {
                $name = $_POST['product'];
                }
              

               /* Getting the device data */
                
                echo '<script src="Scripts/colorBox.js"></script>';
                include("connection.php");
                
                $sql5 = "SELECT * FROM TvEntertainment";
                    $result = $conn->query($sql5);
                
                    if ($result->num_rows > 0) {
                     $all= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $all[]=$row;
                     }
                    }

                 $sql = "SELECT * FROM TvEntertainment WHERE Nome ='".$name."'";
                 $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                     $phone= array();
                     while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
                      $phone[]=$row;
                    
                    }
                    
                 } else {
                     echo "0 results";  
                 }    

              
        
            
                 $conn->close();
     
     echo '<h3 style="text-align:center;">'.$phone[0]['Nome'].'</h3>'; 
     
     echo '<div class=col-sm-4 style="margin-top:2%;">';
     echo '<h3 style="text-align:center;">'.$phone[0]['Marca'].' '.$phone[0]['Nome'].'</h3>'; 
     echo '<div class="elementBox">';
     echo '<div id="mainImage" class="thumbnail" style="height:220px; border:none;">'; 
     $img = $phone[0]['ImageName'];
     echo '<img src="Images/' . $img . '">';
     echo '</div>';
     
     echo '</div>';
     
     echo '<div class="btn-group btn-group-lg">
           <button type="button" class="btn btn-primary">Apple</button>
           <button type="button" class="btn btn-primary">Samsung</button>
           <button type="button" class="btn btn-primary">Sony</button>
           </div>';
     echo '</div>';
     
        
     echo '<div class="col-sm-8" style="margin-top:2%;">';
     echo '<h3 style="text-align:center;">Details</h3   >'; 
     echo '<div class="details">';
     echo '<p style="margin-left:5%;">'.$phone[0]['Descrizione'].'</p>';
     echo '<ul>';
     echo '<li>'.$phone[0]['PrezzoSoluzione1'].'</li>';
     echo '<li>'.$phone[0]['PrezzoSoluzione2'].'</li>';
     echo '<li>'.$phone[0]['PrezzoSoluzione3'].'</li>';
     echo '<li>'.$phone[0]['PrezzoSoluzione4'].'</li>';
     echo '</ul>';

     echo '<div class="btn-group">';

        echo '<button type="button" class="btn btn-default dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" align="left"
        style="padding: 10px 30px; margin-left:30px; font-size:20px;">';
        echo "Price";
        echo '<span class="claret">';
        echo '</span>';
        echo '</button>';
        echo '<ul class="dropdown-menu">';
            echo '<li align="left"><a href="#"> ' .$phone[0]['PrezzoSoluzione1'] . '</a></li>';
            echo '<li align="left"><a href="#"> ' .$phone[0]['PrezzoSoluzione2'] . '</a></li>';
            echo '<li align="left"><a href="#"> ' .$phone[0]['PrezzoSoluzione3'] . '</a></li>';
            echo '<li align="left"><a href="#"> ' .$phone[0]['PrezzoSoluzione4'] . '</a></li>';
        echo '</ul>';
     echo '</div>';
     echo '<h3 style="text-align:left; margin-left:5%;">Compatible</h3>';
     echo '<div class="buttonBox" style="margin-left:5%;"><p>Devices</p></div>';
  
     echo '</div>';
     echo '</div>';

     ?>
// possibile funzione per evidenziare prezzo 
<script>$(function(){
  
  $(".dropdown-menu li a").click(function(){
    
    $(".btn:first-child").text($(this).text());
     $(".btn:first-child").val($(this).text());
  });

});
</script>