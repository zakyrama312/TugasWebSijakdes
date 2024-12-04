<?php

include "layout/navbar.php";

?>
<div class="container">
    <form action="proses.php" method="post">
        <div class="form-group">
            <label for="npp">Kode Mata Kuliah</label>
            <input type="text" name="kode_matkul" placeholder="Masukkan Kode Mata Kuliah" required>
        </div>
        <div class="form-group">
            <label for="dosen">Nama Mata Kuliah</label>
            <input type="text" name="nama_matkul" placeholder="Masukkan Nama Mata Kuliah" required>
        </div>
        <div class="form-group">
            <label for="dosen">SKS</label>
            <input type="number" name="sks" placeholder="Masukkan SKS" required>
        </div>
        <div class="form-group">
            <label for="dosen">Jenis Mata Kuliah</label>
            <select name="jenis_matkul" required>
                <option value="">--Pilih Jenis Mata Kuliah--</option>
                <option value="Mata Kuliah Wajib">Mata Kuliah Wajib</option>
                <option value="Mata Kuliah Pilihan">Mata Kuliah Pilihan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dosen">Semester</label>
            <select name="semester" required>
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
            <input type="submit" name="simpanmk" value="Simpan">

        </div>
    </form>



    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Mata Kuliah</th>
            <th>Mata Kuliah </th>
            <th>SKS</th>
            <th>Jenis Mata Kuliah</th>
            <th>Semester</th>
            <th>Opsi</th>
        </tr>
        <?php 
            include "../koneksi/koneksi.php";
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * FROM matkul");
            while ($data = mysqli_fetch_array($tampil)) { ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['kdmatkul'] ?></td>
            <td><?php echo $data['nama_matkul'] ?></td>
            <td><?php echo $data['sks'] ?></td>
            <td><?php echo $data['jenis_matkul'] ?></td>
            <td><?php echo $data['smt'] ?></td>
            <td>
                <a href="editmatkul.php?id=<?php echo $data['kdmatkul'] ?>">Edit</a> |
                <a href="proses.php?idhapusmk=<?php echo $data['kdmatkul'] ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>

</html>