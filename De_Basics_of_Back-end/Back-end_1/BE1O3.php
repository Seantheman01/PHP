<?php

$getal1 = mt_rand(1, 10);
$getal2 = mt_rand(1, 10);

echo $getal1 ." + ".  $getal2 ." = ". $getal1 + $getal2 ."<br>";
echo $getal1 ." - ".  $getal2 ." = ". $getal1 - $getal2 ."<br>";
echo $getal1 ." x ".  $getal2 ." = ". $getal1 * $getal2 ."<br>";
echo $getal1 ." : ".  $getal2 ." = ". $getal1 / $getal2 ."<br>";
?>

<?php
for ($x = 0; $x <= 6; $x++) {
    echo "6 x ".$x." =". 6*$x;
}
?>