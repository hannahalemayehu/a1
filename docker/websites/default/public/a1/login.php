<!-- This page is what enables the user to login -->
<?php
//session_start();
require 'header.php';
require 'setup_db.php';
?>
<h2>Login:</h2>


<form action="login.php" method="POST">
 <label>Email: </label>
 <input type="email" name="email" />
 <label>Password: </label>
 <input type="password" name="password" />
 <input type="submit" name="login" value="Login" />
</form>

<?php
if (isset($_POST['login'])) {
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email'); 
$values = ['email' => $_POST['email']];
$stmt->execute($values);

$users = $stmt->fetch();

if (password_verify($_POST['password'], $users['password'])) { 

    $_SESSION['loggedin'] = $users['id'];

    echo "Log in Worked!!";

} 

else {

    echo 'Sorry, your account could not be found';

}

}
?>

<?php
require 'footer.php';

?>