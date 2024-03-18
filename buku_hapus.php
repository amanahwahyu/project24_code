<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE BukuID=$id");
if ($query) {
    echo "<script> alert('Hapus Data Berhasil'); location.href = 'index.php?page=buku'; </script>";
} else {
    echo "<script> alert('Hapus Data Gagal'); location.href = 'index.php?page=buku'; </script>";
}
?>