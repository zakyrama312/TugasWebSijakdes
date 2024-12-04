<?php

include "layout/navbar.php";

?>
<div class="container">
    <form action="proses.php" method="post">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" name="nim" placeholder="Masukkan NIM" required>
        </div>
        <div class="form-group">
            <label for="nama_mhs">Nama Mahasiswa</label>
            <input type="text" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" required>
        </div>
        <div class="form-group">
            <label for="jeniskelamin">Jenis Kelamin</label>
            <select name="jeniskelamin" required>
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="alamat">Keterangan</label>
            <textarea name="keterangan"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="simpanmhs" value="Simpan">

        </div>
    </form>



    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Keterangan</th>
            <th>Opsi</th>
        </tr>
        <?php 
            include "../koneksi/koneksi.php";
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * FROM mhs");
            while ($data = mysqli_fetch_array($tampil)) { ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nim'] ?></td>
            <td><?php echo $data['nama_mahasiswa'] ?></td>
            <td><?php echo $data['jenis_kelamin'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['ket'] ?></td>
            <td>
                <a href="editmahasiswa.php?id=<?php echo $data['nim'] ?>">Edit</a> |
                <a href="proses.php?idhapusmhs=<?php echo $data['nim'] ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>

</html>