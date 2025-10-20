<?php
$nidn   = $_POST['nidn'];
$nama   = $_POST['nama'];
$gender = $_POST['gender'];
$no_hp  = $_POST['no_hp'];
// Fungsi untuk mengambil koneksi database

include_once('koneksi.php');
// Sql untuk mengecek apakah nidn ada atau tidak
$cek = "SELECT count(nidn) as jml FROM dosen WHERE nidn='$nidn' ";
$return = mysqli_query($mysqli, $cek);

// untuk menampilkan data hasil query
while ($_data = mysqli_fetch_array($return)) {
        $ada = $_data['jml'];
}
if ($ada > 0) {
        echo "<script> alert('NIDN Sudah Digunakan') </script>";
} else {
        $sql = "INSERT INTO dosen 
        (nidn,nama,gender,no_hp)
        values('$nidn','$nama',
        '$gender','$no_hp')";

        mysqli_query($mysqli, $sql);
        echo "<script> alert('Data dosen sudah tersimpan') </script>";
}
