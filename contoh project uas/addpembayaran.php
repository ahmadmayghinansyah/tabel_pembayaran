<?php
require_once 'koneksipembayaran.php';
if (isset($_POST['submit'])) {
  $id_pembayaran = $_POST['id_pembayaran'];
  $tanggal = $_POST['tanggal'];
  $nominal = $_POST['nominal'];
  $jumlah_bulan = $_POST['jumlah_bulan'];
  $denda = $_POST['denda'];
  $siswa_nis = $_POST['siswa_nis']; 
// id_produk bernilai '' karena kita set auto increment
  $q = $conn->query("INSERT INTO pembayaran VALUES ('$id_pembayaran', '$tanggal', '$nominal', '$jumlah_bulan', '$denda', '$siswa_nis')");
if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='indexpembayaran.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='indexpembayaran.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: indexpembayaran.php');
}