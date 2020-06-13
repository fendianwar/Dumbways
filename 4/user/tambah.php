<?php
include '../koneksi.php';

$nama = addslashes($_POST['nama']);
$email = $_POST['email'];

    // buat query
    $sql = "INSERT INTO user (name,email) VALUES ('$nama','$email')";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: add_user.php?status=sukses');
    } else {
        header('Location: add_user.php?status=gagal');
    }
?>