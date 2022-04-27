<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Proses</title>
</head>
<body>
<?php

// Menampilkan hasil gambar

/*
$size = getimagesize($_FILES['file']['tmp_name']); //get size

$image = "data:" . $size["mime"] . ";base64," .
        base64_encode(file_get_contents($_FILES['file']['tmp_name'])); //get image

echo '<img scr="'.$image.'" width="720px" />';
*/

/*-------------------------------------------------------------------------------*/
?>
<?php
//Simpan nilai

$username = $_POST['username'];
$password = $_POST['password'];

// Tampilkan nilai

if ($_POST['submit'] == 'Kirim') {

        if (empty($username)) { 
                echo "Username Tidak Diisi.";
                return;
        }

        if (empty($password)) {
                echo "Password Tidak Diisi.";
                return;
        }

        if ($username == 'admin' && $password == '123456') {
                echo "Selamat datang di Halaman Utama<br/> Berikut adalah data anda :";
                echo "Username : ".$username;
                echo "<br/>";
                echo "Password : ".$password;

        } else {
                echo "Anda Tidak Bisa Mengakses Halaman Utama";
        }

} else {
        echo "Halaman Tidak Dapat Diakses";
}
?>
</body>
</html>