<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="lay-out.css">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
        $nameErr = "Vul uw naam in";
        } else {
        $name = test_input($_POST["name"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "Vul uw email in";
        } else {
        $email = test_input($_POST["email"]);
        }
    }
    ?>
    <p><span class="error">* Vul iets in</span></p>
    <form method="post"> 
    Name: <input type="text" name="name">
    <span class="error">* </span><br>
    E-mail: <input type="text" name="email">
    <span class="error">* </span><br>
    <div class="button">
        <button type="submit">Verzenden</button>
    </div>
</body>
</html>