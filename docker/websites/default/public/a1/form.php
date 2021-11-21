<!--This page is about enabling the user to fill in a form to comment on an artical  -->

<?php
require 'setup_db.php';
?>
<!--This page is enables the user to comment on an article -->
<h3>comment</h3>
<?php

if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('INSERT INTO person(firstname, surname, comment)
						   VALUES ( :firstname, :lastname, :comment)');


	$values = [
		'firstname' => $_POST['firstname'],
		'lastname' => $_POST['lastname'],
        'comment' => $_POST['comment'],

	];
	
	$stmt->execute($values);

	echo 'Comment Added';

}
else {
	?>
    
<form action="form.php" method="POST">
	<label>First Name:</label>		
    <input type="text" name="firstname"/>
	<label>Last Name:</label>
    <input type="text" name="lastname" />				
	<label>Comment</label> <textarea></textarea>
                    
  <!--  <label>Field 2</label> <input type="text" /> -->
					
    <input type="submit" name="submit" value="Submit" />
      
    
</form>
<?php
        //$date = new DateTime();
        //echo $date->format('d/m/Y');
    ?>
	<?php
}

    ?>
<?php
//var_dump($_POST);
?>
