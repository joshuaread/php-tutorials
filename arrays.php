<?php

// $levels = array(1, 2, 3);
// var_dump($levels);
// print_r ($levels);

$levels = array(
	1 => array(
		'name' => 'Level 1',
		'desc' => 'This is the first level'
	),
	2 => array(
		'name' => 'Level 2',
		'desc' => 'This is the second level'
	),
	3 => array(
		'name' => 'Level 3',
		'desc' => 'This is the final level'
	),
);

echo '<pre>', print_r($levels, true), '</pre>';

?>