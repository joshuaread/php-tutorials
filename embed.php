<?php
if ( isset($_POST['name'])) {
	$name = $_POST['name'];
	if ( !empty($name)) {
		$sentence = $name . ' woke up, and made a PHP tutorial.';
	} else {
		echo 'Please type your name.';
	}
}
?>
<html>
	<head>
	</head>
	<body>
		<form action="embed.php" method="post">
			Type your name: <input type="text" name="name" value="<?php echo $name; ?>"><br />
			<input type="submit" value="Submit">
		</form>
		
		<textarea rows="7" cols="25"><?php echo $sentence; ?></textarea>
	</body>
</html>