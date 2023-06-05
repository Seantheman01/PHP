<?php
function db_connect(): PDO
{
    $host = '127.0.0.1';
    $db_name = 'student';
    $db_user = 'username';
    $db_password = 'password';
    $db = "mysql:host=$host;dbname=$db_name;charset=utf8mb4";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    return new PDO($db, $db_user, $db_password, $options);
}

$db = db_connect();//Assign to variable before use
?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    
</body>
</html>