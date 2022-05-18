<!DOCTYPE HTML>
<html>
<head>
    <title>PHP MySQL</TITLE>
</head>

<body>
    <?php
        include "myconnection.php";
        $id_buku = $_GET['id'];
        $query = "SELECT*FROM buku WHERE id_buku='$id_buku'";
        $result = mysqli_query($connect,$query);
    ?>
    <form action="editProcess.php" method="post" enctype="multipart/form-data">
    <table>
    <?php
        while($row=mysqli_fetch_array($result)){
    ?>  
    <tr>
        <td>Kode Buku</td>
        <td><input type="text" name="myid" value="<?php echo $row['id_buku'];?>"readonly></td>
    </tr> 
    <tr>
        <td>Judul Buku</td>
        <td><input type="text" name="myname" value="<?php echo $row['judul'];?>"></td>
    </tr>
    <tr>
        <td>Pengarang</td>
        <td><input type="text" name="mypengarang" value="<?php echo $row['pengarang'];?>"></td>
    </tr>
    <tr>
        <td>Penerbit</td>
        <td><input type="text" name="mypenerbit" value="<?php echo $row['penerbit'];?>"></td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td><textarea name="mydeskripsi" value="<?php echo $row['deskripsi'];?>"></textarea></td>
    </tr>
    <tr>
        <td><input type="submit" name="save" value="Simpan"></td>
    </tr>
    <?php
        }
    ?>
    </table>
    </form>
    </body>

</html>