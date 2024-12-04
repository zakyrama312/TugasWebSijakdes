<?php
    include "layout/navbar.php";
    include "../koneksi/koneksi.php";

    $id = $_GET['id'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM dosen WHERE npp = '$id'");
    $data = mysqli_fetch_array($tampil);

    ?>
<div class="container">
    <form action="proses.php" method="post">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" name="nim" placeholder="Masukkan NIM" readonly value="<?= $data['nim'] ?>">
        </div>
        <div class="form-group">
            <label for="nama_mhs">Nama Mahasiswa</label>
            <input type="text" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" required
                value="<?= $data['nama_mahasiswa'] ?>">
        </div>
        <div class="form-group">
            <label for="jeniskelamin">Jenis Kelamin</label>
            <select name="jeniskelamin" required>
                <option value="<?= $data['jenis_kelamin'] ?>">
                    <?= $data['jenis_kelamin'] ?></option>
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat"><?= $data['alamat'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="alamat">Keterangan</label>
            <textarea name="keterangan"><?= $data['ket'] ?></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="editmhs" value="Edit">
        </div>
    </form>
</div>
</body>

</html>