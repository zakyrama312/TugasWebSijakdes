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
                window.location.href = 'datadosen.php';
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
                window.location.href = 'datadosen.php';
              </script>";
    }
}

// edit
if(isset($_POST['edit'])){
    $npp = $_POST['npp'];
    $dosen = $_POST['dosen'];

    $edit = mysqli_query($koneksi, "UPDATE dosen SET nmdosen = '$dosen' WHERE npp = '$npp'");
    if ($edit) {
         echo "<script>
                alert('Berhasil Diedit');
                window.location.href = 'datadosen.php';
              </script>";
    }
}


// mata kuliah

// tambah matakuliah
if (isset($_POST['simpanmk'])) {
    $kdmatkul = $_POST['kode_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];
    $jenismatkul = $_POST['jenis_matkul'];
    $semester = $_POST['semester'];


    $simpan = mysqli_query($koneksi, "INSERT INTO matkul VALUES ('$kdmatkul', '$nama_matkul', '$sks','$jenismatkul','$semester')");
    if ($simpan) {
        echo "<script>
                alert('Berhasil Ditambahkan');
                window.location.href = 'datamatakuliah.php';
              </script>";
    }
}

// edit matakuliah
if(isset($_POST['editmk'])){
    $kdmatkul = $_POST['kode_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];
    $jenismatkul = $_POST['jenis_matkul'];
    $semester = $_POST['semester'];

    $update = mysqli_query($koneksi, "UPDATE matkul SET nama_matkul = '$nama_matkul', sks = '$sks', jenis_matkul = '$jenismatkul', smt = '$semester'");
 if ($update) {
        echo "<script>
                alert('Berhasil Diedit');
                window.location.href = 'datamatakuliah.php';
              </script>";
    }

}

if(isset($_GET['idhapusmk'])){
     $id = $_GET['idhapusmk'];

    $hapus = mysqli_query($koneksi, "DELETE FROM matkul WHERE kdmatkul = '$id'");

    if ($hapus) {
        echo "<script>
                alert('Berhasil Dihapus');
                window.location.href = 'datamatakuliah.php';
              </script>";
    }
}

?>