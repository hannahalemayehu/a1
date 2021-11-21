<?php
require 'setup_db.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css"/>
		<title>Northampton News </title>
	</head>
	<body>
		<header>
			<section>
				<h1>Northampton News</h1>

			</section>
		</header>
		
		<nav>
			<ul>
				
				<li><a href="index.php">Latest Articles</a></li>
				<li><a href="#">Select Category</a>
					<ul>
					<?php
					$stmt = $pdo->prepare('SELECT category_id, name FROM Categories');
					$stmt->execute();
					//to print the categories in the database
					while ($categories = $stmt ->fetch()) {
					echo '<li><a class="articleLink" href="category.php?category_id=' . $categories['category_id'] . '"/>' . $categories['name'];
					}

					?>
					<!--	<li><a class="articleLink" href="Technology.php">Technology</a></li>
						<li><a class="articleLink" href="Sport.php">Sports</a></li>
						<li><a class="articleLink" href="Business.php">Business</a></li> -->
					</ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="adminLogin.php">Admin Login</a></li>

				</li>
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />
		<main>   