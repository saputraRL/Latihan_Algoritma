<?php

//Binary search program

function binarySearch(Array $arr, $num){
    // if array tidak memiliki elemen

    if(count($arr) === 0)
        return false;

    $low = 0;
    $high = count($arr)-1;

    while($low <= $high){
        $mid = floor(($low+$high)/2);

        // jika elemen tengah tidak sesuai 
        if ($num == $arr[$mid]) {
            return true;
        }

        if ($num < $arr[$mid]) {
            // cari elemen di sebelah kiri
            $high = $mid-1;
        }else{
            // cari elemen di sebelah kanan

            $low = $mid+1;
        }
    }

    return false;
}

$num_arr = array(1, 2, 4, 6, 9, 12);

$num_to_find = 3;

if(binarySearch($num_arr, $num_to_find)){
    echo $num_to_find, "exists in the list";
}else{
    echo $num_to_find, "does not exists in the list";
}