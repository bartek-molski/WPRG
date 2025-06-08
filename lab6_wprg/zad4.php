<?php
function mnozMacierze($A, $B) {
    $wierszeA = count($A);
    $kolumnyA = count($A[0]);
    $wierszeB = count($B);
    $kolumnyB = count($B[0]);

    if ($kolumnyA !== $wierszeB) {
        echo "Liczba kolumn macierzy A musi być równa liczbie wierszy macierzy B.";
        return;
    }

    $wynik = array_fill(0, $wierszeA, array_fill(0, $kolumnyB, 0));

    for ($i = 0; $i < $wierszeA; $i++) {
        for ($j = 0; $j < $kolumnyB; $j++) {
            for ($k = 0; $k < $kolumnyA; $k++) {
                $wynik[$i][$j] += $A[$i][$k] * $B[$k][$j];
            }
        }
    }

    return $wynik;
}
$A = [
    [1, 2],
    [3, 4]
];

$B = [
    [5, 6],
    [7, 8]
];
    $C = mnozMacierze($A, $B);
    print_r($C);
?>

