<!--this is for the home page, which displays the latest article-->
<?php
require 'header.php';
require 'setup_db.php';
//require 'sideBar.php';
?>

<?php
//$article_id_from_url = $_GET['id'];
$sql = 'SELECT article_id, title, body, p_first_name, p_last_name, date_posted FROM articles LIMIT 10;';
$results = $pdo->query($sql);

while($row = $results->fetch()){
$id = $row['article_id'];
$title = $row['title'];
$body = $row['body'];
$p_first_name = $row['p_first_name'];
$p_last_name = $row['p_last_name'];
$date_posted = $row['date_posted'];
$url = 'article.php?id='.$row['article_id'];

//$stmt->execute();
echo '<ul>';
echo '<h3> '.$title.'</h3>';
echo '<em>Posted On: '.$date_posted.'</em>';

echo '<a href="'.$url.'">Read article'.'</a>';
echo '</ul>';

//echo 'hello world from '.$p_last_name;
}
?>

<?php
//require 'sideBar.php';
require 'footer.php';

?>
	