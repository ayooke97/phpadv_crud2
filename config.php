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
    $username = $data["username"];
    $pass = $data["pass"];
    $fname = $data["fname"];
    $mname = $data["mname"];
    $lname = $data["lname"];
    $jk = $data["jk"];
    $email = $data["email"];
    global $conn;
    $check = mysqli_query($conn, "SELECT * FROM user WHERE email= '$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('email sudah terdaftar')</script>";
        $_SESSION['value_input'] = $data;
        // var_dump($_SESSION);
    } else {
        $query = mysqli_query($conn, "INSERT INTO user (id,username,password,first_name,mid_name,last_name,jk,email) VALUES ('','$username','$pass','$fname','$mname','$lname','$jk','$email')");
        $_SESSION[] = '';
        return $query;
    }
}

function search($data)
{

    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM buku WHERE penerbit LIKE '%{$data}%' OR sinopsis LIKE '%{$data}%' OR judul_buku LIKE '%{$data}%' OR id_buku LIKE '%{$data}%'");
    return $query;
}
