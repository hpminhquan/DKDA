<?php
	
	
	function postIndex2($index, $value="")
	{
		if (!isset($_POST[$index]))	return $value;
		return $_POST[$index];
	}
	
	$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
	$o->query("set names 'utf8'");
	
	
	$sm=postIndex2("submit");
	$list=postIndex2("list");
	$tk = postIndex2("tu_khoa");
	$err = "";
	if($list=='doan'){
		$sql = "select * from doan where tenda like '%$tk%'";
		$o2=$o->query($sql);
		$data = $o2->fetchAll(PDO::FETCH_ASSOC);
		if($tk==$err){
			$sql ="select * from doan";
			$o2=$o->query($sql);
			$data = $o2->fetchAll(PDO::FETCH_ASSOC);
			}
	}
	
	
	
?>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../js/style.css">
  <script src="../js/choosen.js"></script>

<body>
<div class="table-responsive" style="height:300px">
	<table class="table" width="1000" bordercolorlight="#000000" >
       <thead>
        	<th width="300">Tên Đồ án</th>
            <th width="100">MĐA</th>
            <th width="100">Ngày bắt đầu</th>
            <th width="250">Ngày kết thúc</th>
           
            
       </thead>
        <?php
		//echo $sm;
			if($sm!=$err){
				foreach($data as $v){
					$ten=$v['tenda'];
					$lop=$v['mda'];
					$mssv= $v['ngaybatdau'] ;
					$ngaydangky=$v['ngayketthuc'];
					
					?>
					<tr>
						<td> <?php echo "$ten" ?></td>
						<td><?php echo "$lop" ?></td>
						<td><?php echo "$mssv" ?></td>
                        <td><?php echo "$ngaydangky" ?></td>
                        <td><a href="giaodien/admin/suada.php?mada=<?php echo $v['mda']?>">Sửa</a></td>
                        <td><a href="chucnang/admin/xoada.php?mada=<?php echo $v['mda']?>">Xóa</a></td>
                        
                        
					</tr>
					<?php
				   // print_r($v);
				}
			}else {}
		?>
    </table>
</div>
</body>
