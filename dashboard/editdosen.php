<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>
</head>

<body>
    <?php
    
    include "../koneksi/koneksi.php";

    $id = $_GET['id'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM dosen WHERE npp = '$id'");
    $data = mysqli_fetch_array($tampil);

    ?>
    <form action="proses.php" method="post">
        NPP : <input type="text" readonly name="npp" value="<?php echo $data['npp'] ?>"> <br>
        Nama Dosen : <input type="text" name="dosen" value="<?php echo $data['nmdosen'] ?>"> <br>

        <input type="submit" name="edit" value="Edit">

    </form>
</body>

</html>