<?php
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION["dadangnhap"])){
	header("location:index.php");exit;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link REL="SHORTCUT ICON" HREF="images/logoSTU.ico"> 
<link rel="stylesheet" type="text/css" href="default.css" />

<title>Trang cá nhân</title>
</head>

<body>

<?php
$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");
$user_id=$_SESSION["dadangnhap"];
$_SESSION["masvht"]=$user_id;
$sql ="select * from sinhvien where user_id='$user_id'";
$o3=$o->query($sql);
$data2 = $o3->fetchAll(PDO::FETCH_ASSOC);
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
		<td style="background-color:#336699; color:white;text-align:right;"><a style="float:left;padding-left:10px" class='menu' id='menu_1' href='dangkyda1.php'>Đăng ký Đồ án</a> <a style="padding-right:10px" class='menu' id='menu_2' href='logout.php'>Thoát</a> </td>
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
		<td><?php echo $r["hotensv"];?></td>
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
		
	</tr>
</table>


	</div>
    <hr width="50%" style="border-color:#0005FF">
    <div style="text-align:center;font-size:18px;">Tìm kiếm thông tin</div>
    <form action="trangchu.php" method="post" id='frm1' name="timkiem" style="margin-top:-130px; margin-left:350px">
                <div class="form-group">
                    <div class="row" style="padding-top:150px" align="right">
                         <div  >
                         </div>
                         <div class="col-xs-8 col-md-8" >
                             <input type="text" class="form-control" name="tu_khoa" >
                         </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-md-12" >
                             <select name="list">
                                <option value="sinhvien" selected>Sinh viên đã đăng ký</option>
                                <option value="sinhviennone" >Sinh viên chưa đăng ký</option>
                             </select><br />
                         </div>
                     </div> 
                 </div>
                 <div class="form-group">        
                     <div class="col-sm-offset-2 col-sm-2"  style="padding-bottom:50px; padding-right:5px; padding-top:20px; float:right">
                         
                     </div>
                     <div>
                     <button type="submit" name="submit" class="btn btn-success" style="font-family:Georgia, 'Times New Roman', Times, serif" value="tim" >Tìm</button>
                     </div>
                 </div>
            </form>
    <div style=" margin-left:350px">
      		<?php
			if(!isset($_POST["list"])){
				require "tim_kiem.php";
			}else{
					if($_POST["list"]=="sinhvien") 
							require "tim_kiem.php";
					else 
							require "tim_kiem_none.php";}?>
     </div>
<table  border=0 cellpadding=5 cellspacing=0 align="center" width="700" >
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
