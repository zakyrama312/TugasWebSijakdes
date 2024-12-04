<?php

include "layout/navbar.php";

include "../koneksi/koneksi.php";

$kodemk = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM matkul WHERE kdmatkul = '$kodemk'");
$data = mysqli_fetch_array($tampil);

?>
<div class="container">
    <form action="proses.php" method="post">
        <div class="form-group">
            <label for="npp">Kode Mata Kuliah</label>
            <input type="text" name="kode_matkul" placeholder="Masukkan Kode Mata Kuliah" readonly required
                value="<?= $data['kdmatkul'] ?>">
        </div>
        <div class="form-group">
            <label for="dosen">Nama Mata Kuliah</label>
            <input type="text" name="nama_matkul" placeholder="Masukkan Nama Mata Kuliah" required
                value="<?= $data['nama_matkul'] ?>">
        </div>
        <div class="form-group">
            <label for="dosen">SKS</label>
            <input type="number" name="sks" placeholder="Masukkan SKS" value="<?= $data['sks'] ?>" required>
        </div>
        <div class="form-group">
            <label for="dosen">Jenis Mata Kuliah</label>
            <select name="jenis_matkul">
                <option value="<?= $data['jenis_matkul'] ?>"><?= $data['jenis_matkul'] ?></option>
                <option value="">--Pilih Mata Kuliah--</option>
                <option value="Mata Kuliah Wajib">Mata Kuliah Wajib</option>
                <option value="Mata Kuliah Pilihan">Mata Kuliah Pilihan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dosen">Semester</label>
            <select name="semester">
                <option value="<?= $data['smt'] ?>"><?= $data['smt'] ?></option>
                <option value="">--Pilih Semester--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="editmk" value="Edit">

        </div>
    </form>

</div>
</body>

</html>