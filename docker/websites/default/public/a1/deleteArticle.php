<!--this page is to enable an admin to delete an  article -->

<?php
//session_start();
require 'header.php';
require 'setup_db.php';
require 'sideBar.php';

?>
<h2>Deleting an Article:</h2>
<form action="deleteArticle.php" method="post">
    <label>Article ID:</label>
    <select name="article_id" id="articles">
		<?php
			$delArticle = $_POST['id'];
            $stmt = "DELETE FROM articles WHERE article_id='$delArticle' LIMIT 1";
            //$sql = 
			$stmt->execute();
			//to print the articles in the database
			while ($delArticle = $stmt ->fetch()) {
			echo '<option value="'.$delArticle['article_id'].'">'.$delArticle['article_id'].'</option>';	}

            //if(isset($link, $sql)){ //Source: https://www.tutorialrepublic.com/php-tutorial/php-mysql-delete-query.php
                echo "Article is deleted successfully.";
            //}
		?>
</select>

<input type="submit" value="delete" name="delete" />

</form>


<?php
$values = [
	'article_id' => $_POST['article_id']
];


?>
<?php
require 'footer.php'
?>