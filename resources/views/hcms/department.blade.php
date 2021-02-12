@extends('layouts/main')

@section('title','KertasKerja :: Attandance')

@section('header_additional')

@endsection()


@section('footer_additional')

<script>    
    // -------------------------------------------------------------------------
    // Initialize DataTables

    $(document).ready(function() {
        let table = $('#datatables').dataTable({
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }],
            select: {
                style: 'os',
                selector: 'td:first-child'
            },
            order: [
                [1, 'asc']
            ]
        });

        table.on("click", "th.select-checkbox", function() {
            if ($("th.select-checkbox").hasClass("selected")) {
                example.rows().deselect();
                $("th.select-checkbox").removeClass("selected");
            } else {
                example.rows().select();
                $("th.select-checkbox").addClass("selected");
            }
        }).on("select deselect", function() {
            ("Some selection or deselection going on")
            if (example.rows({
                    selected: true
                }).count() !== example.rows().count()) {
                $("th.select-checkbox").removeClass("selected");
            } else {
                $("th.select-checkbox").addClass("selected");
            }
        });        

      //$('#datatables').dataTable();
      $('#datatables_wrapper .table-caption').text('Master Department');
      $('#datatables_wrapper .dataTables_filter input').attr('placeholder', 'Search...');

      
    });
  </script>
@endsection()


