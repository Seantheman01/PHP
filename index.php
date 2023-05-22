<!DOCTYPE html>
<head>
</head>
<style>
#tijd {
    <?php
        date_default_timezone_set("Europe/Amsterdam");
        $tijd = date("h:i:s");
        $plaatje = "morning.png";
    ?>
}
</style>
<body style = "background-image: url(/fotos/<?php echo $plaatje; ?>);">
<h1 style = "text-align: center; margin: 280px; ">Goedemorgen!</h1>
<h1 style = "text-align: center; margin 280px; " id="tijd">Het is nu <?php echo $tijd; ?></h1>
</body>
</html>