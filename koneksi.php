<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rpl";

$koneksi = mysqli_connect ($servername, $username, $password, $dbname);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

?>