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
	if($list=='sinhviennone'){
		$sql = "select * from sinhvien where hotensv like '%$tk%' and mda is null";
		$o2=$o->query($sql);
		$data = $o2->fetchAll(PDO::FETCH_ASSOC);
		if($tk==$err){
			$sql ="select * from sinhvien where mda is null";
			$o2=$o->query($sql);
			$data = $o2->fetchAll(PDO::FETCH_ASSOC);
			}
	}
	
	
	
?>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<body>
<div class="table-responsive" style="height:300px">
	<table class="table" width="1000" bordercolorlight="#000000" >
       <thead>
        	<th width="300">Tên sinh viên</th>
            <th width="100">Lớp</th>
            <th width="100">MSSV</th>
            
            
       </thead>
        <?php
		//echo $sm;
			if($sm!=$err){
				foreach($data as $v){
					$ten=$v['hotensv'];
					$lop=$v['lop'];
					$mssv= $v['mssv'] ;
					
					?>
					<tr>
						<td> <?php echo "$ten" ?></td>
						<td><?php echo "$lop" ?></td>
						<td><?php echo "$mssv" ?></td>
                       
                        
					</tr>
					<?php
				   // print_r($v);
				}
			}else {}
		?>
    </table>
</div>
</body>
