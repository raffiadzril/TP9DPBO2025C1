<?php

include("view/TampilMahasiswa.php");

$tp = new TampilMahasiswa();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tp->updateView($id);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tl = $_POST['tl'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];

    $tp->editPassing($id, $nim, $nama, $tempat, $tl, $gender, $email, $telp);
    header("Location: index.php");
}