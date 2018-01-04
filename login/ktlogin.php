<?php
if(!isset($_SESSION)) session_start();
if(!isset($_POST["sm"]))
{
	header("location:index.php");exit;
}


$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");


$u=$_POST["u"];
$p=$_POST["mk"];



$sql ="select user_id from user where username='$u' and password='$p'";
$o2=$o->query($sql);
$n=$o2->rowCount();
$data = $o2->fetchAll(PDO::FETCH_ASSOC);
if(($u!="admin") || ($p!="123")){
	if($n==0){
		header("location:do_login.php");
	}
	else{
		$user_id;
		foreach ($data as $v){
			$user_id = $v['user_id'];
		}
	
		$_SESSION["dadangnhap"]=$user_id;
		header("location:trangchu.php");
		
	
	}
}else {
	$_SESSION["dadangnhap"]=1;
	header("location:trangchuadmin.php");
	}
?>