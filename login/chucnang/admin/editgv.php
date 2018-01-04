<?php
if(!isset($_SESSION)) session_start();



$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");

$idtk=$_GET["idtk"];

$tensv=$_POST["tengv"];
$mssv=$_POST["mgv"];
$lop=$_POST["hh"];
$email=$_POST["hv"];
$sdt=$_POST["ch"];


	
$sql ="update giangvien set mgv='$mssv',hoten='$tensv',hocham='$lop',hocvi='$email',cohuu='$sdt' where mgv='$idtk'";
$o3=$o->query($sql);
	

$message = "Sửa Thông tin thành công";
echo "<script type='text/javascript'>alert('$message');setTimeout(function(){window.location='http://localhost/DA/login/trangchuadmin.php'}, 1000);</script>";
//header("location:trangchuadmin.php"); 
?>