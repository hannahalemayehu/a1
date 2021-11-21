<!--This page is enables an admin to register an admin on the website from the front end -->

<?php
require 'header.php';
require 'setup_db.php';
require 'sideBar.php';

?>
<h2>Registering Admins:</h2>

<?php

if (isset($_POST['submit'])) {
	unset($_POST['submit']);//Remove submit value from array
	$stmt = $pdo->prepare('INSERT INTO admin( firstname, lastname, date_of_birth, email_address, password)
						   VALUES ( :firstname, :lastname, :date_of_birth, :email_address, :password)');
						   //hash the password

$hash = password_hash($_POST['password'],PASSWORD_DEFAULT);

//echo $hash;

$values = [
	'firstname' => $_POST['firstname'],
	'lastname' => $_POST['lastname'],
	'date_of_birth' => $_POST['date_of_birth'],
    'email_address' => $_POST['email_address'],

    'password' => $hash
];

$stmt->execute($values);

echo "<meta http-equiv='refresh' content='0'>";//refresh the page to show updated list
//soruce: https://stackoverflow.com/questions/10643626/refresh-page-after-form-submitting

}

	?>

	<form action="addAdmin.php" method="post">
        
        <label>First name:</label>
		<input type="text"  name="firstname" />
		<label>Last name:</label>
		<input type="text"  name="lastname" />
        <label>Date of birth:</label>
		<input type="date"  name="date_of_birth" />    
		<label>Email address:</label>
		<input type="text"  name="email_address" />
        <label>password:</label>
		<input type="password"  name="password" />
		<input type="submit" value="submit" name="submit" />
	</form>

	<?php
		echo 'Admin Added';

		echo '<p><a href="addAdmin.php">To make another admin</a>';
	
require 'footer.php'
?>