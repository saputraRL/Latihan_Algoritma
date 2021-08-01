<?php
/*
    created by kang ono
    https://onophp.blogspot.com/
 */

function merge_sort($my_array){
    if(count($my_array) == 1 ) return $my_array;
      $mid = count($my_array) / 2;
          $left = array_slice($my_array, 0, $mid);
          $right = array_slice($my_array, $mid);
      $left = merge_sort($left);
      $right = merge_sort($right);
      return merge($left, $right);
}
function merge($left, $right){
        $res = array();
        while (count($left) > 0 && count($right) > 0){
          if($left[0] > $right[0]){
             $res[] = $right[0];
            $right = array_slice($right , 1);
            }else{
                $res[] = $left[0];
                $left = array_slice($left, 1);
          }
  }
 while (count($left) > 0){
        $res[] = $left[0];
        $left = array_slice($left, 1);
  }
  while (count($right) > 0){
        $res[] = $right[0];
        $right = array_slice($right, 1);
  }
  return $res;
}
// $test_array = array(4,7,1,2,9,5);
// echo "array sebelum di sorting Merge sort: <br/>";
// echo implode(', ',$test_array );
// echo "<br/> array sesudah di sorting Merge sort:<br/>";
// echo implode(', ',merge_sort($test_array))." ";

// if (isset($_POST['proses'])) {
//     $input = $_POST['input1'];
//     $test_array = explode(', ', $input);

//   // $test_array = array(4,7,1,2,9,5);
// echo "array sebelum di sorting Merge sort: <br/>";
// echo implode(', ',$test_array );
// echo "<br/> array sesudah di sorting Merge sort:<br/>";
// echo implode(', ',merge_sort($test_array))." ";
// }
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
    $test_array = explode(', ', $input);

  // $test_array = array(4,7,1,2,9,5);
echo "array sebelum di sorting Merge sort: <br/>";
echo implode(', ',$test_array );
echo "<br/> array sesudah di sorting Merge sort:<br/>";
echo implode(', ',merge_sort($test_array))." ";
}
    ?>

</body>
</html>