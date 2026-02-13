<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif ;
            background-color: #4d004d;                             
        }
        form{
            background-color: #ff99ff;
            padding:25px;
            border-radius:10px;
            max-width:500px;
            margin:auto;
        }
        h2,h3{
            text-align: center;
            font-weight: 300px;
            font-size: larger;
        }
    </style>
</head>
<body>
    <h2>CELCIUS-FAHRENHEIT CONVERTER</h2>
       <br>
    <form method="post" action="#">
        <label>Enter Temperature in Celsius:</label>
        <input type="number" name="celsius" step="any" placeholder="temperature in degree celcius" required>&nbsp;
        <input type="submit" name="convert" value="Convert">
    </form>

    <?php
    if (isset($_POST['convert'])) {

        $celsius = $_POST['celsius'];

        $fahrenheit = ($celsius * 9/5) + 32;

        echo "<h3>$celsius °C = $fahrenheit °F</h3>";
        
    }
    ?>
</body>
</html>
