<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
 <title>Halaman User</title>
</head>
<body>
 <?php
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

 ?>
 <h1>Halaman User Biasa</h1>

 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
 <li><a href="akses_user.php">masuk untuk akses sebagai User</a></li>
 <a href="logout.php">LOGOUT</a>

 <br/>
 <br/>

</body>
</html>