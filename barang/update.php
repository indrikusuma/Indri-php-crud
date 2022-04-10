<?php
include 'koneksi.php';
$id = $_POST['id'];
$kat = $_POST['kategori'];
$nama = $_POST['nama'];
$beli = $_POST['beli'];
$jual = $_POST['jual'];
$stok = $_POST['stok'];

mysql_query("UPDATE barang SET kategori='$kat', nama='$nama', hrg_beli='$beli', hrg_jual='$jual', stok='$stok' WHERE id='$id'");

header("location:index.php?pesan=update");
?>