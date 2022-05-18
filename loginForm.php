<!DOCTYPE HTML>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
    <?php
        if(isset($_GET["error"])){
            $error = $_GET["error"];
        }
        else{
            $error = "";
        }
        $message = "";
        if($error=="gagal"){
            $message="Gagal login, silahkan coba kembali";
        }   
    ?>
    <header>
        <div class="logo">TOKO UJUNG ILMU</div>
        <nav>
            <ul>
                <li><a href="homeCRUD.php" class="active" >Home</a></li>
            </ul>
        </nav>
        <div class="menu-toggle">
            <i class="fa fa-bars"></i>
        </div>
    </header>
    <br><br><br>
    <p style="color:red"><?php echo $message;?></p>
    <div class="kotak">   
    <form action="multiProcess.php" method="post">
        <table>
            <tr>Login Terlebih Dahulu</tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" size="20"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" size="20"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
        </div>
    </form>
    <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br>
    <footer>
        <h1>CHOSE YOUR BOOK</h1>
    </footer>
    </body>
    </html>