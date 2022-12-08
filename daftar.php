<?php
include "config.php";


    if(isset($_POST['submit'])){
        $user_nama = $_POST['txtUsername'];
        $user_email    = $_POST['txtEmail'];
        $user_nohp   = $_POST['txtNoHp'];
        $user_password = $_POST['txtPassword'];
        $user_password2   = $_POST['txtKonPassword'];

        $cek_user = mysqli_query($koneksi, "SELECT * FROM user where user_nama = '$user_nama' ");
        $cek_login = mysqli_num_rows($cek_user);

        if($cek_login > 0){
            echo "<script>
            alert('Username telah terdaftar');
            </script>";
        }else{
            if($user_password  != $user_password2 ){
                echo "<script>
            alert('Konfirmasi password tidak sesuai');
            </script>";
            }else{
                mysqli_query($koneksi, "INSERT INTO  user VALUES('','$user_nama','$user_email','$user_nohp','$user_password')");
                echo "<script>
                alert('data berhasil di kirim');
               window.location = 'login.php';
                </script>";
            }
        }
    }
?>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="styledaftar.css" />
    </head>

    <body>
        <div class="login-page">
            <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px" />
            <h3>Sign Up here</h3>
            <form action="" method="POST">
                <input type="text" name="txtUsername" placeholder="Username" />
                <input type="email" name="txtEmail" placeholder="Email" />
                <input type="number" name="txtNoHp" placeholder="No Hp" />
                <input type="password" name="txtPassword" placeholder="Password" />
                <input type="password" name="txtKonPassword" placeholder="Konfirmasi Password" />
                <input type="submit" name="submit" value="Login" />
            </form>
            <p class="text-center">Sudah Memiliki Akun? <a data-toggle="tab" href="login.php">Login</a></p>
        </div>
    </body>

</html>