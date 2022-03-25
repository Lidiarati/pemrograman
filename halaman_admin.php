<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
 <title>Halaman admin</title>
</head>
<body>
 <?php
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

 ?>
 <h1>Ini Halaman Admin</h1>
 <h1>Selamat Datang di Halaman Administrator</h1>
 <h4>Halaman ini hanya dapat diakses oleh user admin</h4>
 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
 <li><a href="admin.php">masuk untuk akses sebagai admin</a></li>
 <a href="logout.php">LOGOUT</a>

 <br/>
 <br/>

</body>
</html>