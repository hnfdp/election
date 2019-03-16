<?php
  if(isset($_GET['pilih'])){
    include 'koneksi.php';
    $idpemilih  = $_COOKIE['id'];
    $fakultas   = $_COOKIE['fakultas'];
    if($_GET['pilih']==0){
      $tambah = "INSERT INTO pilihan (nama_kandidat,noreg_pemilih,fakultas) VALUES ('1','$idpemilih','$fakultas')";
      $jalandong = $connection->query($tambah);
    }else if($_GET['pilih']==1){
      $tambah = "INSERT INTO pilihan (nama_kandidat,noreg_pemilih,fakultas) VALUES ('2','$idpemilih','$fakultas')";
      $jalandong = $connection->query($tambah);
    }
    $update = "UPDATE PEMILIH SET status_pilih='1' WHERE id_pemilih='$idpemilih'";
    $updates = $connection->query($update);

    header('location:hasilpilih.php');
  }
?>
<html>
  <head>
    <title>ELECTION</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <img src="img/bemun.png">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="auth.php">Login</a></li>
              <li><a href="contact.php">Contact</a></li>
              
            </ul>
            <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
              <li><a href="#">Web design</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">Graphic design</a></li>
              <li><a href="#">Print</a></li>
              <li><a href="#">Motion</a></li>
              <li><a href="#">Mobile apps</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav><!-- /.navbar -->
    <div class="container">
      <div class="col-md-6">
        <img src="img/1.jpg" class="img-responsive img-circle">
        <br>
        <form method="post" action="pilih.php?pilih=0">
          <input type="submit" value="FAJRI - AFIF" class="btn btn-primary center-block" />
        </form>  
      </div>
      <div class="col-md-6">
        <img src="img/2.jpg" class="img-responsive img-circle">
        <br>
        <form method="post" action="pilih.php?pilih=1">
          <input type="submit" value="BAGUS - DIKI" class="btn btn-primary center-block"/>
        </form>        
      </div>
    </div>
  </body>
</html>