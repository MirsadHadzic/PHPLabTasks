<!DOCTYPE html>
<html>
<body>

<form method="post">
 Name: <input type="text" name="fname">
 <input type="submit">
</form>

<?php
/*$array = array(
   "foo" => "bar",
   "bar" => "foo",
);


// Using the short array syntax
$array = [
   "foo" => "bar",
   "bar" => "foo",
];*/

/*$array = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d"
);

var_dump($array);
$array = array(
    1    => 'a',
    '1'  => 'b',
    1.5  => 'c',
    -1 => 'd',
    '01'  => 'e',
    '1.5' => 'f',
    true => 'g',
    false => 'h',
    '' => 'i',
    null => 'j',
    'k',
    2 => 'l',
 );
 
 
 var_dump($array);*/


 /*$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
 );
 var_dump($array);

$array = array(
   "foo" => "bar",
   42    => 24,
   "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
   )
);


var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);


$array = array_values($array);
var_dump($array[0]);
var_dump($array[1]);
var_dump($array[2]["dimensional"]["array"]);

// string key
$arr1 = ["a" => 1];
$arr2 = ["a" => 2];
$arr3 = ["a" => 0, $arr1, $arr2];
var_dump($arr3);


// integer key
$arr4 = [1, 2, 3];
$arr5 = [4, 5, 6];
$arr6 = [$arr4, $arr5];
var_dump($arr6);


$arr = array(5 => 1, 12 => 2);
$arr[] = 56;    // This is the same as $arr[13] = 56;
               // at this point of the script
$arr["x"] = 42; // This adds a new element to
               // the array with key "x"
$arr["x"] = 100; // This changes the value
               // of the element with key "x"
var_dump($arr);
unset($arr[5]); // This removes the element from the array
var_dump($arr);
unset($arr);    // This deletes the whole array
var_dump($arr);

$colors = array('red', 'blue', 'green', 'yellow');


foreach ($colors as $color) {
   echo "Do you like $color? \n";
}


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");


foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "\n";
}


$source_array = [
   [1, 'John'],
   [2, 'Jane'],
];


foreach ($source_array as [$id, $name]) {
  echo "Id=" . $id . ", Name=" . $name;
  echo "\n";
}*/

/*sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key*/

/*
$array = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    2.5 => "d",
    null => 'j','k'
);
sort($array);
var_dump($array);
*/

/*
The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

/*
Globals is a superglobal variable that allows us to access all global 
variables that we have defined. You can define a global variable like such:

$GLOBALS[“VARIABLE_NAME”] = VALUE;
*/

/*
$x = 75;
$y = 25;
function addition() {
 $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo "z = ", $z;
*/
/*
echo $_SERVER['PHP_SELF'];
echo "\n";
echo $_SERVER['SERVER_NAME'];
echo "\n";
echo $_SERVER['HTTP_HOST'];
echo "\n";
echo $_SERVER['HTTP_REFERER'];
echo "\n";
echo $_SERVER['HTTP_USER_AGENT'];
echo "\n";
echo $_SERVER['SCRIPT_NAME'];
*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = $_REQUEST['fname'];
 if (empty($name)) {
   echo "Name is empty";
 } else {
   echo $name;
 }
}

echo $_GET['name'];
echo "\n";
echo $_GET['age'];

/*Add in your URL the bolded part:

http://localhost/lab3/index.php?name=Mirsad&age=22*/

?>

</body>
</html>