<?php
if(!isset($_SESSION)) session_start();



$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");

$idtk=$_GET["idtk"];

$tensv=$_POST["tensv"];
$mssv=$_POST["mssv"];
$lop=$_POST["lop"];
$email=$_POST["email"];
$sdt=$_POST["sdt"];

$username=$_POST["iddn"];
$passwork=$_POST["pw"];



$sql="update user set username='$username',password='$passwork' where user_id=$idtk";
$o1=$o->query($sql);


	
$sql ="update sinhvien set mssv='$mssv',hotensv='$tensv',lop='$lop',email='$email',sdt='$sdt' where user_id=$idtk";
$o3=$o->query($sql);
	

$message = "Sửa Thông tin thành công";
echo "<script type='text/javascript'>alert('$message');setTimeout(function(){window.location='http://localhost/DA/login/trangchuadmin.php'}, 1000);</script>";
//header("location:trangchuadmin.php"); 
?>