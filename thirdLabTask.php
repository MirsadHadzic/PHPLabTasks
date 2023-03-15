<?php

/*

Write a PHP function to change the following array's all values to uppercase. (hint) 
Initial array:  
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected output:
Array ( [A] => BLUE [B] => GREEN [c] => RED )

*/

function change_values_to_uppercase($arr) {
  $new_arr = array();
  foreach ($arr as $key => $value) {
    $new_arr[$key] = strtoupper($value);
  }
  return $new_arr;
}

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$color_uppercase = change_values_to_uppercase($color);
print_r($color_uppercase);

?>
