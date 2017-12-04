<?php
$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");

if(!isset($_SESSION)) session_start();
if(!isset($_POST["sm"]))
{
	header("location:login.php");exit;
}

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

<table cellspacing="0" cellpadding="0"  border="1">
<tr align="center" style="background-color:#6699FF;height:5px;">
<td  >Mã Sinh viên</td>
<td  >Tên Sinh viên </td>
<td  >Lớp </td>
<td  >Email</td>
<td  >Sđt </td></tr>
<?php
foreach($data2 as $r)
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