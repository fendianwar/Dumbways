<?php
include '../koneksi.php';

$judul = addslashes($_POST['judul']);
$isi = addslashes($_POST['isi']);
$now = date("Y-m-d h:i:s");
$user_id = $_POST['user_id'];

$nama_file = addslashes($_FILES['foto']['name']);
$tmp_file = $_FILES['foto']['tmp_name'];

$path = "../foto/".$nama_file;

if(move_uploaded_file($tmp_file, $path)){

	$sql = "INSERT INTO news (tittle,image,deskripsi,create_time,user_id) VALUES ('$judul','$nama_file','$isi','$now','$user_id')";
	$query = mysqli_query($db, $sql);
	if( $query ) {
        header('Location: add_berita.php?status=sukses');
    } else {
        header('Location: add_berita.php?status=gagal');
	}

}else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='add_berita.php'>Kembali Ke Form</a>";
}

?>