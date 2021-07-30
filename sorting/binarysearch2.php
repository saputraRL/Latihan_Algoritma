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

$data = [
    [
        'nim' => 1810530217,
        'nama' => 'Raymond Putra',
        'status' => 'LUNAS'
    ],
    [
        'nim' => 1810530218,
        'nama' => 'Ahmad Zulkifli',
        'status' => 'LUNAS'
    ],
    [
        'nim' => 1810530219,
        'nama' => 'Joko Walio',
        'status' => 'BELUM LUNAS'
    ],
    [
        'nim' => 1810530220,
        'nama' => 'Rio Dwi',
        'status' => "BELUM LUNAS"
    ],
    [
        'nim' => 1810530221,
        'nama' => 'Ishak Smith',
        'status' => 'BELUM LUNAS'
    ],
    [
        'nim' => 1810530222,
        'nama' => 'Sherin Mulia',
        'status' => 'LUNAS'
    ]
];

foreach ($data as $d) {
    $hasil[] =  $d['nim'];
}
$arr = $hasil;

$n = count($arr);

$tampil = "";

if (isset($_POST['submit'])) {
    $x = $_POST['nim'];
    $result = binarySearch($arr, 0, $n - 1, $x);
    if (($result == -1)) {
        $tampil =  "data tidak ada";
    } else {
        if ($data[$result]['status'] == "LUNAS") {
            $tampil =  "Mahasiswa dengan NIM " . $arr[$result] . " telah " . $data[$result]['status'] . " membayar SPP";
        } else {
            $tampil =  "Mahasiswa dengan NIM " . $arr[$result] . " " . $data[$result]['status'] . " membayar SPP";
        }
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Binary Case 1</title>
</head>

<body>
    <div class="container">
        <div>
            <a class="btn btn-primary mt-3" href="index.php" role="button">Kembali</a>
        </div>
        <div class="col-4">
            <form action="" method="post">
                <div class="input-group mt-4 mb-3">
                    <input type="text" class="form-control" name="nim" placeholder="masukkan NIM.." autocomplete="off">
                    <button class="btn btn-outline-secondary" name="submit" type="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>

        <?php if ($tampil != "") : ?>
            <div class="col-lg-6 alert alert-info alert-dismissible fade show" role="alert">
                <?= $tampil; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>


        <table class="table col-lg-6">
            <th>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Pembayaran</th>
                </tr>
            </th>
            <tbody>
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <td><?= $d['nim']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <?php if ($d['status'] == "LUNAS") { ?>
                            <td class="badge bg-success rounded-pill d-flex justify-content-center mt-2"><?= $d['status']; ?></td>
                        <?php } else { ?>
                            <td class="badge bg-danger rounded-pill d-flex justify-content-center mt-2"><?= $d['status']; ?></td>
                        <?php } ?>
                    </tr>
                <?php endforeach;
                ?>
            </tbody>
        </table>
    </div>



    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>