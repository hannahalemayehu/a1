
<!-- php tag

function navigation() {
 echo '<ul>';
 echo ' <li><a href="index.php">Home</a></li>';
 echo ' <li><a href=".php"></a></li>';
 echo ' <li><a href="contact.php">Contact</a></li>';
 echo '</ul>';
}
--> 

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css"/>
		<title>Northampton News - Home</title>
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
						<li><a class="articleLink" href="technology.php">Technology</a></li>
						<li><a class="articleLink" href="sport.php">Sports</a></li>
						<li><a class="articleLink" href="business.php">Business</a></li>
					</ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				</li>
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />

		<main>
		<nav>
				<ul>
					<li><a href="#">Sidebar</a></li>
					<li><a href="#">This can</a></li>
					<li><a href="#">Be removed</a></li>
					<li><a href="#">When not needed</a></li>
				</ul>
		</nav>
			<article>
				

			<?php>
			
			echo $heading
			echo $content
			?>
			</article>
		</main>

        
        <footer>
		    &copy; Northampton News 2017
		</footer>

	</body>
</html>

