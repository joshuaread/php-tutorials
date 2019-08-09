<?php
	$name = "kyle";

	if ( $name == "alex") {
		echo "Hi Alex.";
	} else {
	?>	
		You're not Alex? Please type your name:<br>
		<form action='better-embed.php' method='post'>
			<input type='text' name='name'><br />
			<input type='submit' value='Submit'>
		</form>
<?php } ?>