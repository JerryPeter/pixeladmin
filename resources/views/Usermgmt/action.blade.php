@extends('layouts/main')

@section('title','KertasKerja :: Attandance')

@section('header_additional')

@endsection()


@section('footer_additional')
<script>    
    // -------------------------------------------------------------------------
    // Initialize DataTables

    $(document).ready(function() {
        function formatDetail(value,row){
                var href = 'innerlist.php?list='+row.id;
                var dhref = 'dellist.php?list='+row.id;
                return '<center><a target="_blank" href="' + href + '"><span class="btn btn-primary btn-xs"><i class="fa fa-search"></i> Preview</span></a><a href="' + dhref + '" class="easyui-linkbutton" iconCls="icon-remove" plain="true" >Remove Entry</a></center>';
            }

        $('#dg').datagrid({
            url:'datagrid_data1.json',
            striped:true,
            title:"Action list",
            toolbar: '#tb',  
            pagination:true,   
            autoRowHeight:true,  
            rownumbers:true,  
            columns:[[                
                {field:'id',checkbox:true},
                {field:'itemid',title:'Item ID',width:80,sortable:true},
                {field:'productid',title:'Product ID',width:100,sortable:true},
                {field:'productname',title:'Name',width:100,sortable:true},
                {field:'unitcost',title:'Cost',width:100,align:'right'},
                {field:'status',title:'Product ID',width:100},
                {field:'listprice',title:'List Price',width:100},
                {field:'attr1',title:'Attribute',width:'50%'},
                {field:'action',title:'Action',width:100,align:'center',
                formatter:function(value,row,index){
                        var e = '<a href="javascript:void(0)" onclick="editrow(this)">Edit</a> ';
                        var d = '<a href="javascript:void(0)" onclick="deleterow(this)">Delete</a>';
                        return e+d;
                }
            }              
            ]],
            rowStyler: function(index,row){
                if (row.listprice<30){
                    return {
                        class: 'r1'
                    }
                }
            },
            onCheck: function(index,row){
                //...
            },
            onUncheck: function(index,row){
                //...
            }            
        });
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
     
    <div class="m-t-0 m-l-2 m-r-2 m-b-2">
        <div class="page-header">
        <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-android-folder"></i>Master Data / </span>Jabatan</h1>
        </div>

        <div class="panel panel-body-colorful scroll" id="objFullscreen">
            <div class="collapse navbar-collapse " id="px-demo-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" role="button" aria-haspopup="true" aria-expanded="false" id="toggle">
                            <i class="fa ion-android-search m-r-1"></i>Filter
                        </a>
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
            <div class="p-a-3">
                <div style="position: relative; min-height: 250px; overflow: hidden;" class="clearfix">
                    <!--------- ======================== BEGIN: CONTENT ==================================== -->
                    <table id="dg"></table>
                    <div id="tb">
                        <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:alert('Add')">Add</a>
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

