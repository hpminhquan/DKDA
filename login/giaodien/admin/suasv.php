<?php

$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");


$masv=$_GET["masv"];
$sql ="select * from sinhvien where mssv=$masv";
$o2=$o->query($sql);
$data = $o2->fetchAll(PDO::FETCH_ASSOC);
$sql2 ="select * from user join sinhvien on user.user_id=sinhvien.user_id where sinhvien.mssv=$masv";
$o3=$o->query($sql2);
$data2 = $o3->fetchAll(PDO::FETCH_ASSOC);

//$_SESSION["idtk"]=$data2[0]["user_id"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link REL="SHORTCUT ICON" HREF="../../images/logoSTU.ico"> 
<link rel="stylesheet" type="text/css" href="../../css/default.css" />

<title>Trang Quản lý</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../js/style.css">
  <script src="../js/choosen.js"></script>
</head>

<body>


<table  border=0 cellpadding=5 cellspacing=0 align="center" width="700">
		<tr>
		<td colspan="2"><img src="../../images/logo.gif"/>
		</td>
	</tr>
		<tr>
        
        
        <div >
    <ul class="nav nav-tabs">
       <li class="active"><a href="../../trangchuadmin.php">Home</a></li>
      
       <li style="float:right"><a href="../../logout.php">Thoát</a></li>
    </ul>
</div>
        
	</tr>
</TABLE>
		
    <hr width="50%" style="border-color:#0005FF">
    <div style="text-align:center;font-size:18px;">Sửa Thông tin Sinh viên</div>
   
   
   <div class="container">
    <form style="margin:10px auto;width:50%" name="form" action="../../chucnang/admin/editsv.php?idtk=<?php echo $data2[0]["user_id"]?>" method="post" enctype="multipart/form-data">
     
      <div class="form-group">
        <label for="inputsm" style="padding-left:15px">Tên Sinh viên:</label>
        <input class="form-control input-sm" placeholder="nhập tên Sinh viên..." id="tensv" name="tensv" type="text" required value="<?php echo $data[0]["hotensv"]; ?>">
      </div>
       <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">MSSV:</label>
        <input class="form-control" placeholder="nhập mssv..." id="mssv" name="mssv" type="text" required value="<?php echo $data[0]["mssv"]; ?>">
      </div>
       <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Lớp:</label>
        <input class="form-control" placeholder="nhập lớp..." id="lop" name="lop" type="text" required value="<?php echo $data[0]["lop"]; ?>">
      </div>
       <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Email:</label>
        <input class="form-control" placeholder="nhập email..." id="email" name="email" type="text" required value="<?php echo $data[0]["email"]; ?>">
      </div>
       <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Sđt:</label>
        <input class="form-control" placeholder="nhập sđt..." id="sdt" name="sdt" type="text" required value="<?php echo $data[0]["sdt"]; ?>">
      </div>
      <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Tên đăng nhập:</label>
        <input class="form-control" placeholder="nhập sđt..." id="iddn" name="iddn" type="text" required value="<?php echo $data2[0]["username"]; ?>">
      </div>
      <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Mật khẩu:</label>
        <input class="form-control" placeholder="nhập sđt..." id="pw" name="pw" type="text" required value="<?php echo $data2[0]["password"]; ?>">
      </div>
     
     
     
      
     
      
     
       
     
       <div class="form-group" style="float:right">
        <input class="btn btn-success" id="btnThem" name="btnThem" value="Save" type="submit">
      </div>
    </form>
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
