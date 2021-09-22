<!-- 
    Nama        : Imam Arief Al Baihaqy
    NIM         : 19051397006
    Prodi/Kelas : D4 Manajemen Informatika/2019A
-->
<?php
session_start();
include"config/koneksi.php";
if (isset($_POST['regis'])) {
   $username=mysqli_real_escape_string($koneksi, $_POST['username']) ;
   $password=md5($_POST['password']);

   $cek_akun=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'");
   $hasil_cek=mysqli_num_rows($cek_akun);
   if ($hasil_cek>0) {
       echo "<script>window.alert('Maaf Username Sudah Dipakai, Silahkan Gunakan Username Lain!')</script>";
   }else {
       $regis=mysqli_query($koneksi,"INSERT INTO user VALUE(NULL,'$username','$password')");
       echo "<script>window.alert('Register Berhasil! Silahkan Login')
       window.location='index.php'</script>";
   }
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arief_Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <!-- Form Register -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign Up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" required="required" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" required="required" placeholder="E-mail"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" required="required" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="regis" id="regis" class="form-submit" value="SIGN UP"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">Sudah Punya Akun? Klik Disini</a>
                    </div>
                </div>
            </div>
        </section>

        

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- 
    Nama        : Imam Arief Al Baihaqy
    NIM         : 19051397006
    Prodi/Kelas : D4 Manajemen Informatika/2019A
-->