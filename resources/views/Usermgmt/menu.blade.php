@extends('layouts/main')

@section('title','KertasKerja :: Attandance')

@section('header_additional')

@endsection()


@section('footer_additional')
<script>    
    // -------------------------------------------------------------------------
    // Initialize DataTables

    $(document).ready(function() {
        $('#dg').datagrid({
            url:'datagrid_data1.json',
            striped:true,
            toolbar: [{
                iconCls: 'icon-edit',
                handler: function(){alert('edit')}
            },'-',{
                iconCls: 'icon-help',
                handler: function(){alert('help')}
            }],            
            columns:[[
                {field:'productid',title:'Product ID',width:100},
                {field:'productname',title:'Name',width:100},
                {field:'unitcost',title:'Cost',width:100,align:'right'},
                {field:'status',title:'Product ID',width:100},
                {field:'listprice',title:'List Price',width:100},
                {field:'attr1',title:'Attribute',width:100,align:'right'},               
                {field:'itemid',title:'Item ID',width:100,align:'right'}
            ]]
        });
        

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
         

      $('#tables_wrapper .table-caption').text('Master Jabatan');
      $('#tables_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
      
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
                        <a href="" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="sidebar" data-target="#sidebar-right">
                            <i class="fa fa-plus m-r-1"></i>Tambah
                        </a>
                    </li>
                    <li>
                        <a href="Jabatan_add" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-edit m-r-1"></i>Ubah
                        </a>
                    </li>
                    <li>
                        <a href="#" role="button" aria-haspopup="true" aria-expanded="false" id="toggle">
                            <i class="fa ion-android-search m-r-1"></i>Filter
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
                            <li><a href="aplikasi_detail"><span class="label label-warning pull-xs-right"><i class="fa fa-asterisk"></i></span>Profile</a></li>
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
            <div class="m-t-0 m-l-2 m-r-2 m-b-2">
                <div style="position: relative; min-height: 250px; overflow: hidden;" class="clearfix">
                    <!--------- ======================== BEGIN: CONTENT ==================================== -->
                            <table id="tt" class="easyui-datagrid" 
                                    style="width:100%;height:500px"                                  
                                    toolbar="#tb"
                                    pagination="true"
                                    data-options="rownumbers:true,singleSelect:true,url:'datagrid_data1.json', method:'get'"
                                    >
                                <thead>
                                    <tr>
                                        <th data-options="field:'ck',checkbox:true"></th>
                                        <th field="itemid" width="80">Item ID</th>
                                        <th field="productid" width="80">Product ID</th>
                                        <th field="listprice" width="80" align="right">List Price</th>
                                        <th field="unitcost" width="80" align="right">Unit Cost</th>
                                        <th field="attr1" width="60%">Attribute</th>
                                        <th field="status" width="60" align="center">Status</th>
                                    </tr>
                                </thead>
                            </table>
                            <div id="tb">
                                <a href="#" class="easyui-linkbutton" plain="true" onclick="javascript:alert('Add')"><i class="fa fa-plus m-r-1"></i>Add</a>
                                <a href="#" class="easyui-linkbutton" iconCls="icon-cut" plain="true" onclick="javascript:alert('Cut')">Cut</a>
                                <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:alert('Save')">Save</a>
                            </div>
                    <!--------- ======================== END: CONTENT ====================================== -->
                </div>
            </div>
        </div>
    </div>    
</div>

<!-- ================= END: CONTENT ============================= -->
@endsection()