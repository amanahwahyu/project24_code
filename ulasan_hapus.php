<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM ulasanbuku WHERE UlasanID=$id");
if ($query) {
    echo "<script> alert('Hapus Data Berhasil'); location.href = 'index.php?page=ulasan'; </script>";
} else {
    echo "<script> alert('Hapus Data Gagal'); location.href = 'index.php?page=ulasan'; </script>";
}
?>