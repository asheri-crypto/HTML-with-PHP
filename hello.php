<!DOCTYPE html>
<html>
   <head>
    <title>POST AND PRE</title>
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            background-color: #1a1a00;
            color:  #ffff00;
        }
    </style>
    
   </head> 
    <body>
        <h2>PHP POST/PRE INCREMENT AND DECREMENT</h2>
<?php
echo"<p>PRE INCREMENT</p><br>";

echo"<p>PRE INCREMENT is when you first increase the original value by one then increase the second by one</p> <br>";
echo"EXAMPLE :";


$x= 34;
$y=++$x;

echo"If the initial value of x is 34 and y is x after pre-increment is : $y and also x will be $x ";

echo"<br>";

echo "<p>POST INCREMENT</p><br>";

echo"<p>POST INCREMENT is when the original value is first assigned to second number then increased to the first.</p><br>";
echo"EXAMPLE";

$v= 34;
$b= $v++;

echo"If the original value of v is 34 then the value of b after post increment is $b and the value of v is $v";

echo"<br>";

echo"PRE DECREMENT"; 

echo"<br>";

echo"<p>PRE DECREMENT AND POST DECREMENT are the same as PRE INCREMENT
 and POST DECREMENT but the difference POST DECREMENT decreases the value by 1</p>";
?>

   </body>

</html>