<?php
/* Database */
$db_host = 'd_local_environment-main';
$db_user = 'root';
$db_pass = 'mysql';
$db_database = 'studentenadmin';

/* End */

$db = new PDO('mysql:host='.$db_host.'; port=3306; dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>