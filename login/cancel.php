 <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Ngày bắt đầu</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input type="text" disabled value="<?php 
                        echo date("m/d/Y",strtotime($data[0]['ngaybatdau'])); 
                  ?>
                 "> 
                  
                 
                </div>
              </div>
              <label class='control-label col-md-2' for='id_checkout'>Kết thúc</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input type="text" disabled value="<?php 
                         echo date("d/m/Y",strtotime($data[0]['ngayketthuc'])); 
                  ?>
                 ">
                  
                </div>
              </div>
            </div>
          </div>
          
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Ngày đăng ký</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input type="text" disabled value="<?php echo   date("d/m/Y") ; ?>">
                 
                </div>
              </div>
             
            </div>
          </div>