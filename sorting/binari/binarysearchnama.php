<?php
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

$data = [
	[
	'no' => 1,
	'nama' => 'Dodi Saputra',
	'nim' => '1810530227',
	'status' => 'LULUS'
],
[
	'no' => 2,
	'nama' => 'Arga Arya',
	'nim' => '1810530226',
	'status' => 'LULUS'
]
];

foreach ($data as $mahasiswa) {
    $hasil[] =  $mahasiswa['no'];
}
$arr = $hasil;

$jum = count($arr);

$tampil = "";

if (isset($_POST['proses'])) {
    $input = $_POST['input1'];
    $result = binarySearch($arr, 0, $jum, $input);
    if (($result == -1)) {
        $tampil =  "data tidak ada";
    } else {
        if ($data[$result]['status'] == "LULUS") {
            $tampil =  "Mahasiswa dengan No " . $arr[$result] . $data[$result]['nama'] . $data[$result]['nim'] . $data[$result]['status'];
        } else {
            $tampil =  "Mahasiswa dengan No " . $arr[$result] . $data[$result]['nama'] . $data[$result]['nim'] . $data[$result]['status'];
        }
    }
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
    if ($tampil != "") : ?>
            
                <?= $tampil; ?>

        <?php endif; ?>

</body>
</html>