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

if($sum%2==0)  
    echo "ja";
echo "</br>";
?>
</body>