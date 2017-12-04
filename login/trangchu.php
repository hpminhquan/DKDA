<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link REL="SHORTCUT ICON" HREF="images/logoSTU.ico"> 
<link rel="stylesheet" type="text/css" href="default.css" />

<title>Untitled Document</title>
</head>

<body>

<?php
if(!isset($_SESSION)) session_start();
if(!isset($_POST["sm"]))
{
	header("location:index.php");exit;
}

$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");

$_SESSION["dadangnhap"]=1;
$u=$_POST["u"];
$p=$_POST["mk"];

$sql ="select user_id from user where username='$u' and password='$p'";
$o2=$o->query($sql);
$n=$o2->rowCount();
$data = $o2->fetchAll(PDO::FETCH_ASSOC);
if($n==0){
	header("location:do_login.php");
}
else{

$user_id;
foreach ($data as $v){
	$user_id = $v['user_id'];
}

$sql ="select * from sinhvien where user_id='$user_id'";
$o3=$o->query($sql);
$data2 = $o3->fetchAll(PDO::FETCH_ASSOC);
}

?>

<table  border=0 cellpadding=5 cellspacing=0 align="center" width="700">
		<tr>
		<td colspan="2"><img src="images/logo.gif"/>
		</td>
	</tr>
		<tr>
        <style>
        	td>a{
				color: #fff;
				text-decoration:none;
			}
			td>a:hover{
				
			}
        </style>
		<td style="background-color:#336699; color:white;text-align:right"><a class='menu' id='menu_1' href='dangkyda1.php'>Đăng ký Đồ án</a> <a class='menu' id='menu_2' href='logout.php'>Thoát</a> </td>
	</tr>
</TABLE>
		&nbsp;<div>	<table  align="center" border="0" cellspacing="0" cellpadding="3">
	<tr>
		<th colspan="2">THÔNG TIN SINH VIÊN</th>
	</tr>
    
    <?php
	
foreach($data2 as $r)
{
	?>
    
	<tr>
		<td>MSSV:</td>
		<td><?php echo $r["mssv"];?></td>
	</tr>
	<tr>
		<td>Họ tên:</td>
		<td><?php echo $r["hoten"];?></td>
	</tr>
	<tr>
		<td>Lớp:</td>
		<td><?php echo $r["lop"];?></td>
	</tr>
    <tr>
		<td>Email:</td>
		<td><?php echo $r["email"];?></td>
	</tr>
    <tr>
		<td>Số điện thoại:</td>
		<td><?php echo "0".$r["sdt"];?></td>
	</tr>
	 <?php
}
?>
	<tr>
		<td colspan="2" align="center">
			<button id="search">In thông tin</button>
			<br><span id="status"></span>
		</td>
	</tr>
</table>


	</div>&nbsp;
<table  border=0 cellpadding=5 cellspacing=0 align="center" width="700">
	<TR>
		<TD>	<tr>
		<td  colspan="2" bgcolor="#336699" align="center" style="color:white" >
		  Saigon Technology University <br>		
		</td>
	</tr>
</Td>
	</TR>
</table>
</body>
</html>
