<?php
 $server = 'mysql';
 $username = 'student';
 $password = 'student';

 $schema = 'csy2028';
 $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
?>