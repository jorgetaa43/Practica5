<?php 
    function sumatorio(int|float $num): int|float {
        $suma = 0;
        for($i = 0; $i <= $num; $i++) {
            $suma += $i;
        }
        return $suma;
    }
    
    function factorial(int|float $num): int|float {
        $mult = 1;
        for($i = 1; $i <= $num; $i++) {
            $mult *= $i;
        }
        return $mult;
    }
?>