
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang thông tin</title>
</head>

<body>
<?php
$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");
$u=$_POST["u"];
$p=$_POST["mk"];

$sql ="select user_id from user where username='$u' and password='$p'";
$o2=$o->query($sql);
$n=$o2->rowCount();
$data = $o2->fetchAll(PDO::FETCH_ASSOC);
$user_id;
foreach ($data as $v){
	$user_id = $v['user_id'];
}
$sql ="select * from sinhvien where user_id='$user_id'";
$o3=$o->query($sql);
$data2 = $o3->fetchAll(PDO::FETCH_ASSOC);
?>

<table cellspacing="0" cellpadding="0"  >
<tr><td align="center" style="background-color:#6699FF;height:5px;"></td></tr>
<tr align="center">
<td  style="display:none"><a>Mã Sinh viên </a></td>
<td  style="width: 80px;"><a>Tên Sinh viên </a></td>
<td  style="width: 180px;"><a>Lớp </a></td>
<td  style="width: 45px;"><a>Email</a></td>
<td  style="width: 45px;"><a>Sđt </a></td></tr>
<?php
foreach($data as $r)
{
	?>
    <tr><td><?php echo $r["mssv"];?></td>
    <td><?php echo $r["hoten"];?></td>
    <td><?php echo $r["lop"];?></td>
    <td><?php echo $r["email"];?></td>
    <td><?php echo $r["sdt"];?></td>
    <?php
}
?>
</table>

</body>
</html>
