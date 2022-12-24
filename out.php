<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="out.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
  $(document).ready(function(){
    $("#img1").hide();
    $("#img2").hide();
  $("#btn1").click(function(){
    $("#img1").toggle();
    $("#img2").toggle();
  });
  });
</script>
</head>
<body>
<div class="col-6 mx-auto">
<div class="container">
  <b><p class="card-title">Docking Score of EGCG : -9.2 kcal/mol</p>
  <p class="card-title">HO-1 of EGCG : 0.969</p> 
  <p class="card-title">Antioxidant of EGCG : 0.814</p></b>
  <div class="title">
    <?php include "retreive.php";
    echo '<h1>EGCG vs ';
    echo $sqliconnect1 ;
    echo '</h1>';
    ?>
    </div>
  <div class="card" style="width:650px">
    <div class="image-cont">
    <?php include "retreive.php";
    echo '<img src = "data:image/png;base64,'.base64_encode($sqliconnect7).'" height="200" width="200"/>';
    ?>
    </div>
    <div class="card-body">
      <button class="btn btn-primary" type="submit" id="btn1" onclick="">Compare</button><br>
      <?php include "retreive.php";
      echo '<img src = "data:image/png;base64,'.base64_encode($sqliconnect10).'" height="350" width="600" id="img1"/>';
      echo '<img src = "data:image/png;base64,'.base64_encode($sqliconnect11).'" height="450" width="600" id="img2"/>';
      ?><br>
      <b><p class="card-title">Selected Position : <?php include "retreive.php";
      echo $sqliconnect2; ?> </p>
      <p class="card-title">Selected Compound : <?php include "retreive.php";
      echo $sqliconnect3; ?></p>
      <p class="card-title">Compound Name : <?php include "retreive.php";
      echo $sqliconnect1; ?></p>
      <p class="card-title">Docking Score of Selected Compound : <?php include "retreive.php";
      echo $sqliconnect4; ?> kcal/mol</p>
      <p class="card-title">HO-1 of Selected Compound :  <?php include "retreive.php";
      echo $sqliconnect5; ?></p>
      <p class="card-title">Antioxidant of Selected Compound : <?php include "retreive.php";
      echo $sqliconnect6; ?></p>
      <?php include "retreive.php";
      if($sqliconnect8=="Yes"){
        echo '<p style="background-color: red;">AMES Toxicity : ';
        echo $sqliconnect8;
        echo '</p>';
      }
      else{
        echo '<p style="background-color: green;">AMES Toxicity : ';
        echo $sqliconnect8;
        echo '</p>';
      }
      ?>
      <?php include "retreive.php";
      if($sqliconnect9=="Yes"){
        echo '<p style="background-color: red;">Hepato Toxicity : ';
        echo $sqliconnect9;
        echo '</p>';
      }
      else{
        echo '<p style="background-color: green;">Hepato Toxicity : ';
        echo $sqliconnect9;
        echo '</p>';
      }
      ?>
      <?php include "retreive.php";
      if(floatval(@$sqliconnect4) <= -9.2){
      echo '<p class="card-text">The molecular docking bindingscore of ';
      echo $sqliconnect1;  echo ' on PDB:1N3U is '; 
      echo $sqliconnect4;  echo ' kcal/mol due the addition of ';
      echo $sqliconnect3;  echo ' at ';  
      echo $sqliconnect2;  echo ' in Ring A shows that compound '; 
      echo $sqliconnect1;  echo ' has higher tendency towards occupying the active sites of PDB:1N3U. The binding score of '; 
      echo $sqliconnect1;  echo ' confirms its therapeutic potential when compare with EGCG</p></b>';}
      else{
      echo '<p class="card-text">The molecular docking bindingscore of ';
      echo $sqliconnect1;  echo ' on PDB:1N3U is '; 
      echo $sqliconnect4;  echo ' kcal/mol due the addition of ';
      echo $sqliconnect3;  echo ' at ';  
      echo $sqliconnect2;  echo ' in Ring A shows that compound '; 
      echo $sqliconnect1;  echo ' has lower tendency towards occupying the active sites of PDB:1N3U.</p></b>'; 
      }
      ?>
    </div>
  </div>
</div>
</div>
</body>
</html>
