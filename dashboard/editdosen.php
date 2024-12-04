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
            <label for="npp">NPP</label>
            <input type="number" readonly id="npp" name="npp" placeholder="Masukkan NPP"
                value="<?php echo $data['npp'] ?>" required>
        </div>
        <div class="form-group">
            <label for="dosen">Nama Dosen</label>
            <input type="text" id="dosen" name="dosen" placeholder="Masukkan Nama Dosen"
                value="<?php echo $data['nmdosen'] ?>" required>
        </div>
        <div class="form-group">
            <input type="submit" name="edit" value="Edit">
        </div>
    </form>
</div>
</body>

</html>