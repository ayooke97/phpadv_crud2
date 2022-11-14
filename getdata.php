<?php 

include_once 'config.php';
$query = mysqli_query($conn, "SELECT * FROM buku ORDER BY judul_buku ASC");
