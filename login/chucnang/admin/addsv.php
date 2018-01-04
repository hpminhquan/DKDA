<?php
if(!isset($_SESSION)) session_start();



$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");

$tensv=$_POST["tensv"];
$mssv=$_POST["mssv"];
$lop=$_POST["lop"];
$email=$_POST["email"];
$sdt=$_POST["sdt"];

$username=$_POST["iddn"];
$passwork=$_POST["pw"];



$sql="INSERT INTO user (username,password) VALUES ('$username','$passwork')";
$o1=$o->query($sql);

$last_Id=$o->lastInsertId();

	
$sql ="INSERT INTO sinhvien (mssv,hotensv,lop,email,sdt,user_id) VALUES ('$mssv','$tensv','$lop','$email','$sdt','$last_Id')";
$o3=$o->query($sql);
	

$message = "Thêm thành công";
echo "<script type='text/javascript'>alert('$message');setTimeout(function(){window.location='http://localhost/DA/login/trangchuadmin.php'}, 1000);</script>";
//header("location:trangchuadmin.php"); 
?>