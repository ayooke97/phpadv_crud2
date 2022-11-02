<?php

$host = 'localhost';
$db = 'perpustakaan';
$username = 'root';
$pass = '';

$conn = mysqli_connect($host, $username, $pass, $db);

try {
    if ($conn) {
        echo '<p class = "fw-semibold">Koneksi berhasil</p>';
    } else {
        throw new Exception('Koneksi Gagal');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

function show()
{
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM buku");
    return $query;
}

function create()
{
    global $conn;
    $query = mysqli_query($conn, "INSERT INTO(judul_buku,penerbit_sinopsis,th_terbit_buku) VALUES ()");
    return $query;
}
