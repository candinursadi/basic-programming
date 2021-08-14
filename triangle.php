<?php
class Triangle{
    function get_triangle(int $H){
        $result = "";
        for($i=1; $i<=$H; $i++){
            // LEFT SPACE
            for($space=$H; $space>$i; $space--){
                $result .= " ";
            }
            // LEFT TO MIDDLE *
            for($left=1; $left<=$i; $left++){
                $result .= "*";
            }
            // RIGHT *
            for($right=1; $right<$i; $right++){
                $result .= "*";
            }
            $result .= "\n";
        }
        return $result;
    }
}

$triangle = new Triangle;
$H = 5;
print_r($triangle->get_triangle($H));
$H = 10;
print_r($triangle->get_triangle($H));
?>