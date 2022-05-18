<?php
include "myconnection.php";

$id_buku = $_POST["myid"];
$judul = $_POST["myname"];
$pengarang = $_POST["mypengarang"];
$penerbit = $_POST["mypenerbit"];
$deskripsi = $_POST["mydeskripsi"];

$query = "INSERT into buku(id_buku,judul,pengarang,penerbit,deskripsi) 
    VALUES ('$id_buku','$judul','$pengarang','$penerbit','$deskripsi')";

if (mysqli_query($connect, $query)) {
    header("Location:homeAdmin.php");
} else {
    echo "Data baru gagal dibuat <br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>