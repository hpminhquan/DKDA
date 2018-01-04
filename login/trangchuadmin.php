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
       <li class="active"><a href="#">Home</a></li>
       <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Thêm
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="themsv.php">Thêm Sinh viên</a></li>
           <li><a href="themgv.php">Thêm Giảng viên</a></li>
           <li><a href="themda.php">Thêm Đồ án</a></li>
         </ul>
       </li>
       <li style="float:right"><a href="logout.php">Thoát</a></li>
    </ul>
</div>
        
	</tr>
</TABLE>
		
    <hr width="50%" style="border-color:#0005FF">
    <div style="text-align:center;font-size:18px;">Tìm kiếm thông tin</div>
    <form action="trangchuadmin.php" method="post" id='frm1' name="timkiem" style="margin-top:-130px; margin-left:350px">
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
                                <option value="sinhvien" selected>Sinh viên</option>
                                <option value="giangvien" >Giảng viên</option>
                                <option value="doan" >Đồ án</option>
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
				require "/chucnang/admin/tim_kiemsv.php";
			}else{
					if($_POST["list"]=="sinhvien") 
							require "/chucnang/admin/tim_kiemsv.php";
					else if($_POST["list"]=="giangvien")
							require "/chucnang/admin/tim_kiemgv.php";
					else
							require "/chucnang/admin/tim_kiemda.php";}?>
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
