<!-- This page is what enables the  admin to login -->
<?php
//session_start();
require 'header.php';
require 'setup_db.php';
require 'sideBar.php';

?>
<h2>Admin Login:</h2>

<form action="adminLogin.php" method="POST">
 <label>Email: </label>
 <input type="email" name="email_address" />
 <label>Password: </label>
 <input type="password" name="password" />
 <input type="submit" name="login" value="Login" />
</form>

<?php



if (isset($_POST['login'])) {
    $stmt = $pdo->prepare('SELECT * FROM admin WHERE email_address = :email_address'); 
$values = ['email_address' => $_POST['email_address']];
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
require'footer.php';
?>