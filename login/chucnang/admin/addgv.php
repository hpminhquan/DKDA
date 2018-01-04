<?php
if(!isset($_SESSION)) session_start();



$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");

$tengv=$_POST["tengv"];
$mgv=$_POST["mgv"];
$hh=$_POST["hh"];
$hv=$_POST["hv"];
$ch=$_POST["ch"];


	
$sql ="INSERT INTO giangvien (mgv,hoten,hocham,hocvi,cohuu) VALUES ('$mgv','$tengv','$hh','$hv','$ch')";
$o3=$o->query($sql);
	

$message = "Thêm thành công";
echo "<script type='text/javascript'>alert('$message');setTimeout(function(){window.location='http://localhost/DA/login/trangchuadmin.php'}, 1000);</script>";
//header("location:trangchuadmin.php"); 
?>