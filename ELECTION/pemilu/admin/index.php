<?php
include '../koneksi.php';
if(isset($_POST['username'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $ceklogin = "SELECT * FROM admin WHERE username='$username' and password='$password'";
  $jalandong = $connection->query($ceklogin);
  $cek = $jalandong->rowCount();
  
  if($cek==1){
      header('location:profiladmin.php');
      setcookie("id",$data['id_pemilih'], time()+6000000,"/");
      setcookie("fakultas",$data['nama_fakultas'], time()+6000000,"/");
  }else{
      header('location:index.php');
  }
}
?>
<html>
  <head>
    <title>ELECTION</title>
  </head>
  <body>
    <form method="post" action="index.php">
      <label>username</label>
      <input type="text" name="username" />
      <label>password</label>
      <input type="text" name="password" />
      <input type="submit" value="kirim"/>
    </form>
  </body>
</html>
