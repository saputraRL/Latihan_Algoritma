<!DOCTYPE html>
<html>
<head>
    <title>Pencarian dan Urutan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Isi Data:</h2>
        <br>
    <h3><form action="" method="post">
        masukkan angka : 
        <input type="text" name="angka">
        <br>
        <button type="submit" name="submit">Proses</button>
    </form></h3>
<br>
    <div class = "tentang">
    <h1><?php if ( isset($_POST['submit']) ) : ?>
        <?php 

            $angka = $_POST['angka'];

            $hasil = explode(",", $angka);
            rsort($hasil);
        
            // mengurutkan secara desc
            echo "Descending -> ";
            foreach ($hasil as $data) {
                echo $data . " ";
            }
            
            
            echo "<br>";

            $hasil = explode(",", $angka);
            sort($hasil);

            // mengurutkan secara asc
            echo "Ascending -> ";
            foreach ($hasil as $data) {
                echo $data . " ";
            }
            echo "<br>";

            // mencari sisa bagi dari nilai asc
            echo "Sisa Bagi asc -> ";
            foreach ($hasil as $data) {
                $sisabagi = $data % 2;
                echo $sisabagi . " ";
            }
            echo "<br>";

            // mencari bilangan prima
            echo "Bilangan Prima -> ";
            foreach ($hasil as $data) {
                $counter = 0; 
                for($i=1;$i<=$data;$i++){ 
                  
                    if($data % $i == 0){ 
                        
                        $counter++;
                    }
                }
                
                if($counter == 2){
                 
                    echo $data . " ";
                }else{
                    echo " ";
                }
            }
            
            
        ?>

    <?php endif; ?>
    </h1>  </div>
</body>
</html>