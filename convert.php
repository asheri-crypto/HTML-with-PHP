<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CELSIUS KELVIN CONVERTER</title>
</head>
<body>
  <h2>THIS IS THE CELSIUS TO KELVIN CONVERTER.</h2>
  <br>
  <form action="#" method="post">
    <label for="converter">ENTER DEGREE CELSIUS HERE :</label><br>
    <input  type="text" id="converter" name="converter"><br><br>
    <input type="submit" name="convert" value="CONVERT">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $c = $_POST['converter'];
      $k = $c + 273.15;
      echo "<h3>$c &deg;C = $k K</h3>";
    }
  ?>
</body>
</html>
