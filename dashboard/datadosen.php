<?php

include "layout/navbar.php";

?>
<div class="container">
    <form action="proses.php" method="post">
        <div class="form-group">
            <label for="npp">NPP</label>
            <input type="number" id="npp" name="npp" placeholder="Masukkan NPP" required>
        </div>
        <div class="form-group">
            <label for="dosen">Nama Dosen</label>
            <input type="text" id="dosen" name="dosen" placeholder="Masukkan Nama Dosen" required>
        </div>
        <div class="form-group">
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
    <br>
    <table border="1">
        <tr>
            <th>NPP</th>
            <th>Dosen</th>
            <th>Opsi</th>
        </tr>
        <?php 
            include "../koneksi/koneksi.php";
            $tampil = mysqli_query($koneksi, "SELECT * FROM dosen");
            while ($data = mysqli_fetch_array($tampil)) { ?>
        <tr>
            <td><?php echo $data['npp'] ?></td>
            <td><?php echo $data['nmdosen'] ?></td>
            <td>
                <a href="editdosen.php?id=<?php echo $data['npp'] ?>">Edit</a> |
                <a href="proses.php?idhapus=<?php echo $data['npp'] ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>

</html>