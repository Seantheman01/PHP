<!DOCTYPE html>
<head>
</head>
<body>
<!-- opdracht 1 -->
<?php
function lijst_optellen($numbers) {
    $sum = 0;

    foreach ($numbers as $number) {

        $sum += $number;

    }

    return $sum;

}

$getallenLijst = [1, 2, 3, 4];

$result = lijst_optellen($getallenLijst);

list($a, $b, $c, $d) = $getallenLijst;
echo $b + $d;
echo "</br>"
?>

<!-- Opdracht 2 -->
<?php
function lnagste_naam($dieren) {

}

$dierenLijst = ['kat', 'hond', 'olifant'];

$result = lnagste_naam($dierenLijst);


?>

</body>
</html>