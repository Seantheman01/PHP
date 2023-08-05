<!DOCTYPE html>
<head>
</head>
<style>
h1 {
    text-align: center;
    padding-top: 20%;
}

h2 {
    text-align: center;
}
</style>

<?php 
date_default_timezone_set("Europe/Amsterdam");
$tijd = date("H:i:s");

if ($tijd >= "06:00:00" && $tijd < "12:00:00") {
    $background = '<body style = "background-image: url(fotos/morning.png)">';
    echo '<h1>Goede morgen!</h1>';
}
elseif ($tijd >= "12:00:00" && $tijd < "18:00:00") {
    $background = '<body style = "background-image: url(fotos/afternoon.png)">';
    echo '<h1>Goede middag!</h1>';
}
elseif ($tijd >= "18:00:00" && $tijd < "00:00:00") {
    $background = '<body style = "background-image: url(fotos/evening.png)">';
    echo '<h1>Goede avond!</h1>';
}
elseif ($tijd >= "00:00:00" && $tijd < "06:00:00") {
    $background = '<body style = "background-image: url(fotos/night.png)">';
    echo '<h1>Goede nacht!</h1>';
}
echo $background; ?>
<h2 style = "text-align: center; margin: 280px; " id="tijd">Het is nu <?php echo $tijd; ?></h21>
</html>