<?php
// PHP program to Count Inversions
// in an array

function getInvCount(&$arr, $n)
{
    $inv_count = 0;
    for ($i = 0; $i < $n - 1; $i++)
        for ($j = $i + 1; $j < $n; $j++)
            if ($arr[$i] > $arr[$j])
                $inv_count++;

    return $inv_count;
}

// Driver Code
// $arr = array(1, 20, 6, 4, 5 );
// $n = sizeof($arr);
// echo "Number of inversions are ",
//         getInvCount($arr, $n);

// This code is contributed by ita_c
?>

<!DOCTYPE html>
<html>
<head>
  <title>document</title>
</head>
<body>


  <form method="post" action="">
        <input type="text" name="input1">
        <button type="submit" name="proses">proses</button>
    </form>

    <?php
      if (isset($_POST['proses'])) {
    $input = $_POST['input1'];
    $arr = explode(', ', $input);

  // $arr = array(1, 20, 6, 4, 5 );
$n = sizeof($arr);
echo "Jumlah inversi ",
        getInvCount($arr, $n);
}
    ?>

</body>
</html>