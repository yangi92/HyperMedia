 <?php
    include("connection.php");
   $sql = "SELECT * FROM TvEntertainment WHERE Nome='TimGames'";
   $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $games= array();
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $games[]=$row;
        }
        }
    $conn->close();
    
    echo '<div class="row">
          <h3 class="gamesHeader" style="text-align:center;"><b>Tim Games</b></h3>
          <div class=col-sm-8 style="margin-top:5%;">
          
          <div style="padding-left:15px";>
          <p style="">'.$games[0]['Descrizione'] .'<br></br>Cost:  <del>'.$games[0]['Prezzo'].'€</del>  1.00€</p>
          </div>
          
          </div>
         
          <div class=col-sm-4  style="margin-top:5%;">
           <div class="btnWrap">
          <form action="#" method="get">
         <input type="hidden" name="product" value="'.$games[0]['Nome'].'" /> 
         <button class="btn highlights" style="max-width:200px;width:100%;border:none;">Compatible devices</button>
         </form>
          </div>
          </div>
          
          </div>';

    echo '<div class="row">

          <div class="col-sm-3 boxHeader gameBox">
          <p>Arcade</p>
          <div class="elementBox"style="height:250px;max-height:100%;">
          <div class="gamesImg">';
          $img = $games[0]['PrezzoSoluzione1'];
          echo '<img src="Images/' . $img . '">
          </div>
          </div>
          </div>
          
          <div class="col-sm-3 boxHeader gameBox">
          <p>Sports</p>
          <div class="elementBox"style="height:250px;max-height:100%;">
          <div class="gamesImg">';
          $img = $games[0]['PrezzoSoluzione2'];
          echo '<img src="Images/' . $img . '">
          </div>
          </div>
          </div>
          
          <div class="col-sm-3 boxHeader gameBox">
          <p>Motors</p>
          <div class="elementBox"style="height:250px;max-height:100%;">
          <div class="gamesImg">';
          $img = $games[0]['PrezzoSoluzione3'];
          echo '<img src="Images/' . $img . '">
          </div>
          </div>
          </div>
          
          <div class="col-sm-3 boxHeader gameBox">
          <p>Cards</p>
          <div class="elementBox" style="height:250px;max-height:100%;">
          <div class="gamesImg">';
          $img = $games[0]['PrezzoSoluzione4'];
          echo '<img src="Images/' . $img . '">
          </div>
          </div>
          </div>
          
          </div>';
    echo '<div class="row">
            <div class="btnWrap">
             <div class="btn-group-vertical">
             <button type="button" class="btn btn-primary">Activate now</button>
             <button type="button" class="btn btn-primary">FAQ</button>
             <button type="button" class="btn btn-primary">Activation & Rules</button>
             
             </div>
             </div>
          
          <div>';
   
     

 ?>