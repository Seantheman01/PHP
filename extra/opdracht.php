<?php
/* Database */
$db_host = 'mariadb';
$db_user = 'root';
$db_pass = 'mysql';
$db_database = 'studentenadmin';

/* End */

$db = new PDO('mysql:host='.$db_host.'; port=3306; dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$select = $db->prepare("SELECT `column`, `column2` FROM `table`");
$select->execute();
while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
    $db_col = $row['column'];
    $db_col2 = $row['column2'];
    echo "$db_col $db_col2<br>";
}
?>