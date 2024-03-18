<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kategoribuku WHERE KategoriID=$id");
if ($query) {
    echo "<script> alert('Hapus Data Berhasil'); location.href = 'index.php?page=kategori'; </script>";
} else {
    echo "<script> alert('Hapus Data Gagal'); location.href = 'index.php?page=kategori'; </script>";
}
?>