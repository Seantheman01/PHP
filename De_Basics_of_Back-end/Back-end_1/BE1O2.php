<?php 
echo "<h1>Hello world!</h1>";

define("HELLO", "<h1>Hello world!</h1>");
echo HELLO;

$x = "Learning PHP";
$y = HELLO;
echo $x = $y;

$a = "Hello";
$b = "world!";
echo "<h1>".$a." ".$b."</h1>";

$arr = array("Hello", "world");
echo "<h1>".$arr[0]." ".$arr[1]."</h1>"
?>