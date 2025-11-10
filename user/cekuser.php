<?php
// Berfungsi untu memanggil fungsi session
session_start();
include_once('../koneksi.php');

// Variabel untuk menangkap data dari form login
$email  = $_POST['email'];
$pswd   = $_POST['pswd'];

// Cek apakah data yang diinput terdaftar atau tidak
$cek = "SELECT * FROM tbl_user WHERE 
        email='$email' AND 
        pswd=SHA1('$pswd') ";
$hasil = mysqli_query($mysqli, $cek);
while ($_hasil = mysqli_fetch_array($hasil)) {
    // untuk mendefinisikan session
    $_SESSION['ses_nama']   = $_hasil['nama'];
    $_SESSION['ses_email']  = $_hasil['email'];
    // untuk mengalihkan ke halaman dashboard
    header('Location:../app.php?page=home');
}
