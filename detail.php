<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
<body>
<header>
        <div class="logo">TOKO UJUNG ILMU</div>
        <nav>
            <ul>
                <li><a href="homeCRUD.php" class="active" >Home</a></li>
                <li><a href="loginForm.php" >Login</a></li>
            </ul>
        </nav>
        <div class="menu-toggle">
            <i class="fa fa-bars"></i>
        </div>
        </header>
    <h1> Hasil Pencarian Buku</h1>
    <table>
        <tr>DETAIL BUKU</tr>
        <tr>
            <th>Kode Buku</th>
            <th>judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>deskripsi</th>
           
        </tr>
        <?php
        $id_buku = $_GET['id'];
        include "myconnection.php";
        $query = "SELECT*FROM buku WHERE id_buku ='$id_buku'";
        $result = mysqli_query($connect,$query);
        ?>
        <?php
        while($row=mysqli_fetch_array($result)){
        ?>  
            <tr>
                <td><?php echo $row["id_buku"];?></td>
                <td><?php echo $row["judul"];?></td>
                <td><?php echo $row["pengarang"];?></td>
                <td><?php echo $row["penerbit"];?></td>
                <td><?php echo $row["deskripsi"];?></td>
            </tr>
        <?php
                }
         ?>
         </table>
        <div class="back">
        <a href="homeCRUD.php">Kembali Ke Home</a>
         </div>
         
         <br><br><br><br>
         <br><br><br><br>
         <br><br><br><br>
    <footer>
        <h1>CHOSE YOUR BOOK</h1>
        </div>
    </footer>
        </body>
        </html>
