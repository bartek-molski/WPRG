<?php
    function tablica($a, $b, $c, $d){
        $ix = range($a,$b);
        $val = range($c, $d);
        if(count($ix) != count($val)){
            echo "zla wielkość tablicy";
            return;
        }
        $tab = array_combine($ix, $val);
        print_r($tab);
    }
    tablica(2,5,7,10);
?>
