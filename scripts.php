<?php
echo "<div>";
/* Variables */
/* Note: Variables cannot start with a numeric symbol.
	$1name is wrong and will not work */
$name = "Joshua";
$age = 41;

echo 'My name is ' . $name . ' and I am ' . $age . ' years old.';

echo "</div><div>";

/* IF Statements */
$password = 'password';
if ($password == 'alex') {
	echo 'This is the correct password that equals alex!';
} else {
	echo 'This is the wrong password.';
}
	
echo "</div><div>";	

$age = 18;
if ($age >= 21) {
	echo "You're old enough to drink in the USA and the UK.";
} else if ($age >= 18) {
	echo "You're not old enough to drink in the USA, but you're okay in the UK.";
} else {
	echo "You're not old enough to drink yet.";
}
	
/* Arithmetic Operators */
	
?>