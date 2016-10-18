<?php

$a = 4;
$b = 3;
$epsilon = 0.0001;

function bisection ($a){
    $x = pow($a, 3) - 3 * $a - 20;
    return $x;
    }
    echo $a;
    var_dump(bisection($a));
    var_dump(bisection($b));
    if(bisection($a) * bisection($b) < 0){
        do{
            $c = ($a + $b) / 2;
            bisection($c);
            if(abs(bisection($c)) <= $epsilon || abs($a - $b) <= $epsilon){
                echo "Great You pkt.0 = " .$c;
                break;
            }
            elseif(($a > 0 && $b > 0) || ($b < 0 && $b < 0)){
                $a = $c;
            }
            else{
                $b = $c;
            }
        } while(abs(bisection($c)) >= $epsilon || abs($a - $b) >= $epsilon);
    }else{
        echo "There is a problem with Your function ";
    }