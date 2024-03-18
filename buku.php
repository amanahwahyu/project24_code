<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card body">
    <div class="row">
        <div class="col md-12">
            <a href="?page=buku_tambah" class="btn btn-primary">+ Tambah Data</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM buku LEFT JOIN kategoribuku on buku.kategoriID = kategoribuku.kategoriID");
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['Nama_Kategori']; ?></td>
                            <td><?php echo $data['Judul']; ?></td>
                            <td><?php echo $data['Penulis']; ?></td>
                            <td><?php echo $data['Penerbit']; ?></td>
                            <td><?php echo $data['Tahun_terbit']; ?></td>
                            <td><?php echo $data['Deskripsi']; ?></td>
                            <td>
                                <a href="?page=Buku_ubah&&id=<?php echo $data['BukuID']; ?>" class="btn btn-info">Ubah</a>
                                <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');" href="?page=Buku_hapus&&id=<?php echo $data['BukuID']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
            </table>
        </div>
    </div>
        </div>
    </div>
                    
    </div>
</div>
