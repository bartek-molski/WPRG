<?php
    function numbers($a){
        if(!is_numeric($a)){
            echo "Parameter must be numeric!";
            return;
        }
        $suma = 0;
        $a = abs($a);
        while($a != ceil($a)) {
            $a = $a * 10;
        }
        while($a >0){
            $b = $a % 10;
            $a = $a / 10;
            $suma += $b;
        }
        if($suma >= 10){
            numbers($suma);
        }
        else{
            echo $suma;
            echo "<br>";
        }

    }
    echo "5210: \n";
    numbers(5210);
    echo "-5210: \n";
    numbers(-5210);
    echo "5210.5: \n";
    numbers(5210.5);
    echo "numbers: \n";
    numbers("numbers");
?>
