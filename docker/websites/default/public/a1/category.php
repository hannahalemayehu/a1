<?php
require 'header.php';
require 'setup_db.php';
//require 'sideBar.php';
?>

<?php
$catId = $_GET['category_id'];
$stmt = "SELECT article_id, title, body, p_first_name, p_last_name, date_posted FROM articles WHERE category_id= $catId" ;
//$pdo->prepare(
$results = $pdo->query($stmt);

//output
while($row = $results->fetch()){
$id = $row['article_id'];
$title = $row['title'];
$p_first_name = $row['p_first_name'];
$p_last_name = $row['p_last_name'];
$date_posted = $row['date_posted'];
$url = 'article.php?id=' .$id;
//$url = 'category.php?id='.$row['category_id'];

//$stmt->execute();
echo '<ul>';
echo '<h3> '.$title.'</h3>';
echo '<em>Posted On:'.$date_posted.'</em>';

echo '<a href=article.php?id="'.$id.'">Read article'.'</a>';
echo '</ul>';

}
?>
<!--<a class="articleLink" href="article.php">.$title</a> -->
<?php
require 'footer.php';

?>
	