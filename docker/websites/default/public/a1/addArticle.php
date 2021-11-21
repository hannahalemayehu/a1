
<?php
require 'header.php';
require 'setup_db.php';
require 'sideBar.php';

?>

<h2>Add an article:</h2>

<form action="addArticle.php" method="post">
		<label>Title:</label>
		<input type="text"  name="title" />
		<label>Category:</label>
<select name="category_id" id="category">
		<?php
			$stmt = $pdo->prepare('SELECT category_id, name FROM Categories');
			$stmt->execute();
			//to print the categories in the database
			while ($categories = $stmt ->fetch()) {
			echo '<option value="'.$categories['category_id'].'">'.$categories['name'].'</option>';	}

			?>
</select>
        <label>Publisher first name:</label>
		<input type="text"  name="p_first_name" />

		<label>Publisher last name:</label>
		<input type="text"  name="p_last_name" />

		<label>Body:</label>
		<textarea name="body"></textarea>

		<label>Date:</label>
		<input type="date"  name="date_posted" />   
		
		<input type="submit" value="submit" name="submit" />
        
	</form>
<?php

$date_posted = date('Y-m-d H:i:s');
if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('INSERT INTO articles(title, body, category_id, p_first_name, p_last_name, date_posted)
						   VALUES ( :title, :body, :category_id, :p_first_name, :p_last_name, :date_posted )');
$values = [
	'title' => $_POST['title'],
	'category_id' => $_POST['category_id'],
	'body' => $_POST['body'],
	'p_first_name' => $_POST['p_first_name'],
	'p_last_name' => $_POST['p_last_name'],
	'date_posted' => $_POST['date_posted']
]; 

		$stmt->execute($values);
}

?>

<?php
	echo 'Article Added';

    //echo '<p><a href="addArticle.php">To go back and make another articles</a>';

   // echo '<p><a href="adminArticle.php">To back </a>';

require 'footer.php';
?>
