<?php

$id_barang = $_GET['id_barang'];
$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$id_jenis = $_POST['id_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"UPDATE barang SET nama_barang='$nama_barang', stok='$stok', harga='$harga'
WHERE id_barang='$id_barang'");

if($query){
    echo"<script>alert('Data berhasil diedit')</script>";
    echo"<script>window.location.href='index.php'</script>";
}else{
    echo"<script>alert('Data gagal diedit')</script>";
    echo"<script>window.location.href='view_tambah.php'</script>";
}
  