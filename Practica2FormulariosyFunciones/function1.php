<?php
    function cambiarDivisa(int|float $dinero, string $divisaI, string $divisaF): int|float {
        $res = 0;
        switch($dinero) {
            case $divisaI == "e" && $divisaF == "d":  $res = $dinero * 1.06;break;
            case $divisaI == "e" && $divisaF == "y":  $res = $dinero * 157.56;break;
            case $divisaI == "d" && $divisaF == "e":  $res = $dinero * 0.94;break;
            case $divisaI == "d" && $divisaF == "y":  $res = $dinero * 148.73;break;
            case $divisaI == "y" && $divisaF == "e":  $res = $dinero * 0.0063;break;
            case $divisaI == "y" && $divisaF == "d":  $res = $dinero * 0.0067;break;
        }
        return $res;
    }
?>