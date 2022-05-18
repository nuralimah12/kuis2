<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
<body> 
    <h1> Hasil Pencarian Buku</h1>
    <table>
        <tr>
            <th>Kode Buku</th>
            <th>judul</th>
            <th>Pengarang</th>
        </tr>
        <?php
        $judul = $_GET["carinama"];
        include "myconnection.php";

        $query = "SELECT * FROM buku WHERE judul LIKE'%$judul%'";
        $result = mysqli_query($connect,$query);

        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
        ?> 
            <tr>
                <td><?php echo $row["id_buku"];?></td>
                <td><?php echo $row["judul"];?></td>
                <td><?php echo $row["pengarang"];?></td>
            </tr>
            <?php
                }
            }
            else {
                echo "0 results";
            }
        ?>
    </table>
        <a href="homeCRUD.php">Kembali Ke Home</a>
        </body>
        </html>
