<?php
include 'koneksi.php';
if(isset($_POST['username'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $ceklogin = "SELECT * FROM pemilih WHERE id_pemilih='$username' and password='$password' and status_pilih='0'";
  $jalandong = $connection->query($ceklogin);
  $cek = $jalandong->rowCount();
  if($cek==1){
    $data = $jalandong->fetch(PDO::FETCH_LAZY);
    setcookie("id",$data['id_pemilih'], time()+6000000,"/");
    setcookie("fakultas",$data['nama_fakultas'], time()+6000000,"/");
    header('location:pilih.php');
  }else{
    ?>
    <script>
      alert("You're already vote!");
    </script>
  <?php
  }
}
?>
<html>
  <head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet"> 
    <title>ELECTION</title>
  </head>
  <body>
<!--     <form method="post" action="index.php" class="form-control">
      <input type="text" name="username" />
      <input type="text" name="password" />
      <input type="submit" value="kirim"/>
    </form>
 -->
    <div class="container">
        <div class="card card-container">
            <!--<img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png"/>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="auth.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" class="form-control" placeholder="Username" name="username">
                <input type="password" class="form-control" placeholder="Password"  name="password">
                <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="login">
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /co
  </body>
</html>
