/*Write your own PHP functions to calculate and display average, 
lowest and highest temperatures.
Recorded temperatures: 78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73*/

<?php

function calculate_average_temperature($temperatures) {
    $sum = array_sum($temperatures);
    echo $sum . "\n";
    $count = count($temperatures);
    echo $count . "\n";
    return $sum / $count;
  }
  
  function find_lowest_temperature($temperatures) {
    sort($temperatures);
    return $temperatures[0];
  }
  
  function find_highest_temperature($temperatures) {
    rsort($temperatures);
    return $temperatures[0];
  }
  
  $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
                        76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
                        74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
  
  echo "Average temperature: " . calculate_average_temperature($temperatures) . "\n";
  echo "Lowest temperature: " . find_lowest_temperature($temperatures) . "\n";
  echo "Highest temperature: " . find_highest_temperature($temperatures) . "\n";

?>
