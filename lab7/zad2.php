<?php
    function dodaj_tab(array $tab, $n){
        if($n < 0 || $n > count($tab)){
            echo "BŁĄD\n";
            return;
        }
        array_splice($tab, $n, 0, '$');
        return $tab;
    }
    $array=[0,4,2,7,5,3,8,4,2,6];
    $array_2 = dodaj_tab($array, 1);
    print_r($array_2);
?>