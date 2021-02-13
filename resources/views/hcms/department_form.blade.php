@extends('layouts/main')

@section('title','KertasKerja :: Tambah data Department')

@section('header_additional')

@endsection()

@section('content')
<!-- ================= BEGIN: CONTENT ============================= -->

<div class="px-content clearfix">
  <div class="p-a-3">
      <div class="page-messages-container box m-a-0 bg-transparent position-static">
        <div class="box-row">
          <div class="page-messages-content box-cell valign-top">        

          <div class="page-header">
            <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-android-checkbox-outline"></i>Department / </span>Tambah Data</h1>
          </div>
          
          <div class="panel panel-primary panel-dark " id="objFullscreen">
            <div class="panel-heading">                     
              <span class="panel-title">Department :: Tambah Data </span>    
              <div class="panel-heading-controls">
                <button class="btn btn-xs btn-info btn-outline-colorless-inverted"><i class="fa fa-close"></i></button>    
                <button class="btn btn-xs btn-info btn-outline-colorless-inverted" id="btnFullscreenObj"><i class="ion-qr-scanner"></i></button>         
              </div>
            </div>

            <div class="panel-body">
              <form action="department">
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

          <!-- / Content -->

        </div>
      </div>
  </div>    
</div>
<!-- ================= END: CONTENT ============================= -->
@endsection()