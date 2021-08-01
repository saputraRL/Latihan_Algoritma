<?php
// Program PHP untuk Naif yang dimodifikasi
// Algoritma Pencarian Pola yang
// dioptimalkan untuk kasus-kasus ketika semua
// karakter pola berbeda

/* Pencarian Naif Pettern yang dimodifikasi
algorithn yang dioptimalkan untuk
kasus ketika semua karakter
pola berbeda */
function search($pat, $txt)
{
    $M = strlen($pat);
    $N = strlen($txt);
    $i = 0;

    while ($i <= $N - $M)
    {
        $j;

        /* Untuk indeks i saat ini,
        periksa kecocokan pola */
        for ($j = 0; $j < $M; $j++)
            if ($txt[$i + $j] != $pat[$j])
                break;

        // if pat[0...M-1] =
        // txt[i, i+1, ...i+M-1]
        if ($j == $M)
        {
            echo("Pattern found at index $i"."\n" );
            $i = $i + $M;
        }
        else if ($j == 0)
            $i = $i + 1;
        else
        
            // geser pola dengan j
            $i = $i + $j;
    }
}

// Driver Code
$txt = "ABCEABCDABCEABCD";
$pat = "ABCD";
search($pat, $txt);

// This code is contributed by nitin mittal.
?>
