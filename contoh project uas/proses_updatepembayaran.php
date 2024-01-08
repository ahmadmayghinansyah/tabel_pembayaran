<?php
require_once 'koneksipembayaran.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_pembayaran'];
  $tanggal = $_POST['tanggal'];
  $nominal = $_POST['nominal'];
  $jumlah_bulan = $_POST['jumlah_bulan'];
  $denda = $_POST['denda'];
  $siswa_nis = $_POST['siswa_nis'];
$q = $conn->query("UPDATE pembayaran SET tanggal = '$tanggal', nominal = '$nominal', jumlah_bulan = '$jumlah_bulan', denda = '$denda', siswa_nis = '$siswa_nis' WHERE id_pembayaran = '$id'");
if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data produk berhasil diubah'); window.location.href='indexpembayaran.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data produk gagal diubah'); window.location.href='indexpembayaran.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: indexpembayaran.php');
}