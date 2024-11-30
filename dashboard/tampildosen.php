<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
</head>

<body>
    <form action="proses.php" method="post">
        NPP : <input type="number" name="npp"> <br>
        Nama Dosen : <input type="text" name="dosen"> <br>
        <input type="submit" name="simpan" value="Simpan">

    </form>
    <br>

    <table border="1">
        <tr>
            <td>NPP</td>
            <td>Dosen</td>
            <td>Opsi</td>
        </tr>
        <?php 
        include "../koneksi/koneksi.php";
        $tampil = mysqli_query($koneksi, "SELECT * FROM dosen");
        while ($data = mysqli_fetch_array($tampil)) {
            
        ?>
        <tr>
            <td><?php echo $data['npp'] ?></td>
            <td><?php echo $data['nmdosen'] ?></td>
            <td>
                <a href="editdosen.php?id=<?php echo $data['npp'] ?>">Edit</a> | <a
                    href="proses.php?idhapus=<?php echo $data['npp'] ?>">Hapus</a>
            </td>
            <?php ?>
        </tr>
        <?php } ?>
    </table>
</body>

</html>