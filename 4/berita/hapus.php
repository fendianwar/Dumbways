<?php
include '../koneksi.php';

$id = $_POST['id'];

    // buat querydelete from mahasiswa where id='$id'"
    $sql = "DELETE FROM news WHERE id_news='$id'";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: add_berita.php?status=hapus');
    } else {
        header('Location: add_berita.php?status=gagal');
    }
?>