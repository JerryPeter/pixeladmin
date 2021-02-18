@extends('layouts/main')

@section('title','KertasKerja :: Attandance')

@section('header_additional')

<link rel="stylesheet" href="assets/css/jquery.treegrid.css">
@endsection()


@section('footer_additional')
<script type="text/javascript" src="assets/js/jquery.treegrid.js"></script>
<script type="text/javascript" src="assets/js/jquery.treegrid.bootstrap3.js"></script>
<script>    
    // -------------------------------------------------------------------------
    // Initialize DataTables

    $(document).ready(function() {

        $('#px-nav-filter').pxNav();

        $( "#btn_filter1" ).click(function() {
            $('#nav-filter').pxNav('toggle');
        });  

        $('#btn_filter').on('click', function() {
            alert("...");
            $('.nav-filter').pxNav('toggle');
        });        

        $('#toggle').on('click', function() {
            $('#px-nav-filter').pxNav('toggle');
        });        

        $('#btnFilterClose').on('click', function() {
            $('#px-nav-filter').pxNav('collapse');
        });       

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

      $('body').perfectScrollbar();


      $('#tables').DataTable( {
            "responsive": true,
            "lengthMenu": [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
            "autoWidth": false, // might need this
            "columns": [
                null, // automatically calculates
                null,  // remaining width
                null, // automatically calculates
                null,  // remaining width
                null, // automatically calculates
                null,  // remaining width                                
                { "width": "120px" }                
            ]            
      } );  

      $('#tables2').DataTable( {
            "responsive": true,
            "lengthMenu": [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
            "autoWidth": false, // might need this
            "columns": [
                null, // automatically calculates
                null,  // remaining width
                null, // automatically calculates
                null,  // remaining width
                null, // automatically calculates
                null,  // remaining width                                
                { "width": "120px" }                
            ]            
      } );         
         

      $('#tables_wrapper .table-caption').text('Menu Aplikasi');
      $('#tables_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
      

      $('#tables2_wrapper .table-caption').text('Action ');
      $('#tables2_wrapper .dataTables_filter input').attr('placeholder', 'Search...');      
    });

  </script> 
@endsection()


@section('content')
<!-- ================= BEGIN: CONTENT ============================= -->

<div class="px-content">
    <div>
        <div class="panel panel-body-colorful">
            <div class="collapse navbar-collapse" id="px-demo-navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-server"></i>                
                            <span class="hidden-md">&nbsp;&nbsp;Master Data</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="pages-profile-v2.html">Master Department</a></li>
                            <li><a href="pages-account.html">Master Divisi</a></li>
                            <li><a href="pages-messages-list.html"><i class="dropdown-icon fa fa-envelope"></i>&nbsp;&nbsp;Master Jabatan</a></li>
                        </ul>
                    </li>     

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-list-alt"></i>                
                            <span class="hidden-md">&nbsp;&nbsp;Transaksi</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="pages-profile-v2.html">Pesonnel</a></li>
                            <li><a href="pages-account.html">Payroll Prosess</a></li>
                            <li><a href="pages-messages-list.html"><i class="dropdown-icon fa fa-envelope"></i>&nbsp;&nbsp;Kirim Email</a></li>
                            <li class="divider"></li>
                            <li><a href="pages-signin-v1.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Payslip</a></li>
                        </ul>
                    </li>      


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-file-text-o"></i>                
                            <span class="hidden-md">&nbsp;&nbsp;Laporan</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="pages-profile-v2.html">Master Department</a></li>
                            <li><a href="pages-account.html">Master Divisi</a></li>
                            <li><a href="pages-messages-list.html"><i class="dropdown-icon fa fa-envelope"></i>&nbsp;&nbsp;Master Jabatan</a></li>
                            <li class="divider"></li>
                            <li><a href="pages-signin-v1.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                        </ul>
                    </li>          

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-wrench"></i>                
                            <span class="hidden-md">&nbsp;&nbsp;Utility</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="pages-profile-v2.html">Master Department</a></li>
                            <li><a href="pages-account.html">Master Divisi</a></li>
                            <li><a href="pages-messages-list.html"><i class="dropdown-icon fa fa-envelope"></i>&nbsp;&nbsp;Master Jabatan</a></li>
                            <li class="divider"></li>
                            <li><a href="pages-signin-v1.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                        </ul>
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
                            <li><a href="pages-signin-v1.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Outt</a></li>
                        </ul>
                    </li>              
                </ul>
            </div>    
        </div>
    </div>       
     
    <div class="p-t-0 p-l-3 p-r-3">
        <div class="page-header">
        <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-android-folder"></i>Master Data / </span>Jabatan</h1>
        </div>

        <div class="panel panel-body-colorful scroll" id="objFullscreen">
            <div class="collapse navbar-collapse " id="px-demo-navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
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
            <div class="m-t-0 m-l-2 m-r-2 m-b-2">
                <div style="position: relative; min-height: 250px; overflow: hidden;" class="clearfix">

                    <div class="px-content">
                        <div class="panel">
                            <div class="box">
                                <a href="#" class="box-cell col-xs-5 b-r-1 valign-middle text-xs-center bg-info font-size-24">
                                    <i class="fa fa-calendar"></i>&nbsp;&nbsp;<strong>Human Resources Management System</strong>
                                </a>

                                <div class="box-cell">
                                    <div class="box-container">
                                    <div class="box-row">
                                        <a href="#" class="box-cell p-a-1 valign-middle bg-info">
                                        Aplikasi ID : APP000001
                                        <i class="pull-xs-right fa fa-envelope-o"></i>
                                        </a>
                                    </div>
                                    <div class="box-row">
                                        <a href="#" class="box-cell p-a-1 valign-middle bg-info darken">
                                        Namespace : hcms
                                        <i class="pull-xs-right fa fa-bug"></i>
                                        </a>
                                    </div>
                                    <div class="box-row">
                                        <a href="#" class="box-cell p-a-1 valign-middle bg-info darker">
                                            Icon : People.png
                                        <i class="pull-xs-right fa fa-users"></i>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tabs-home" data-toggle="tab">
                                        Menu <span class="label label-success">12</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tabs-profile" data-toggle="tab">
                                        Action <span class="badge badge-primary">12</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content tab-content-bordered">
                                    <div class="tab-pane fade in active" id="tabs-home">
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
                                        </div>                                      
                                        <div class="table-light ">                                        
                                            <div class="table">    
                                                <table class="tree">

                                                <table class="table table-hover table-striped table-bordered tree" id="tables2">
                                                    <thead>
                                                    <tr>
                                                        <th><input type="checkbox" name="select-checkbox"></th>
                                                        <th>Jabatan ID</th>
                                                        <th>Code</th>
                                                        <th>Nama Jabatan</th>
                                                        <th>Keterangan</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX treegrid-1">
                                                            <td><input type="checkbox" value="D000001"></td>
                                                            <td>D000001</td>
                                                            <td>MIS</td>
                                                            <td>Managment Information System</td>
                                                            <td class="center">Department MIS</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td class="center">
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>                                                                                                                                              
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr class="even gradeC treegrid-2 treegrid-parent-1">
                                                            <td><input type="checkbox" value="D000002"></td>
                                                            <td>D000002</td>
                                                            <td>SALES</td>
                                                            <td>Sales</td>
                                                            <td class="center">Department Sales</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                            <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="odd gradeA treegrid-3 treegrid-parent-1">
                                                            <td><input type="checkbox" value="D000003"></td>
                                                            <td>D000003</td>
                                                            <td>HCM</td>
                                                            <td>Human Capital Management</td>
                                                            <td class="center">Department Human Capital</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="even gradeA treegrid-4 treegrid-parent-3">
                                                            <td><input type="checkbox" value="D000004"></td>
                                                            <td>D000004</td>
                                                            <td>AUDIT</td>
                                                            <td>Internal Audit</td>
                                                            <td class="center">Department Internal Audit</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td><input type="checkbox" value="D000005"></td>
                                                            <td>D000005</td>
                                                            <td>FIN</td>
                                                            <td>Finance</td>
                                                            <td class="center">Department Finance</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td><input type="checkbox" value="D000006"></td>
                                                            <td>D000006</td>
                                                            <td>MKT</td>
                                                            <td>Marketing & Pemasaran</td>
                                                            <td class="center">Department Marketing & Pemasaran</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td><input type="checkbox" value="D000007"></td>
                                                            <td>D000007</td>
                                                            <td>MIS</td>
                                                            <td>Managment Information System</td>
                                                            <td class="center">Department MIS</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td><input type="checkbox" value="D000008"></td>
                                                            <td>D000008</td>
                                                            <td>SALES</td>
                                                            <td>Sales</td>
                                                            <td class="center">Department Sales</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>

                                                    </tbody>
                                                </table>                                                     	                                
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="tab-pane fade" id="tabs-profile">
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
                                        </div>                                      
                                        <div class="table-light ">                                        
                                            <div class="table">    
                                                <table class="table table-hover table-striped table-bordered" id="tables2">
                                                    <thead>
                                                    <tr>
                                                        <th><input type="checkbox" name="select-checkbox"></th>
                                                        <th>Jabatan ID</th>
                                                        <th>Code</th>
                                                        <th>Nama Jabatan</th>
                                                        <th>Keterangan</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
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
                                                            <td class="center">
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>                                                                                                                                              
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td><input type="checkbox" value="D000002"></td>
                                                            <td>D000002</td>
                                                            <td>SALES</td>
                                                            <td>Sales</td>
                                                            <td class="center">Department Sales</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                            <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td><input type="checkbox" value="D000003"></td>
                                                            <td>D000003</td>
                                                            <td>HCM</td>
                                                            <td>Human Capital Management</td>
                                                            <td class="center">Department Human Capital</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td><input type="checkbox" value="D000004"></td>
                                                            <td>D000004</td>
                                                            <td>AUDIT</td>
                                                            <td>Internal Audit</td>
                                                            <td class="center">Department Internal Audit</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td><input type="checkbox" value="D000005"></td>
                                                            <td>D000005</td>
                                                            <td>FIN</td>
                                                            <td>Finance</td>
                                                            <td class="center">Department Finance</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td><input type="checkbox" value="D000006"></td>
                                                            <td>D000006</td>
                                                            <td>MKT</td>
                                                            <td>Marketing & Pemasaran</td>
                                                            <td class="center">Department Marketing & Pemasaran</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td><input type="checkbox" value="D000007"></td>
                                                            <td>D000007</td>
                                                            <td>MIS</td>
                                                            <td>Managment Information System</td>
                                                            <td class="center">Department MIS</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td><input type="checkbox" value="D000008"></td>
                                                            <td>D000008</td>
                                                            <td>SALES</td>
                                                            <td>Sales</td>
                                                            <td class="center">Department Sales</td>
                                                            <td class="center"><a href="#" class="label label-success">Active</a></td>
                                                            <td>
                                                                <center>
                                                                    <button type="button" class="btn btn-xs btn-default fa fa-pencil-square-o font-size-14"></i></button>
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-trash-o font-size-14"></button>                                                
                                                                    <button type="button" class="btn btn-xs btn-default border-default fa fa-list-alt font-size-14"></button>      
                                                                </center>
                                                            </td>                                
                                                        </tr>

                                                    </tbody>
                                                </table>                                
                                            </div>
                                        </div> 
                                    </div>
                                </div>                 

                            </div>
                        </div>                    
                    <!--------- ======================== BEGIN: CONTENT ==================================== -->
    
                    <!--------- ======================== END: CONTENT ====================================== -->
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

<!-- ================= END: CONTENT ============================= -->
@endsection()