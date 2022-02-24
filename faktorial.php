<?php
function faktorial($n)
{
    $angka = 1;
    $faktorial = 1;
    while ($angka <= $n) {
        $faktorial = $faktorial * $angka;
        $angka++;
    }
    return $faktorial;
}

echo faktorial(8);