@section('content')
<!-- ================= BEGIN: CONTENT ============================= -->
<div class="px-content">
    <div class="page-profile-v2-header page-header panel p-y-2">
    <div class="box m-a-0">
        <div class="box-cell col-md-6 valign-middle text-xs-center text-md-left">
        <a href="#" class="text-default m-r-1"><strong>Klik disini</strong> Informasi tambahan </a>
        </div>

        <!-- Spacer -->
        <div class="m-t-2 visible-xs visible-sm"></div>

        <div class="box-cell col-md-6 valign-middle text-xs-center text-md-right">
        <a href="#" class="btn btn-sm m-r-1"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Message</a>
        <a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Following</a>
        </div>
    </div>
    </div>
    <div class="page-header">
      <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-android-folder"></i>Master Data / </span>Department</h1>
    </div>
    <div class="panel" id="objFullscreen">
        <div class="collapse navbar-collapse m-a-0" id="px-demo-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-multi-column">
                    <ul class="dropdown-menu dropdown-column col-md-4">
                    <li class="dropdown-header">Business</li>
                    <li><a href="#">Design &amp; Urban Ecologies</a></li>
                    <li><a href="#">Fine Art</a></li>
                    <li><a href="#">Fashion Design</a></li>
                    <li><a href="#">Strategic Design</a></li>
                    </ul>
                    <ul class="dropdown-menu dropdown-column col-md-4">
                    <li class="dropdown-header">Liberal Arts</li>
                    <li><a href="#">Anthropology</a></li>
                    <li><a href="#">Media Studies</a></li>
                    <li><a href="#">Philosophy</a></li>
                    </ul>
                    <ul class="dropdown-menu dropdown-column col-md-4">
                    <li class="dropdown-header">Social Sciences</li>
                    <li><a href="#">Food Studies</a></li>
                    <li><a href="#">Journalism</a></li>
                    <li><a href="#">Non Profit Management</a></li>
                    </ul>
                </div>
                </li>

                <li>
                    <a href="" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="sidebar" data-target="#sidebar-with-tabs">
                        <i class="fa fa-plus m-r-1"></i>Tambah
                    </a>
                </li>
                <li>
                    <a href="department_add" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-edit m-r-1"></i>Ubah
                    </a>
                </li>
                <li>
                    <a href="" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-remove m-r-1"></i>Hapus
                    </a>
                </li>                                   
            </ul>

            <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-navicon"></i>                
                    <span class="hidden-md">&nbsp;&nbsp;Aksi lain</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="pages-profile-v2.html"><span class="label label-warning pull-xs-right"><i class="fa fa-asterisk"></i></span>Profile</a></li>
                    <li><a href="pages-account.html">Account</a></li>
                    <li><a href="pages-messages-list.html"><i class="dropdown-icon fa fa-envelope"></i>&nbsp;&nbsp;Messages</a></li>
                    <li class="divider"></li>
                    <li><a href="pages-signin-v1.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                </ul>
            </li>

            <!-- ===================== BEGIN: FULLSCREEN  ====================================-->
            <li class="dropdown">           
            <a href="#" id="btnFullscreenObj">
                <i class="px-navbar-icon ion-qr-scanner font-size-14"></i>
                <span class="px-navbar-icon-label">Fullscreen</span>
            </a>	                                      
            </li>
            <!-- ===================== END: FULLSCREEN ====================================-->               

        </ul>
        </div>    
        
        <div class="table-primary">                      
            <div class="table">
                <table class="table table-striped table-bordered" id="datatables">
                    <thead>
                    <tr>
                        <th><input type="checkbox" name="select-checkbox"></th>
                        <th>Dept ID</th>
                        <th>Code</th>
                        <th>Nama Department</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX">
                        <td><input type="checkbox" value="D000001"></td>
                        <td>D000001</td>
                        <td>MIS</td>
                        <td>Managment Information System</td>
                        <td class="center">Department MIS</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>
                    <tr class="even gradeC">
                        <td><input type="checkbox" value="D000002"></td>
                        <td>D000002</td>
                        <td>SALES</td>
                        <td>Sales</td>
                        <td class="center">Department Sales</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>
                    <tr class="odd gradeA">
                        <td><input type="checkbox" value="D000003"></td>
                        <td>D000003</td>
                        <td>HCM</td>
                        <td>Human Capital Management</td>
                        <td class="center">Department Human Capital</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>
                    <tr class="even gradeA">
                        <td><input type="checkbox" value="D000004"></td>
                        <td>D000004</td>
                        <td>AUDIT</td>
                        <td>Internal Audit</td>
                        <td class="center">Department Internal Audit</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>
                    <tr class="odd gradeA">
                        <td><input type="checkbox" value="D000005"></td>
                        <td>D000005</td>
                        <td>FIN</td>
                        <td>Finance</td>
                        <td class="center">Department Finance</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>
                    <tr class="even gradeA">
                        <td><input type="checkbox" value="D000006"></td>
                        <td>D000006</td>
                        <td>MKT</td>
                        <td>Marketing & Pemasaran</td>
                        <td class="center">Department Marketing & Pemasaran</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>
                    <tr class="odd gradeX">
                        <td><input type="checkbox" value="D000007"></td>
                        <td>D000007</td>
                        <td>MIS</td>
                        <td>Managment Information System</td>
                        <td class="center">Department MIS</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>
                    <tr class="even gradeC">
                        <td><input type="checkbox" value="D000008"></td>
                        <td>D000008</td>
                        <td>SALES</td>
                        <td>Sales</td>
                        <td class="center">Department Sales</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>
                    <tr class="odd gradeA">
                        <td><input type="checkbox" value="D000009"></td>
                        <td>D000009</td>
                        <td>HCM</td>
                        <td>Human Capital Management</td>
                        <td class="center">Department Human Capital</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>
                    <tr class="even gradeA">
                        <td><input type="checkbox" value="D000010"></td>
                        <td>D000010</td>
                        <td>AUDIT</td>
                        <td>Internal Audit</td>
                        <td class="center">Department Internal Audit</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>
                    <tr class="odd gradeA">
                        <td><input type="checkbox" value="D000011"></td>
                        <td>D000011</td>
                        <td>FIN</td>
                        <td>Finance</td>
                        <td class="center">Department Finance</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>
                    <tr class="even gradeA">
                        <td><input type="checkbox" value="D000012"></td>
                        <td>D000012</td>
                        <td>MKT</td>
                        <td>Marketing & Pemasaran</td>
                        <td class="center">Department Marketing & Pemasaran</td>
                        <td class="center"><a href="#" class="label label-success">Active</a></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ================= END: CONTENT ============================= -->
@endsection()