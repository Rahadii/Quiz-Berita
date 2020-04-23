<?php 

/*
=== Author : Rahadi ===
*/ 

class Database{

    // declaration variable
    var $host       = "localhost";
    var $username   = "root";
    var $password   = "";
    var $dbname     = "berita";
    var $koneksi    = "";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        if(mysqli_connect_errno()){
            echo "Koneksi Database Gagal : " . mysqli_connect_error();
        }
    }
    
    function showData(){
        $data = mysqli_query($this->koneksi, "SELECT * FROM artikel");
        while ($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    function addData($id_berita, $nama_pengirim, $isi_berita, $tgl_post){
        mysqli_query($this->koneksi, "INSERT INTO artikel VALUES ('$id_berita','$nama_pengirim','$isi_berita','$tgl_post')");
    }
}
?>