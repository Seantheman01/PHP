<!DOCTYPE html>
<head>
</head>
<body>

<!-- opdracht 1 -->
<?php
function grootste_dier($dieren) {
    $sum = 0;

    foreach ($dieren as $dier) {

        $sum += $dier;

    }

    return $sum;

}

$getallenLijst = ['kat', 'hond', 'olifant'];

$result = grootste_dier($getallenLijst);

if($result%2==0) {
    echo $result;
}
?>
</body>