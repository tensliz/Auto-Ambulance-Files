
<?php
$db1 = new mysqli('localhost', 'root', '', 'test');
$db2 = new mysqli('localhost', 'root', '', 'quote_db');

if ($db1->connect_error || $db2->connect_error) {
    die('Connection failed: ' . $db1->connect_error . ' | ' . $db2->connect_error);
}
?>