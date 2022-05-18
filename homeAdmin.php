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
                <li><a href="homeCRUD.php" class="active" >Logout</a></li>
            </ul>
        </nav>
        <div class="menu-toggle">
            <i class="fa fa-bars"></i>
        </div>
    </header>
<br><br><br><br><br>
    <form action="search.php" method="get">
        Judul Buku:
        <input type="text" name="carinama">
        <input type="submit" value="cari">
    </form> 
    
    <table>
    <tr>
        <td>
            <form action="insertForm.html">
            <input type ="submit" name="send" value="Tambah Data"/>
        </form>
        </td>
        </tr>     
        <tr>
        </tr>
        <tr>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th></th>  
            <th></th>       
        </tr>
    <?php
        include "myconnection.php";
        $query = "SELECT*FROM buku";
        $result = mysqli_query($connect,$query);


        
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
    ?>
        
                <tr>
                    <td><?php echo $row["id_buku"];?></td>
                    <td><?php echo $row["judul"];?></td>
                    <td><?php echo $row["pengarang"];?></td>        
                    <td>
                        <a href="editForm.php?id=<?php echo $row["id_buku"];?>">
                        <button>Edit</button></a>
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $row["id_buku"];?>">
                        <button>Hapus</button></a>
                    </td>
                    <td>
                        <a href="detail.php?id=<?php echo $row["id_buku"];?>">
                        <button>Detail</button></a>
                    </td>
                </tr>
    <?php

            }
        } else {
            echo"0 result";
        }
    ?>
    </table>
    <script>
        $(document).ready(function () {
            $(".menu-toggle").click(function () {
                $('nav').toggleClass('active');
            })
        })
    </script>
    </footer>
    <br><br><br>
    <br><br><br><br>
    <footer>
        <h1>CHOSE YOUR BOOK</h1>
    </footer>
</body>

</html>