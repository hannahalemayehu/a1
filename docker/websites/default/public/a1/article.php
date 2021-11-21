<!-- this is page is what displays the article that the user selected -->
<?php
require 'header.php';
require 'setup_db.php';
?>

<?php
$idUrl = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM articles WHERE article_id= $idUrl");
//$sql = 'SELECT $article_id_from_url = .$_GET['article_id']';
//$results = $pdo->query($stmt);
$stmt->execute();

while($row = $stmt->fetch()){
$id = $row['article_id'];
$title = $row['title']; 
$body = $row['body'];
$p_first_name = $row['p_first_name'];
$p_last_name = $row['p_last_name'];
$date_posted = $row['date_posted'];
$url = 'article.php?id='.$row['article_id'];

//$stmt->execute();
echo '<ul>';
echo '<h1> '.$title.'</h1>';
echo '<em>Posted On: '.$date_posted.'</em>';
echo '<h3>publisher first name:'.$p_first_name.'</h3>';
echo '<h3>publisher last name:'.$p_last_name.'</h3>';
echo '<p> '.$body.'</p>';

}

?>

<?php
require 'form.php';
require 'footer.php';
?>