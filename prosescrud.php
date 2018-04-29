<?php

//1. Koneksi
$db = new mysqli('localhost', 'root', 'password', 'pweb_a');
if ($db->connect_errno > 0) {
    die("Gagal Konek");
}

//Tambah data ke table (jika ada)
if (isset($_POST['event']) || isset($_POST['lokasi']) || isset($_POST['htm'])) {
    $nama_event = $_POST['event'];
    $lokasi_event = $_POST['lokasi'];
    $htm_event = $_POST['htm'];

    if(is_numeric($htm_event)){
        $sql = "INSERT INTO event(nama,lokasi,htm) VALUES('$nama_event', '$lokasi_event', '$htm_event')";
        $hasil = $db->query($sql);
    }
}

//Ambil data ke table
$q = 'SELECT * FROM event';
$hasil = $db->query($q);

if(isset($_GET['id']) && isset($_GET['aksi'])){
    
    $aksi = $_GET['aksi'];
    $id = $_GET['id'];

    if($aksi == 'edit'){
        $sql = "SELECT * FROM event WHERE id=$id";
        $result = $db->query($sql);

        $event = $result->fetch_assoc();
    }
}

?>