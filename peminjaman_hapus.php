<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE PeminjamanID=$id");
if ($query) {
    echo "<script> alert('Hapus Data Berhasil'); location.href = 'index.php?page=peminjaman'; </script>";
} else {
    echo "<script> alert('Hapus Data Gagal'); location.href = 'index.php?page=peminjaman'; </script>";
}
?>