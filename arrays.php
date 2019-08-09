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

// echo $levels[1]['name'];
/* Additional level *********
$levels[4] = array(
		'name' => 'Level 4',
		'desc' => 'This is the fourth level'
	);
*/

// echo '<pre>', print_r($levels, true), '</pre>';

/* Turn this into a global array by: */
$GLOBALS['level'] = array(
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

// echo $GLOBALS['level'][2]['desc'];

function level_data( $level, $data ) {
	if (array_key_exists($level, $GLOBALS['level']) === true ) {
		return $GLOBALS['level'][$level][$data];
	} else {
		return false;
	}
}
// echo level_data( 3, 'desc');

echo '<pre>', print_r($GLOBALS, true), '</pre>';


?>