<?php
echo "<div>";
/* Variables */
/* Note: Variables cannot start with a numeric symbol.
	$1name is wrong and will not work */
$name = "Joshua";
$age = 41;

echo 'My name is ' . $name . ' and I am ' . $age . ' years old.';

echo "</div><hr /><div>";

/* IF Statements */
$password = 'password';
if ($password == 'alex') {
	echo 'This is the correct password that equals alex!';
} else {
	echo 'This is the wrong password.';
}
	
echo "</div><hr /><div>";	

$age = 18;
if ($age >= 21) {
	echo "You're old enough to drink in the USA and the UK.";
} else if ($age >= 18) {
	echo "You're not old enough to drink in the USA, but you're okay in the UK.";
} else {
	echo "You're not old enough to drink yet.";
}
	
echo "</div><hr /><div>";	
	
/* Arithmetic Operators */
$num1 = 10;
$num2 = 2;

/* you can use: + - * / % ++ -- */
$result = ($num1 * $num2) / 2;

echo $result;
	
echo "</div><hr /><div>";	

/* Comparison Operators */
/* == != > < >= <= */

$name = 'Joshua';
$age = '41';

if ($name == 'Joshua') {
	echo 'TRUE.';
} else {
	echo 'NOT TRUE.';
}
	
echo "</div><hr /><div>";	

if ($age == 39) {
	echo 'TRUE.';
} else {
	echo 'NOT TRUE.';
}
	
echo "</div><hr /><div>";	

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
	
echo "</div><hr /><div>";	

/* TRIPLE EQUALS */
$number = 10;
$number2 = '10';

if ($number == $number2) {
	echo 'Equal';
} else {
	echo 'Not Equal';
} /* returns EQUAL despite one being a float and the other a string. */
	
echo "</div><hr /><div>";	

/* with triple equal we compare data types as well */
if ($number === $number2) {
	echo 'Equal';
} else {
	echo 'Not Equal';
} /* returns NOT EQUAL because the data types are not the same. */
	
echo "</div><hr /><div>";	

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
	
echo "</div><hr /><div>";	

$name = 'Joshua';
$age = 41;
if ( ($name == 'Joshua' || $name == 'Alex') && ($age == 25 || $age == 31) ) {
	echo 'Hello There';
} else {
	echo 'Go away.';
}
	
echo "</div><hr /><div>";	

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
	
echo "</div><hr /><div>";	

/* Arrays */
$names = 'Alex (21), Billy (16), Dale (49)';
echo $names;

echo "</div><hr /><div>";	
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

	
echo "</div><hr /><div>";	

/* While Loop */
$num = 3;
while ($num >= 0) {
	echo $num.'<br>';
	$num--;
}
/* Additional way to write, does the exact same thing
	remove the curly brackets. 
	Replace beginning curly bracket with a colon 
	Replace ending curly bracket with an "endwhile" */
$num = 3;
while ($num >= 0) :
	echo $num.'<br>';
	$num--;
endwhile;
	
echo "</div><hr /><div>";	

/* Do While Loop */
$num = 1;
do {
	echo $num . '<br>';
	$num++;
} while ($num<=3);
	
echo "</div><hr /><div>";	

/* For Loop */
for (
	$num=1; // Assignment of our variable
	$num<=3; // Condition our variable must meet
	$num++ // action our variable takes after the loop runs.
	) {
	echo $num . '<br>';
}
	
echo "</div><hr /><div>";	

/* For Each Loop */
$names = array('Alex'=>21, 'Billy'=>16, 'Dale'=>49);

foreach ($names as $key => $age) { // NOTE: we somehow define $key to equal the first value in the array and $age as the second value 
	echo $key . ' is ' . $age . '<br>';
}
/* Output is: Alex is 21, Billy is 16, Dale is 49. */


	
echo "</div><hr /><div>";	

/* FUNCTIONS */
function name($name, $age) {
	return 'My name is ' . $name . ' and my age is ' . $age;
}
$returnvalue = name('Joshua', 41);
echo $returnvalue;

	
echo "</div><hr /><div>";	

function add($num1, $num2) {
	$result = $num1 + $num2;
	return $result;
}

echo add(10, 1000);

	
echo "</div><hr /><div>";	

/* $_GET */
echo "<form action='scripts.php' method='GET'>
Name: <br><input type='text' name='name'><br>
Age: <br><input type='text' name='age' size='5'><br><br>
<input type='submit' value='Submit'>
</form>";
$name = $_GET['name'];
$age = $_GET['age'];

if ( isset($name) && isset($age) ) {
		if ( !empty($name) && !empty($age) ) {
			echo 'I am ' . $name . ' and I am ' . $age . ' years old.';
		} else {
		echo 'Nothing has been entered.';
	}
}

	
echo "</div><hr /><div>";	

/* $_POST */
echo "<form action='scripts.php' method='POST'>
Please enter your password:<br>
<input type='password' name='password'><br>
<input type='submit' value='Submit'>
</form>";
$password = 'password';
if ( isset($_POST['password']) && !empty($_POST['password'])) {
	$password_post = $_POST['password'];
	if ($password_post == $password) {
		echo "Correct";
	} else {
		echo "Incorrect";
	}
}







?>