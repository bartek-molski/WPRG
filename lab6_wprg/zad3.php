<?php
    function sequences_n($a, $rq, $n){
        echo "$a, $rq, $n: <br>";
        if(!is_numeric($a) || !is_numeric($rq) || !is_numeric($n)){
            echo "Parameters must be numeric!<br>";
            return;
        }
        if($n<=0){
            echo "N must be positive number!<br>";
            return;
        }

        $an = $a + ($n-1)*$rq;
        $S_an = ($a + $an)/2*$n;

        $bn = $a * ($rq^($n-1));
            if($rq==1){
                $S_bn = $a * $n;
            }else{
                $S_bn = $a * (1 - ($rq^$n))/(1 - $rq);
            }
            $b = $a;
            echo "Arithmetic: ";
        for($i = 0; $i < $n; $i++){
            echo "$a, ";
            $a+=$rq;
        }
        echo "<br> Geometric: ";
        for($i = 0; $i < $n; $i++){
            echo "$b, ";
            $b= $b * $rq;
        }
        echo "<br>";
    }
    sequences_n(5, 2, 10);
    sequences_n(5, -2, 10);
    sequences_n(-5, 2, 10);
    sequences_n(5, 2.5, 5);
    sequences_n(5, 2, -10);
    sequences_n("start", 2, 10);