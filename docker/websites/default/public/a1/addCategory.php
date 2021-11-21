
<!--This page is enables the admin to add a category on the website from the front end -->
<?php
require 'header.php';
require 'setup_db.php';
require 'sideBar.php';

?>
<h2>Add a category</h2>

<form action="addCategory.php" method="post">
		<label>Category Name:</label>
		<input type="text"  name="name" />
		<input type="submit" value="submit" name="submit" />

</form>
<?php

if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('INSERT INTO Categories(name)
						   VALUES (:name)');

	$values = [
		'name' => $_POST['name'],
		
	];
	
	$stmt->execute($values);

	echo 'Category Added';

    echo '<p><a href="addCategory.php">To go back and make another category </a>';

	?>

<?php
}
require 'footer.php';
?>