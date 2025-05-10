<?php

include("view/TampilMahasiswa.php");

$tp = new TampilMahasiswa();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tp->deletePassing($id);
    echo "<script>alert('Data berhasil dihapus!'); window.location.href='index.php';</script>";
} else {
    echo "<script>alert('ID tidak ditemukan!'); window.location.href='index.php';</script>";
}