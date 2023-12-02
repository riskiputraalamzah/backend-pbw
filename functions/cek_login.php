<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include './../koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($connect, "select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_fetch_assoc($data);



if ($cek > 0) {
    $_SESSION['data'] = ['username' => $username, 'name' => $cek['name']];
    $_SESSION['status'] = "login";

    header("location:/admin");
} else {
    header("location:/login.php?pesan=gagal");
}
