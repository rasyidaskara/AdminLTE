<?php
// untuk mendeklarasikan session
session_start();

// untuk mengambil file koneksi database
include_once('../koneksi.php');

// mendefinisikan variable untuk menangkap nilai atau data
// user dan password yang dikirim oleh form/halaman login
$email  = $_POST['email'];
$pswd   = $_POST['pswd'];

// membuat query untuk proses pengecekan email dan password;
$sql = "SELECT * FROM tbl_user WHERE
        email ='$email' AND
        pswd = SHA1('$pswd') ";
$hasil = mysqli_query($mysqli, $sql);

while ($hasil =  mysqli_fetch_array($hasil)) {
    // untuk membuat session
    $_SESSION['ses_nama']   = $hasil['nama'];
    $_SESSION['ses_email']  = $hasil['email'];
    $_SESSION['ses_akses']      = $hasil['akses'];
    //untuk mengarahkan ke halamana utama
    header('Location:../app.php?page=home');
}
