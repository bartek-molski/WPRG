<?php
    function pangram($b){
        $sentence = strtolower(trim($b));
        //echo $sentence;
        $alfabet = range('a', 'z');
        foreach ($alfabet as $xyz){
            if(strpos($sentence, $xyz) === false){
                echo "false";
                return;
            }
        }
        echo "true";
        return;
    }
    pangram("The quick brown fox jumps over the lazy dog");

?>
