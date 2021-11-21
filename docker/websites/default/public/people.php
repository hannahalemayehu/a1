<?php

$server = 'mysql';
$username = 'student';
$password = 'student';

$schema = 'csy2028';

$pdo = new PDO('mysql:dbname=' . $schema . ':host=' . $server, $username, $password);


$results = $pdo->query('SELECT * FROM person');
foreach ($results as $row) {
 echo '<p>' . $row['firstname'] . ' ' . $row['lastname'] . ' was born on ' . $row['birthday'] . 'and their email address is' . $row['email_address'] . '</p>';

}
 
?>





 