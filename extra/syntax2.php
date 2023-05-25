<!DOCTYPE html>
<head>
</head>
<body>

<!-- opdracht 2 -->
<?php
function langste_woord($dieren) {
    $sum = '';

    foreach ($dieren as $dier) {
        if (strlen($dier) > strlen($sum)) {
            $sum = $dier;
        }
    }

    return $sum;
}

$dierenLijst = ['kat', 'hond', 'olifant'];
$result = langste_woord($dierenLijst);
echo $result;

?>
</body>