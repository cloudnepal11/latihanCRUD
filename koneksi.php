<?php
$koneksi = new mysqli('localhost', 'root', 'password','nama database');
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>