
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link REL="SHORTCUT ICON" HREF="images/logoSTU.ico"> 
<link rel="stylesheet" type="text/css" href="default.css" />

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
		<td colspan="2"><img src="images/logo.gif"/>
		</td>
	</tr>
		<tr>
        
        
        <div >
    <ul class="nav nav-tabs">
       <li class="active"><a href="trangchuadmin.php">Home</a></li>
       <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="trangchuadmin.php">Thêm
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="themsv.php">Thêm Sinh viên</a></li>
           <li><a href="themda.php">Thêm Đồ án</a></li>
         </ul>
       </li>
       <li style="float:right"><a href="logout.php">Thoát</a></li>
    </ul>
</div>
        
	</tr>
</TABLE>
		
    <hr width="50%" style="border-color:#0005FF">
    <div style="text-align:center;font-size:18px;">Thêm Giảng viên</div>
   
   
   <div class="container">
    <form style="margin:10px auto;width:50%" name="form" action="chucnang/admin/addgv.php" method="post" enctype="multipart/form-data">
     
      <div class="form-group">
        <label for="inputsm" style="padding-left:15px">Tên Giảng viên:</label>
        <input class="form-control input-sm" placeholder="nhập tên Giảng viên..." id="tengv" name="tengv" type="text" required>
      </div>
       <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Mã GV:</label>
        <input class="form-control" placeholder="nhập mgv..." id="mgv" name="mgv" type="text" required>
      </div>
       <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Học hàm:</label>
        <input class="form-control" placeholder="nhập học hàm..." id="hh" name="hh" type="text" required>
      </div>
       <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Học vị:</label>
        <input class="form-control" placeholder="nhập học vị..." id="hv" name="hv" type="text" required>
      </div>
      <div style="margin-top:25px">
         <label for="inputlg" style="padding-right:20px">Giảng viên:</label>
		 <input id="ch"  name="ch" type="radio" value="1" required >&nbsp;Cơ hữu &nbsp;&nbsp;&nbsp;&nbsp;
		 <input id="ch" name="ch" type="radio" value="0">&nbsp;Thỉnh giảng
       </div>
     
     
      
     
      
     
       
     
       <div class="form-group" style="float:right">
        <input class="btn btn-success" id="btnThem" name="btnThem" value="Thêm" type="submit">
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
