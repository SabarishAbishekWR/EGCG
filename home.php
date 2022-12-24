<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="title">
    <h1><b>EGCG - S</b></h1>
</div>
<form action="out.php">
<div class="container">                                          
<label for="pos">Select a Position :</label>

<select name="pos" id="pos">
  <option value="C-6">C-6</option>
  <option value="C-8">C-8</option>
</select><br>
<label for="comp">Select a Compound :</label>

<select name="comp" id="comp">
  <option value="Bromine">Bromine</option>
  <option value="Chlorine">Chlorine</option>
  <option value="Fluorine">Fluorine</option>
  <option value="Iodine">Iodine</option>
  <option value="NH₂">NH₂</option>
  <option value="NO₂">NO₂</option>
</select><br>
  <button class="btn btn-primary" type="submit" name="btn">Check Activity</button>
</div>
</form>
</body>
</html>
