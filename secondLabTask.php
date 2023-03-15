<?php

/*Write a PHP script that will perform necessary operations to transform 
this given array to the target array (operations imply adding, removing and changing elements)
Initial array:
array(4) { ["Sarajevo"]=> int(71000) ["Mostar"]=> int(88000) 
    ["Tuzla"]=> int(75000) ["Zenica"]=> int(72000) }

    Expected output:
array(4) { ["Sarajevo"]=> string(7) "capital" ["Mostar"]=> int(88000) 
    ["Tuzla"]=> int(75000) ["Banja Luka"]=> int(78000) }*/


    $initial_array = array(
        "Sarajevo" => 71000,
        "Mostar" => 88000,
        "Tuzla" => 75000,
        "Zenica" => 72000
    );
    
    // Change "Sarajevo" value to "capital"
    $initial_array["Sarajevo"] = "capital";
    
    // Remove "Zenica" from the array
    unset($initial_array["Zenica"]);
    
    // Add "Banja Luka" with value 78000 to the array
    $initial_array["Banja Luka"] = 78000;
    
    // Output the transformed array
    var_dump($initial_array);


?>