<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/

include("view/TampilMahasiswa.php");

$tp = new TampilMahasiswa();

if (isset($_POST['add'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tl = $_POST['tl'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];

    $tp->addView($nim, $nama, $tempat, $tl, $gender, $email, $telp);
}
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $tp->deletePassing($id);
    header("Location: index.php");
}

$data = $tp->tampil();
