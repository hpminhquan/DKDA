<?php /*
include "config/config.php";
spl_autoload_register("loadClass");
$db= new Db();*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Đăng Nhập </title>
  <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>

<body>

  <div class="wrap">
		<div class="avatar">
     	<img src="images/55200419-HINHGIAODUC_HUONGPMJ.jpg">
        </div>
        <form action="trangchu.php" method="post">
		<input type="text" name="u" placeholder="Username" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" name="mk" placeholder="Password" required>
		
        <input type="submit" id="button" name="sm" value="Đăng nhập" style=" margin-top: 13px !important;width: 100%;border-radius: 7px;
background: #b6ee65;text-decoration: center;border: none;color: #51771a;margin-top:-5px;padding-top: 14px;padding-bottom: 14px;outline: none;font-size: 13px;border-bottom: 3px solid #307d63;cursor: pointer;">
        
     
        </form>
	</div>
</body>
</html>