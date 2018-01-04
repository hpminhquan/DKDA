<?php
if(!isset($_SESSION)) session_start();


$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");
$user_id1=$_SESSION["masvht"];

$mda=$_POST["selectdoan"];
$hoclai=$_POST["hoclai"];

$ngaydangky=isset($_POST["ngaydangky"])?$_POST["ngaydangky"]:date("Y-m-d");
$nhom =isset($_POST["id_pets"]) ? 1:0;

$sql="select * from doan where mda='$mda'";
$o12=$o->query($sql);
$data12 = $o12->fetchAll(PDO::FETCH_ASSOC);

$date1=strtotime($data12[0]["ngayketthuc"]);
$date2=strtotime($ngaydangky);
//$tre=$date1->diff($date2);
$difff=abs($date1-$date2);
$tre=floor($difff / (60*60*24));

if($tre>0){


if($nhom==1){
	$tennhom=rand();
	$sql="INSERT INTO nhom (tennhom) VALUES ('$tennhom')";
	$o1=$o->query($sql);
	$last_Id=$o->lastInsertId();
	
	$user_id2=$_POST["svnhom"];
	
	
	
	
	$sql ="UPDATE sinhvien SET hoclai='$hoclai', mda='$mda', ngaydangky='$ngaydangky', id_nhom='$last_Id' WHERE user_id='$user_id1'";
	$o3=$o->query($sql);
	
	$sql ="UPDATE sinhvien SET hoclai='$hoclai', mda='$mda', ngaydangky='$ngaydangky', id_nhom='$last_Id' WHERE mssv='$user_id2'";
	$o4=$o->query($sql);
}else{
	$sql ="UPDATE sinhvien SET hoclai='$hoclai', mda='$mda', ngaydangky='$ngaydangky' WHERE user_id='$user_id1'";
	$o5=$o->query($sql);
}
$message = "Đăng ký thành công";
echo "<script type='text/javascript'>alert('$message');setTimeout(function(){window.location='http://localhost/DA/login/trangchu.php'}, 1000);</script>"; }
else{
	$message = "Quá ngày đăng ký";
echo "<script type='text/javascript'>alert('$message');setTimeout(function(){window.location='http://localhost/DA/login/trangchu.php'}, 1000);</script>";
	}
?>