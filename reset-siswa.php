<form method="post" action="">
    NISN: <input type="text" name="nisn" value="11111111"><br>
    Nama Lengkap: <input type="text" name="nama_lengkap" value="aaaaa"><br>
    Jenis Kelamin: <input type="text" name="jenis_kelamin" value="asddasd"><br>
    Alamat: <textarea name="alamat">aslkcimdk</textarea><br>
    
    <input type="submit" name="update" value="UPDATE">
    <input type="submit" name="reset" value="RESET">
</form>

<?php
if (isset($_POST['reset'])) {
    // Mengosongkan semua input
    $_POST['nisn'] = "";
    $_POST['nama_lengkap'] = "";
    $_POST['jenis_kelamin'] = "";
    $_POST['alamat'] = "";
}
?>