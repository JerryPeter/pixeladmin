@extends('layouts/main')

@section('title','KertasKerja :: Tambah data Department')

@section('header_additional')

@endsection()

@section('content')
<!-- ================= BEGIN: CONTENT ============================= -->
<div class="px-content clearfix">
    <div class="page-messages-container box m-a-0 bg-transparent position-static">
      <div class="box-row">
        <!-- Content -->

        <div class="page-messages-content box-cell valign-top">
          <h3 class="p-x-3" style="margin-top: 5px;">Tambah Data Department</h3>

          <div class="panel">
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

        <!-- / Content -->

      </div>
    </div>
  </div>
<!-- ================= END: CONTENT ============================= -->
@endsection()