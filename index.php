<!DOCTYPE html>
<head>
</head>
<style>
#tijd {
    <?php
        date_default_timezone_set("Europe/Amsterdam");
        $tijd = date("h:i:s");
        $ochtend = "morning.png";
        $middag = "afternoon.png";
        $avond = "evening.png";
        $nacht = "night.png";
    ?>
}

</style>
<body style = "background-image: url(/fotos/<?php echo $ochtend; ?>);">
<h1 style = "text-align: center; margin: 280px; ">Goede morgen!</h1>
<h1 style = "text-align: center; margin 280px; " id="tijd">Het is nu <?php echo $tijd; ?></h1>
</body>
</html>