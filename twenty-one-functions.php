<?php

// mb_substr();
// explode();
// implode();    or join();
// nl2br();
// strrev();
// strtolower();
// strtoupper();
// substr_count();
// substr_replace();

$string = 'hello!';
$body = 'Hello, this is long string and will be displayed if length is < 20';
$numbers = '1 2 3 4 5';
$explode_array = explode(' ', $numbers);
$implode_array = implode($explode_array, ' ');
echo '<p>echo strlen($string); = ';
echo strlen($string);
echo '<p>echo mb_substr($body,0,2); = ';
echo mb_substr($body,0,12);
echo '</p><p>echo $explode_array[1] = ';
echo $explode_array[1];
echo '</p><p>print_r $explode_array = explode(" ", $numbers); = ';
print_r($explode_array);
echo '</p><p>echo $implode_array = implode(" ", $numbers); = ';
echo $implode_array;
echo '</p><p>echo strrev($string); = ';
echo strrev($string);
echo '</p><p>echo strtolower($string); = ';
echo strtolower($string);
echo '</p><p>echo strtoupper($string); = ';
echo strtoupper($string);


$name = 'Alex James Carret';
echo substr($name, 0, 4);
echo '<hr>';
$body = 'Hello, this is long string and will be displayed if length is < 20';
$body = (strlen($body) > 20) ? substr($body, 0, 20) . '...' : $body;
echo $body;
echo '<hr>';
$username = 'AlexJamesCarret';
$username_is = strtolower($username);

$input = 'AlexJamescarret';

if (strtolower($input) == $username_is) {
    echo 'Ok!';
}
?>
