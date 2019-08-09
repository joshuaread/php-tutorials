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
	
echo "</div><div>";	
	
/* Arithmetic Operators */
$num1 = 10;
$num2 = 2;

/* you can use: + - * / % ++ -- */
$result = ($num1 * $num2) / 2;

echo $result;
	
echo "</div><div>";	

/* Comparison Operators */
/* == != > < >= <= */

$name = 'Joshua';
$age = '41';

if ($name == 'Joshua') {
	echo 'TRUE.';
} else {
	echo 'NOT TRUE.';
}
	
echo "</div><div>";	

if ($age == 39) {
	echo 'TRUE.';
} else {
	echo 'NOT TRUE.';
}
	
echo "</div><div>";	

$age;
$status = false;

if ($age >= 21) {
	$status = true;
}

if ($status == true) {
	echo "You're allowed.";
} else {
	echo "You're NOT allowed.";
}
	
echo "</div><div>";	

/* TRIPLE EQUALS */
$number = 10;
$number2 = '10';

if ($number == $number2) {
	echo 'Equal';
} else {
	echo 'Not Equal';
} /* returns EQUAL despite one being a float and the other a string. */
	
echo "</div><div>";	

/* with triple equal we compare data types as well */
if ($number === $number2) {
	echo 'Equal';
} else {
	echo 'Not Equal';
} /* returns NOT EQUAL because the data types are not the same. */
	
echo "</div><div>";	

/* LOGICAL OPERATORS */
/*
1. Number entered
2. Upper limit = 100
3. Lower limit = 1
4. Between 1 and 100

We need to use OR || AND && NOT !
*/

$num = 48;
if ($num >= 1 && $num <= 100) {
	echo 'Number is fine.';
} else {
	echo 'Number must be between 1 and 100, inclusive.';
}
	
echo "</div><div>";	

$name = 'Joshua';
$age = 41;
if ( ($name == 'Joshua' || $name == 'Alex') && ($age == 25 || $age == 31) ) {
	echo 'Hello There';
} else {
	echo 'Go away.';
}
	
echo "</div><div>";	

/* SWITCH STATEMENT */
$num = 10;
switch ($num) {
	case 10:
		echo 'Ten';
	break; /* end of our if statement */
	case 9:
		echo 'Nine';
	break; /* end of our if statement */
	case 8:
		echo 'Eight';
	break; /* end of our if statement */
	
	default: /* similar to an else statement */
		echo 'Number not recognised.';
}
	
echo "</div><div>";	

/* Arrays */
$names = 'Alex (21), Billy (16), Dale (49)';
echo $names;

echo "</div><div>";	
/* Key Value Pairs i.e. 'Alex' = Key and VALUE = =>21 */
// $names = array('Alex'=>21, 'Billy'=>33, 'Dale'=>49);
// echo $names['Dale'];
// print_r($names);
/* Multi-dimensional array */
$names = array(
	'Alex'=>array('Age'=>21, 'Hair'=>'Blonde', 'Food'=>array('Pizza', 'Pasta')), 
	'Billy'=>array('Age'=>33, 'Hair'=>'Brown'), 
	'Dale'=>array('Age'=>49, 'Hair'=>'Blonde')
	);
echo $names['Alex']['Food'][0];
/* outputs "PIZZA" */

	
echo "</div><div>";	

/* While Loop */



?>