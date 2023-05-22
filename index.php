<!DOCTYPE html>
<head>
</head>
<?php
    date_default_timezone_set("Europe/Amsterdam");
    echo date("h:i:s");
    $plaatje = "morning.png";
?>
    <body style = "background-image: url('/fotos/<?php echo $plaatje; ?>');">
    <h1>Goedemorgen!</h1>
    <div></div>
    </body>
</html>