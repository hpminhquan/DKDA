<?php
if(!isset($_SESSION)) session_start();



$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");

$tenda=$_POST["tenda"];
$mda=$_POST["mda"];
$ngaybd=$_POST["ngaybd"];
$ngayht=$_POST["ngayht"];
$mgv=$_POST["mgv"];


	
$sql ="INSERT INTO doan (mda,tenda,ngaybatdau,ngayketthuc,mgv) VALUES ('$mda','$tenda','$ngaybd','$ngayht','$mgv')";
$o3=$o->query($sql);
	

$message = "Thêm thành công";
echo "<script type='text/javascript'>alert('$message');setTimeout(function(){window.location='http://localhost/DA/login/trangchuadmin.php'}, 1000);</script>";
//header("location:trangchuadmin.php"); 
?>