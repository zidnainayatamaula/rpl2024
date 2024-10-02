<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nisn           = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat       = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, jenis_kelamin, alamat) VALUES ('$nisn', '$nama_lengkap', '$jenis_kelamin', '$alamat')";



//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>