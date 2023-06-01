<!DOCTYPE html>
<head>
</head>
<style>
#tijd {
    background-size: cover;
    background-position: center;
    width: 400px;
    height: 400px;
}

<?php
    date_default_timezone_set("Europe/Amsterdam");
    $tijd = date("H:i:s");
?>

h1 {
    position: absolute;
    top: 55%;
    left: 18%;
}

h2 {
    position: absolute;
    top: 85%;
    left: 45%;
}
</style>

<?php 
if ($tijd >= "06:00:00" && $tijd < "12:00:00") {
    $background = '<body style = "background-image: url(fotos/morning.png)">';
    echo '<h2>Goede morgen!</h2>';
}
elseif ($tijd >= "12:00:00" && $tijd < "18:00:00") {
    $background = '<body style = "background-image: url(fotos/afternoon.png)">';
    echo '<h2>Goede middag!</h2>';
}
elseif ($tijd >= "18:00:00" && $tijd < "00:00:00") {
    $background = '<body style = "background-image: url(fotos/evening.png)">';
    echo '<h2>Goede avond!</h2>';
}
elseif ($tijd >= "00:00:00" && $tijd < "06:00:00") {
    $background = '<body style = "background-image: url(fotos/night.png)">';
    echo '<h2>Goede nacht!</h2>';
}
echo $background; ?>
<h1 style = "text-align: center; margin: 280px; " id="tijd">Het is nu <?php echo $tijd; ?></h1>
</body>
</html>