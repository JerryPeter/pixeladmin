  <!-- RIGHT SIDEBAR --->
  <div class="px-sidebar-right panel panel-dark panel-body-colorful" id="sidebar-with-tabs" data-width="350">
    <div class="panel panel-dark panel-body-colorful ">
      <div class="panel-heading ">
        <span class="panel-title">Right Sidebar Panel</span>
        <div class="panel-heading-icon">
          <a href='#' data-toggle="sidebar" data-target="#sidebar-with-tabs"><i class="fa fa-remove panel-dark"></i></a>
        </div>
      </div>
    </div>
    <div class="px-sidebar-content">
      <div class="panel-body">
            <form action="department" class="panel-body">
              <div class="form-group">
                <label for="page-messages-new-from">Code</label>
                <input type="text" class="form-control" id="page-messages-new-from" value="DEPT0001" readonly>
              </div>

              <div class="form-group">
                <label for="page-messages-new-to">Nama Department</label>
                <!-- NOTE: Select2 v4 is not support input[type=text] fields -->
                <input type="text" class="form-control" id="page-messages-new-from" value="<nama department disini>">
              </div>

              <div class="form-group">
                <label for="page-messages-new-subject">Keterangan</label>
                <textarea class="form-control" id="page-messages-new-text" rows="8"></textarea>
              </div>

              <hr class="panel-wide-block">

              <div class="text-md-right">
                <button type="submit" class="btn">Batal</button>&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>      
      </div>
    </div>         
  </div>
  <!-- RIGHT SIDEBAR --->  