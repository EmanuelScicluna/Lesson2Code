<?php
//Question 3.1
echo "<b>Question 3.1</b><br>";
function mul(&$a, $b) {
            $a = ($a * $b);
            echo "$a";
    }

    $c = 4;             //CHANGE var $c 
    mul ($c, 5);            // and var $b
 echo "<br>"; 
//Question 3.2
echo "<br><b>Question 3.2</b><br>";
function averageVar (...$parameterList) {
    $sum = 0;
        foreach ($parameterList as $parameter) {
                $sum += $parameter;
        }
    $average = ($sum / $parameter);
    echo "$average";
    }
   echo "<br>"; 
//Question 3.3
echo "<br><b>Question 3.3</b><br>";  
$g = 9.8;
function getForce ($m) {
    global $g;
    $f = $m * $g;
    echo "$f";
}
getForce (200);

?>