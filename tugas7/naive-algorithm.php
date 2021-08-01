<?php
// Program PHP untuk Pola Naif
// Mencari algoritma

function search($pat, $txt)
{
	$M = strlen($pat);
	$N = strlen($txt);

	// Loop untuk slide pat[]
	// satu per satu
	for ($i = 0; $i <= $N - $M; $i++)
	{

		// Untuk indeks i saat ini,
		// periksa kecocokan pola
		for ($j = 0; $j < $M; $j++)
			if ($txt[$i + $j] != $pat[$j])
				break;

		// if pat[0...M-1] =
		// txt[i, i+1, ...i+M-1]
		if ($j == $M)
			echo "Pattern found at index ", $i."\n";
	}
}

	// Driver Code
	$txt = "AABAACAADAABAAABAA";
	$pat = "AABA";
	search($pat, $txt);
	
// This code is contributed by Sam007
?>
