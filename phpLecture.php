<?php

$txt = "Burch";
echo "i" . $txt . "!" . "\n";

// global, static, local scope variables
// global keyword
// static keyword

function myTest()
{
    static $x = 0;
    echo $x . "\n";
    $x++;
}

myTest();
myTest();
myTest();


echo str_word_count("burch is that");

echo strrev("burch is that");

// php constants

// php string operators
// . concatenation
// .= concatenation assignment $txt1 .= $txt2, appends $txt2 to $txt1

?>