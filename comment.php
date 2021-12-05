<?php
// koneksi database
include 'connect.php';

// menangkap data yang di kirim dari form
$jenis = 'komentar';
$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$pesan = $_POST['pesan'];
// menginput data ke database
mysqli_query($connect,"insert into komentar values('','$jenis','$nama','$email','$subject', '$pesan')");

// mengalihkan halaman kembali ke index.php
header("location:contact.php");

?>
