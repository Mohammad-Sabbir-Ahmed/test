<?php 

	if(isset($_POST['submit'])){
	
		// cookie for gender
		setcookie('gender', $_POST['gender'], time() + 86400);

		session_start();	
		$_SESSION['name'] = $_POST['name'];
		
		header('location: index.php') 	;

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="text" name="name">
		<select name="gender">
			<option value="male" class="grey-text">Male</option>
			<option value="female" class="grey-text">Female</option>
		</select>
		<input type="submit" name="submit" value="submit">
		
	</form>
</body>
</html>