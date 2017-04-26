<?php
// Question 4.1
echo "<b>Question 4.1<b><br>";

function incrementByN ($number, $N) {
    $resULT = $number + $N;
    echo "$resULT<br>";
}
incrementByN(5, 3);    // ENTER NUMBERS HERE

// Question 4.2
echo "<br><b>Question 4.2<b><br>";
function printFibonacci($n) {
  $first = 1;
  $second = 1; 
  echo "$first<br>$second<br>";
     for($i = 1; $i < $n; $i++){
         $third = $first + $second;
        echo "$third<br>";
        $first = $second;
        $second = $third;
    }
}
printFibonacci(10);   // Enter limit to Fibonacci Series

// Question 4.3
echo "<br><b>Question 4.3<b><br>";
function power_compute ($b, $a = 2) {
    $result = $b ** $a;
    echo $result;
}
power_compute(6, 3)      // ENTER THE NUMBER AND THE POWER RESPECTIVELY

?>