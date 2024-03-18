<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
    <div class="card body">
    <div class="row">
        <div class="col md-12">
            <a href="?page=peminjaman_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Peminjaman</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status Peminjaman</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.UserID =peminjaman.UserID LEFT JOIN buku on buku.BukuID = peminjaman.BukuID WHERE peminjaman.UserID=" . $_SESSION['user']['UserID']);
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['Username']; ?></td>
                            <td><?php echo $data['Judul']; ?></td>
                            <td><?php echo $data['Tanggal_peminjaman']; ?></td>
                            <td><?php echo $data['Tanggal_pengembalian']; ?></td>
                            <td><?php echo $data['Status_peminjaman']; ?></td>
                            <td>
                                <?php
                                if($data['Status_peminjaman'] != 'dikembalikan') {
                                ?>
                                <a href="?page=peminjaman_ubah&&id=<?php echo $data['PeminjamanID']; ?>" class="btn btn-info">Ubah</a>
                                <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');" href="?page=peminjaman_hapus&&id=<?php echo $data['PeminjamanID']; ?>" class="btn btn-danger">Hapus</a>
                                <?php
                                    }
                                    ?>
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