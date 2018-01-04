<?php
if(!isset($_SESSION)) session_start();



$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");

$idtk=$_GET["idtk"];

$tensv=$_POST["tenda"];
$mssv=$_POST["mda"];
$lop=$_POST["ngaybd"];
$email=$_POST["ngayht"];
$sdt=$_POST["mgv"];


	
$sql ="update doan set mda='$mssv',tenda='$tensv',ngaybatdau='$lop',ngayketthuc='$email',mgv='$sdt' where mda='$idtk'";
$o3=$o->query($sql);
	

$message = "Sửa Thông tin thành công";
echo "<script type='text/javascript'>alert('$message');setTimeout(function(){window.location='http://localhost/DA/login/trangchuadmin.php'}, 1000);</script>";
//header("location:trangchuadmin.php"); 
?>