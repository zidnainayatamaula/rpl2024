<?php include 'm_siswa.php';
$data_siswa = readsiswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h2>Tutorial CRUD</h2>

    <?php
    // Menampilkan data siswa
    if (!empty($data_siswa)){
        foreach ($data_siswa as $siswa) {
            //tampilkan
            echo $siswa ['nomer'] . " ||" . $siswa ['nama'];
            echo "<br>";
        }
        //jika kosong
    } else {
        echo "Tidak ada data siswa";
    }
    ?>
</body>
</html>