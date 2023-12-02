<?php
// mengaktifkan session
session_start();

if ($_SESSION['status'] == 'login') {

    // menghapus semua session
    session_destroy();

    // mengalihkan halaman sambil mengirim pesan logout
    header("location:/");
} else {
    header("location:/login.php");
}
