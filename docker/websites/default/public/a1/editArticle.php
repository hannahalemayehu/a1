<!-- This page is about editting articales that are present-->
<?php
//session_start();
require 'header.php';
require 'setup_db.php';
require 'sideBar.php';
?>
<h2>Editing an Article:</h2>

<?php
$stmt = $pdo->prepare('SELECT * FROM articles WHERE article_id = :article_id');
$values = [
 'article_id' => $_GET['id']
 
];
$stmt->execute($values);
//Fetch the first record from the query
$article = $stmt->fetch();
//Display the form but write the value to each input
?>
<form action="editArticle.php" method="POST">
    <label>Title:</label>
    <input type="hidden" name="title" value="<?php echo $article['title']; ?>" />
    <label>Body:</label>
    <textarea name="hidden"></textarea> <?php echo $article['body']; ?>" />
    <label>category:</label>
    <input type="category" name="category" value="<?php echo $article['category']; ?>" />
    <select name="category_id" id="category">
		<?php
					$stmt = $pdo->prepare('SELECT category_id, name FROM Categories');
					$stmt->execute();
					//to print the categories in the database
					while ($categories = $stmt ->fetch()) {
					echo '<option value="'.$categories['category_id'].'">'.$categories['name'].'</option>';	}

					?>
</select>
    <label>Date:</label>
    <input type="hidden"  name="date_posted" value="<?php echo $article['date']; ?>" />
    <input type="submit" name="submit" value="submit" />
</form>
<?php
require 'footer.php';
?>