<?php
    function print_primes($a, $b) {
        if($a <0 || $b <0) {
            echo "Start and stop must be positive number! Given $a, $b! <br />";
            return 0;
        }
        if(!is_numeric($a) || !is_numeric($b)) {
            echo "Start and stop must be numeric! <br />";
            return 0;
        }
        echo "$a, $b: ";
        if($a > $b) {
            for($i = ceil($b); $i <= $a; $i++) {
                if(is_prime($i)) {
                    echo "$i ";
                }
            }
        }else{
            for($i = ceil($a); $i <= $b; $i++) {
                if(is_prime($i)) {
                    echo "$i ";
                }
            }
        }
        echo "<br>";
    }
    function is_prime($a) {
        if($a==1){
            return false;
        }
        for($i = 2; $i < $a; $i++) {
            if($a % $i == 0) {
                return false;
            }
        }
        return true;
    }

    print_primes(5, 10);
    print_primes(10, 5);
    print_primes(5.5, 10);
    print_primes(-5, 10);
    print_primes("prime", 10);
?>

