<?php 

include "../koneksi/koneksi.php";


// tambah dosen
if (isset($_POST['simpan'])) {
    $npp = $_POST['npp'];
    $dosen = $_POST['dosen'];


    $simpan = mysqli_query($koneksi, "INSERT INTO dosen VALUES ('$npp', '$dosen')");
    if ($simpan) {
        echo "<script>
                alert('Berhasil Ditambahkan');
                window.location.href = 'tampildosen.php';
              </script>";
    }
}

// hapus dosen
if (isset($_GET['idhapus'])) { // Tambahkan kondisi untuk cek parameter idhapus
    $id = $_GET['idhapus'];

    $hapus = mysqli_query($koneksi, "DELETE FROM dosen WHERE npp = '$id'");

    if ($hapus) {
        echo "<script>
                alert('Berhasil Dihapus');
                window.location.href = 'tampildosen.php';
              </script>";
    }
}

// edit
if(isset($_POST['edit']))
    $npp = $_POST['npp'];
    $dosen = $_POST['dosen'];

    $edit = mysqli_query($koneksi, "UPDATE dosen SET nmdosen = '$dosen' WHERE npp = '$npp'");
    if ($edit) {
         echo "<script>
                alert('Berhasil Diedit');
                window.location.href = 'tampildosen.php';
              </script>";
    }


?>