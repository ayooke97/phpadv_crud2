<?php

$host = 'localhost';
$db = 'perpustakaan';
$username = 'root';
$pass = '';

$conn = mysqli_connect($host, $username, $pass, $db);

try {
    if ($conn) {
        // echo '<p class = "fw-semibold">Koneksi berhasil</p>';
    } else {
        throw new Exception('Koneksi Gagal');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

function show($data = "judul_buku")
{
    global $conn;
    if ($data == "") {
        $data = "judul_buku";
    }
    // var_dump($data);
    $query = mysqli_query($conn, "SELECT * FROM buku ORDER BY {$data} ASC");
    return $query;
}

function create($data)


{
    $judulbuku = $data["judulbuku"];
    $penerbit = $data["penerbit"];
    $th_terbit = $data["th_terbit"];
    $sinopsis = $data["sinopsis"];
    global $conn;
    $query = mysqli_query($conn, "INSERT INTO buku (judul_buku,penerbit,sinopsis,th_terbit_buku) VALUES ('$judulbuku','$penerbit','$sinopsis','$th_terbit')");
    return $query;
}

function edit($data, $id)
{
    // var_dump($id);
    // die;

    $judulbuku = $data["judulbuku"];
    $penerbit = $data["penerbit"];
    $th_terbit = $data["th_terbit"];
    $sinopsis = $data["sinopsis"];
    global $conn;
    $query = mysqli_query($conn, "UPDATE buku SET judul_buku = '{$judulbuku}', penerbit = '{$penerbit}', sinopsis = '{$sinopsis}', th_terbit_buku = {$th_terbit} WHERE id_buku=$id");
    return $query;
}

function remove($id)
{
    global $conn;
    $query = mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id");
    return $query;
}

function register($data)
{
    $id = $data["id"];
    $username = $data["username"];
    $pass = $data["pass"];
    $fname = $data["first_name"];
    $mname = $data["mid_name"];
    $lname = $data["last_name"];
    $jk = $data["jk"];
    $email = $data["email"];
    global $conn;
    $query = mysqli_query($conn, "INSERT INTO user (id,username,pass,fname,mname,lname,jk,email) VALUES ('$id','$username','$pass','$fname','$mname','$lname','$jk','$email')");
}
