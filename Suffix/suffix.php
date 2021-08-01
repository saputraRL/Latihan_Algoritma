<?php
// PHP program to find the index with
// minimum sum of prefix and suffix
// sums in an Array
function indexMinSum($arr, $n)
{
	// Initialization of the
	// min value
	$min = $arr[0];
	$index = 0;

	// Find minimum element in
	// the array
	for ($i = 1; $i < $n; $i++)
	{
		if ($arr[$i] < $min)
		{

			// store the index of the
			// current minimum element
			$min = $arr[$i];
			$index = $i;
		}
	}

	// return the index of min
	// element 1-based index
	return ($index + 1);
}

// Driver Code
$arr = array(6, 8, 2, 3, 5 );
$n = sizeof($arr);
echo indexMinSum($arr, $n);

// This code is contributed by Sachin
?>
