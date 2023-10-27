<?php
    $animales = [
        ["Lobo ibérico", "Mamífero", 2500],
        ["Lince ibérico", "Mamífero", 1668],
        ["Quebrantahuesos", "Ave", 2000],
        ["Oso pardo", "Mamífero", 500]
    ];

    function comprobarEstado(int $ejemplares) {
        switch(true) {
            case $ejemplares == 0: $res = "Extinto";break;
            case $ejemplares > 0 && $ejemplares <= 500: $res = "En peligro crítico";break;
            case $ejemplares > 500 && $ejemplares <= 2000: $res = "En peligro";break;
            case $ejemplares > 2000: $res = "Amenazado";break;
        }
        return $res;
    }
?>