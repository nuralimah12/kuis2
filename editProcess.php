<?php
include "myconnection.php";

$id = $_POST['myid'];
$judul = $_POST["myname"];
$pengarang = $_POST["mypengarang"];
$penerbit = $_POST["mypenerbit"];
$deskripsi = $_POST["mydeskripsi"];


$query = "UPDATE buku SET judul='$judul',pengarang = '$pengarang',penerbit='$penerbit', deskripsi='$deskripsi' WHERE id_buku='$id'";

if (mysqli_query($connect, $query)) {
    header('Location:homeCRUD.php');
} else {
    echo "gagal mengubah data <br>" . mysqli_error($connect);
}
mysqli_close($connect);