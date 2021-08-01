<?php

	function quicksort($my_array) {
		$loe = $gt = array();
		if (count($my_array) < 2) {
			return $my_array;
		}
		$pivod_key = key($my_array);
		$povid = array_shift($my_array);
		foreach ($my_array as $val) {
			if ($val <= $povid) {
				$loe[] = $val;
			}elseif ($val > $povid){
				$gt[] = $val;
			}
		}

		return array_merge(quicksort($loe),array($pivod_key=>$povid),quicksort($gt));
	}

	

	if (isset($_POST['proses'])) {
    $input = $_POST['input1'];
    $my_array = explode(', ', $input);

	//echo implode(', ', $my_array),'<br>';
	// $my_array = quicksort($my_array);
	// echo implode(', ', $my_array);
}

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
    $my_array = explode(', ', $input);
	echo '<br>' . 'Sebelum ' . implode(', ', $my_array),'<br><br>';

    $my_array = quicksort($my_array);
	echo 'Sesudah ' . implode(', ', $my_array);
}
    ?>

</body>
</html>