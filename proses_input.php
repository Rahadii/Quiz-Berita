<?php
/*
=== Author : Rahadi ===
*/

include('koneksi.php');
$koneksi = new Database();

$koneksi->addData($_POST['id_berita'],$_POST['nama_pengirim'],$_POST['isi_berita'],$_POST['tgl_post']);
header('location: input.php');

?>