<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <?php
                if(isset($_POST['submit'])) {
                    $KategoriID = $_POST['KategoriID'];
                    $judul = $_POST['judul'];
                    $penulis = $_POST['penulis'];
                    $penerbit = $_POST['penerbit'];
                    $tahun_terbit = $_POST['tahun_terbit'];
                    $deskripsi = $_POST['deskripsi'];
                    $query = mysqli_query($koneksi, "INSERT INTO buku(bukuID,judul,penulis,penerbit,tahun_terbit,deskripsi) values ('$KategoriID','$judul','$penulis','$penerbit','$tahun_terbit','$deskripsi')");

                    if($query) {
                        echo '<script>alert("Tambah Data Berhasil.");</script>';
                    }else{
                
                        echo '<script>alert("Tambah Data Gagal.");</script>';
                    }
                }
                ?>
                <div class="row mb-3">
                    <div class="col-md-2">Kategori</div>
                    <div class="col-md-8">
                        <select name="KategoriID" class="form-control">
                            <?php
                                $kat = mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                                while($kategori = mysqli_fetch_array($kat)) {
                                    ?>
                                    <option value="<?php echo $kategori ['KategoriID'];?>"><?php echo $kategori['Nama_Kategori'];?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Judul</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="judul"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penulis</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="penulis"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penerbit</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="penerbit"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Tahun Terbit</div>
                    <div class="col-md-8"><input type="number" class="form-control" name="tahun_terbit"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Deskripsi</div>
                    <div class="col-md-8">
                        <textarea name="deskripsi" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8"><button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="?page=buku" class="btn btn-danger">Kembali</a>
                </div>
            </div>
          </form>
        </div>
    </div>
    </div>
</div>