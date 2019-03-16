<?php
include 'koneksi.php';
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
              <li><a href="#">Home</a></li>
              <li><a href="About.php">About</a></li>
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
      <div class="jumbotron">
        <div class="container">
          <h1>Quick Count!</h1>
          <div class="col-md-6">
          	<h3>FAJRI - AFIF : <?php 

			$query = "SELECT * FROM PILIHAN WHERE nama_kandidat='1'";
			$jalandong = $connection->query($query);
			$cek = $jalandong->rowCount();
			echo $cek;
			?>
			</h3>

          </div>
          <div class="col-md-6">
          	<h3>BAGUS - DIKI : <?php 

			$query = "SELECT * FROM PILIHAN WHERE nama_kandidat='2'";
			$jalandong = $connection->query($query);
			$cek = $jalandong->rowCount();
			echo $cek;
			?>
			</h3>
          </div>
        </div>
   	 </div>  
  	</body>
</html>
