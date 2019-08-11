<?php

echo '<div>';	
	
$number = 1000000;
$number--;

$number_formatted = number_format($number, 0);
echo 'You have &pound;' . $number_formatted;	

echo '</div><div>';
	
if (isset($_POST['text'])) {
	echo nl2br(htmlentities($_POST['text']));
}

echo '</div>';
	
?>

<form action="" method="post">
	<textarea name="text"></textarea>
	<input type="submit" />
</form>