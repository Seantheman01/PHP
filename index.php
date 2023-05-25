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
function langste_naam($dieren) {

    return $dieren;

}

$dierenLijst = ['kat', 'hond', 'olifant'];

$result = langste_naam($dierenLijst);

if ($dieren );
    echo ;
?>

<!-- Opdracht 3 -->
<?php
function goede_volgorde($numbers) {
    $sum = 0;

    foreach ($numbers as $number) {

        $sum += $number;

    }

    return $sum;

}

$getallenLijst = [1, 2, 3, 4];

$result = goede_volgorde($getallenLijst);

list($a, $b, $c, $d) = $getallenLijst;
echo $b + $d;
echo "</br>"

?>

</body>
</html>