<h1 class="mt-4">Laporan Peminjaman Buku</h1>
<div class="card">
    <div class="card body">
    <div class="row">
        <div class="col md-12">
            <a href="cetak.php"target="_blank" class="btn btn-primary"><i class="fa fa-print"></i>Cetak Data</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status Peminjaman</th>
                </tr>
                <?php
                $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.UserID =peminjaman.UserID LEFT JOIN buku on buku.BukuID = peminjaman.BukuID");
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['Username']; ?></td>
                            <td><?php echo $data['Judul']; ?></td>
                            <td><?php echo $data['Tanggal_peminjaman']; ?></td>
                            <td><?php echo $data['Tanggal_pengembalian']; ?></td>
                            <td><?php echo $data['Status_peminjaman']; ?></td>
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