<?php
 require_once("koneksi.php");
 $nama_produk=$_GET['nama_produk'];
 $keterangan=$_GET['keterangan'];
 $harga=$_GET['harga'];
 $jumlah=$_GET['jumlah'];
 $query=mysql_query("update produk set
  keterangan='$keterangan',
  harga='$harga',
  jumlah='$jumlah';");
 if($query){
  echo "<script>alert('Data berhasil diubah');location.href='viewproduk.php'</script>";
 }
 else{
  echo "<script>alert('Data gagal diubah');location.href='viewproduk.php'</script>";
 }
?>