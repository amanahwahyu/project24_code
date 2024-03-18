<h1 class="mt-4">Ubah Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <?php
                $id = $_GET['id'];
                if(isset($_POST['submit'])) {
                    $KategoriID = $_POST['KategoriID'];
                    $judul = $_POST['judul'];
                    $penulis = $_POST['Penulis'];
                    $penerbit = $_POST['Penerbit'];
                    $tahun_terbit = $_POST['Tahun_terbit'];
                    $deskripsi = $_POST['deskripsi'];
                    $query = mysqli_query($koneksi, "UPDATE buku SET KategoriID='$KategoriID', judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', deskripsi='$deskripsi' WHERE BukuID=$id");

                    if($query) {
                        echo '<script>alert("Ubah Data Berhasil.");</script>';
                    }else{
                
                        echo '<script>alert("Ubah Data Gagal.");</script>';
                    }
                }
                $query = mysqli_query($koneksi, "SELECT*FROM buku WHERE BukuID=$id");
                $data = mysqli_fetch_array($query);
                ?>
                <div class="row mb-3">
                    <div class="col-md-2">Kategori</div>
                    <div class="col-md-8">
                        <select name="KategoriID" class="form-control">
                            <?php
                                $kat = mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                                while($kategori = mysqli_fetch_array($kat)) {
                                    ?>
                                    <option <?php if($data['kategoriID'] == $kategori['KategoriID']) echo 'selected'; ?> value="<?php echo $kategori['KategoriID'];?>"><?php echo $kategori['Nama_Kategori'];?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Judul</div>
                    <div class="col-md-8"><input type="text" value="<?php echo $data['Judul']; ?>" class="form-control" name="judul"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penulis</div>
                    <div class="col-md-8"><input type="text" value="<?php echo $data['Penulis']; ?>" class="form-control" name="Penulis"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penerbit</div>
                    <div class="col-md-8"><input type="text" value="<?php echo $data['Penerbit']; ?>" class="form-control" name="Penerbit"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Tahun Terbit</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="Tahun_terbit" value="<?php echo $data['Tahun_terbit']; ?>" ></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Deskripsi</div>
                    <div class="col-md-8">
                        <textarea name="deskripsi" rows="5" class="form-control"><?php echo $data['Deskripsi']; ?></textarea>
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