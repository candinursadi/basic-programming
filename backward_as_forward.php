<?php
class BackwardAsForward{
    function check(string $S){
        $length = round(strlen($S)/2);
        $arrayS = str_split($S);
        for($i=0; $i<$length; $i++){
            if($arrayS[$i] != $arrayS[count($arrayS)-($i+1)]) return false;
        }
        return true;
    }
}

$baf = new BackwardAsForward;
$S = "abba";
var_dump($baf->check($S));
$S = "mama";
var_dump($baf->check($S));
$S = "madam";
var_dump($baf->check($S));
?>