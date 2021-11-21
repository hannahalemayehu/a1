<!--This page is enables the user to register an account on the website from the front end -->
<?php
require 'header.php';
require 'setup_db.php';
?>
<h2>Register</h2>
<form action="register.php" method="post">
		<label>First name:</label>
		<input type="text"  name="first_name" />
		<label>Last name:</label>
        <input type="text"  name="last_name" />
		<label>Email address:</label>
		<input type="text"  name="email" />
        <label>Password:</label>
		<input type="password"  name="password" />
		<input type="submit" value="register" name="register" />
</form>

<?php
$hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
if (isset($_POST['register'])) {
	$stmt = $pdo->prepare('INSERT INTO users(first_name, last_name, email, password)
						   VALUES ( :first_name, :last_name, :email, :password)');



	$values = [
		'first_name' => $_POST['first_name'],
		'last_name' => $_POST['last_name'],
		'email' => $_POST['email'],
        'password' => $hash
	];
	
	$stmt->execute($values);

	echo 'You have now registered';

    echo '<p><a href="login.php">To login into your account</a>';
}

?>
  	
<?php
require 'footer.php'
?>