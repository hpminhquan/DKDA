<?php

$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");
$masv=$_GET["masv"];
$sql="delete from sinhvien where mssv='$masv'";
$o->query($sql);
$message = "Xóa thành công";
echo "<script type='text/javascript'>alert('$message');setTimeout(function(){window.location='http://localhost/DA/login/trangchuadmin.php'}, 1000);</script>";

?>