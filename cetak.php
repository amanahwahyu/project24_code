<h2 align="center">Laporan Peminjaman Buku</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
    <tr>
        <th>No</th>
        <th>User</th>
        <th>Buku</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Pengembalian</th>
        <th>Status Peminjaman</th>
    </tr>
    <?php
    include "koneksi.php";
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
 <script>
    window.print();
    setTimeout(function() {
        window.close();
    }, 100);
 </script>