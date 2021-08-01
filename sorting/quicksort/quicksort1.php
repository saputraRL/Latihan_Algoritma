<?php
// Kode PHP untuk fungsi rekursif
// dari Quicksort

// Fungsi untuk bertukar angka
function swap(&$a, &$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}

/* Fungsi ini mengambil elemen terakhir sebagai pivot,
menempatkan elemen pivot pada saat yang benar
posisi dalam array terurutkan, dan tempat
semua lebih kecil (lebih kecil dari pivot) ke kiri
pivot dan semua elemen yang lebih besar untuk
kanan pivot */
function partition (&$arr, $l, $h)
{
    $x = $arr[$h];
    $i = ($l - 1);

    for ($j = $l; $j <= $h - 1; $j++)
    {
        if ($arr[$j] <= $x)
        {
            $i++;
            swap ($arr[$i], $arr[$j]);
        }
    }
    swap ($arr[$i + 1], $arr[$h]);
    return ($i + 1);
}

/* A[] --> Array to be sorted,
l --> Starting index,
h --> Ending index */
function quickSort(&$A, $l, $h)
{
    if ($l < $h)
    {
        /* Partitioning index */
        $p = partition($A, $l, $h);
        quickSort($A, $l, $p - 1);
        quickSort($A, $p + 1, $h);
    }
    
}

// Driver code
$n = 5;
$arr = array(4, 2, 6, 9, 2);

quickSort($arr, 0, $n - 1);

for($i = 0; $i < $n; $i++)
{
    echo $arr[$i] . " ";
}

// This code is contributed by
// rathbhupendra
?>
