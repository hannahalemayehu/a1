<!--this page is to enable an admin to delete a category -->

<?php
//session_start();
require 'header.php';
require 'setup_db.php';
require 'sideBar.php';

?>
<h2>Deleting an Category:</h2>
<form action="deleteCategory.php" method="post">
    <label>Category Name:</label>
    <select name="name" id="name">
		<?php
			$delCat = $_POST['name'];
            $stmt = "DELETE FROM Categories WHERE name ='$delCat' LIMIT 1";
            //$sql = 
			$stmt->execute();
			//to print the articles in the database
			while ($delCat = $stmt ->fetch()) {
			echo '<option value="'.$delCat['name'].'">'.$delCat['name'].'</option>';	}

            //if(isset($link, $sql)){ //Source: https://www.tutorialrepublic.com/php-tutorial/php-mysql-delete-query.php
                echo "Category is deleted successfully.";
            //}
		?>
</select>

<input type="submit" value="delete" name="delete" />

</form>


<?php
$values = [
	'name' => $_POST['name']
];


?>
<?php
require 'footer.php'
?>