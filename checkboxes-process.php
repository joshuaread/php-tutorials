<?php
/*	
if ( isset($_POST['agree']) && $_POST['agree'] == 'true') {
	echo "Set and correct value.";
} else {
	echo "You must agree.";
	}
*/

if (isset ($_POST['language'])) {
	$language = $_POST['language'];
	echo 'You selected ' . $language;
}	
?>