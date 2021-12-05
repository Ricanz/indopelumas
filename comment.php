<?php
// koneksi database
include 'connect.php';

// if(isset($_POST['submit'])){
    $to = "indopelumas@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name =  $_POST['nama'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['pesan'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['pesan'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header("location:contact.php");
    // }


// menangkap data yang di kirim dari form
// $jenis = 'komentar';
// $nama = $_POST['nama'];
// $email = $_POST['email'];
// $subject = $_POST['subject'];
// $pesan = $_POST['pesan'];
// // menginput data ke database
// mysqli_query($connect,"insert into komentar values('','$jenis','$nama','$email','$subject', '$pesan')");

// // mengalihkan halaman kembali ke index.php
// header("location:contact.php");

?>
