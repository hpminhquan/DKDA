<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/datepicker.min.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap-switch.css" rel="stylesheet" type="text/css">
 
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
  <script src="js/bootstrap-switch.min.js" type="text/javascript"></script>
 
<meta charset="utf-8">
<title>Đăng ký Đồ án</title>
</head>

<body>
<?php
$o = new PDO("mysql:host=localhost; dbname=qlda","root","");
$o->query("set names 'utf8'");
?>
<div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Đăng ký Đồ án</h5>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' role='form'>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Đồ án</label>
            <div class='col-md-2'>
              <select class='form-control' id='id_accomodation' style="width:300px">
              <?php
			  	$sql ="select * from doan";
				$o2=$o->query($sql);
				$data = $o2->fetchAll(PDO::FETCH_ASSOC);
				foreach ($data as $v){
					echo"<option value='".$v['mda']."'>".$v['tenda']."</option>";
				}
				
				?>
              
               
              </select>
            </div>
          </div>
          
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Ngày bắt đầu</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkin'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
              <label class='control-label col-md-2' for='id_checkout'>Ngày kết thúc</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkout'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_pets'>Làm nhóm</label>
            <div class='col-md-8'>
              <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_pets_switch'>
                <input id='id_pets' type='checkbox' onChange="change()" value='chk_hydro'>
              </div>
            </div>
          </div>
         
        
         
          
            
            
            <div id="ln" style="transition:1s all; overflow:hidden">
           <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>MSSV</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='Mã số sinh viên' type='text'>
                </div>
              </div>
            </div>
          </div>
           <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Họ tên</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='Họ tên' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Lớp</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='Lớp' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Liên lạc</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='E-mail' type='text'>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_phone' placeholder='Số điện thoại' type='text'>
                </div>
              </div>
            </div>
          </div>
            </div>
            
            
         <script>
		 	function change(){
				var checkbox = document.getElementById("id_pets").checked
				var lamnhom = document.getElementById("ln")
				if (checkbox){
					lamnhom.style.height = "296px";
				}else{
					lamnhom.style.height = "0";
				}
			}
			change();
         </script>
         
         
         
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit'>Đăng ký</button>
            </div>
           
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
