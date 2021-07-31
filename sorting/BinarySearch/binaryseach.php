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

if (isset($_POST['proses'])) {

    $input = $_POST['input1'];

    $num_to_find = $input;

    if(binarySearch($num_arr, $num_to_find)){
        $out = $num_to_find. " exists in the list";
    }else{
        $out = $num_to_find. " does not exists in the list";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>documen</title>
</head>
<body>

    <h2>
        <?= implode(", ", $num_arr);?>
    </h2>
    <form method="post" action="">
        <input type="text" name="input1">
        <button type="submit" name="proses">proses</button>
    </form>

    <h1>
        <?php
        
        if (isset($_POST['proses'])) {
                echo $out;
        }
        ?>
    </h1>

</body>
</html>