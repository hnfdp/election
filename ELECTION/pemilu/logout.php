<?php
if(isset($_COOKIE['id'])){
include 'koneksi.php';
setcookie("id","",time()-6000000,"/");
setcookie("fakultas","", time()-6000000,"/");

}
header('location:./');
?>
