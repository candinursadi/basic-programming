<?php
class Numbers{
    function without_odd(array $A){
        foreach($A as $i => $v){
            if($v % 2 == 1) unset($A[$i]);
        }
        return $A;
    }
}

$numbers = new Numbers;
$A = [1,3,5];
print_r($numbers->without_odd($A));
$A = [1,2,3,4,5,6,7,8,9,10];
print_r($numbers->without_odd($A));
$A = [1,5,8,4,3,4];
print_r($numbers->without_odd($A));
?>