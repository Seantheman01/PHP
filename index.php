<!DOCTYPE html>
<head>
</head>
<?php
    date_default_timezone_set("Europe/Amsterdam");
    echo date("h:i:s");
    $plaatje = "morning.png";
?>
<body style = "background-image: url(/fotos/<?php echo $plaatje; ?>);">
<h1 style = "text-align: center; margin: 280px; ">Goedemorgen!</h1>
</body>
</html>