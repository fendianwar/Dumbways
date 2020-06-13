<?php
include '../koneksi.php';

$id = $_POST['id'];

    // buat querydelete from mahasiswa where id='$id'"
    $sql = "DELETE FROM user WHERE id='$id'";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: add_user.php?status=hapus');
    } else {
        header('Location: add_user.php?status=gagal');
    }
?>