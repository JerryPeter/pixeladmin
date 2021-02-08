<nav class="navbar px-navbar">
    <!-- Header -->
    <div class="navbar-header">
      <a class="navbar-brand px-demo-brand" href="index.html">
          <img src="{{ url('assets/img/logo-color-50x50.png') }}" alt="" class="px-navbar-image">
        </span>KertasKerja</a>
    </div>

    <!-- Navbar togglers -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-demo-navbar-collapse" aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="px-demo-navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="font-size-20">
        <a href class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Human Capital</b></a>
        </li>
        <!-- ======================= BEGIN: COMPANY NAVBAR ===================================== -->
        <li class="dropdown">
          <a href class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i>PT. Kirana Sukses Mandiri</i></a>

        </li>
        <!-- ======================= END: COMPANY NAVBAR ===================================== -->    

      </ul>

      <!-- ======================= BEGIN: NOTIFICATION NAVBAR ===================================== -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="https://stackoverflow.com" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="px-navbar-icon fa fa-bullhorn font-size-14"></i>
            <span class="px-navbar-icon-label">Notifications</span>
            <span class="px-navbar-label label label-success">5</span>
          </a>
          <div class="dropdown-menu p-a-0" style="width: 300px">
            <div id="navbar-notifications" style="height: 280px; position: relative;">
                @include('layouts.includes.notification') 
            </div>

            <a href="#" class="widget-more-link">MORE NOTIFICATIONS</a>
          </div>
        </li>
        <!-- ======================= END: NOTIFICATION NAVBAR ===================================== -->

        <!-- ======================= BEGIN: MESSAGE NAVBAR ===================================== -->
        <li class="dropdown">
          <a href="https://google.com" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="px-navbar-icon fa fa-envelope font-size-14"></i>
            <span class="px-navbar-icon-label">Income messages</span>
            <span class="px-navbar-label label label-danger">8</span>
          </a>
          <div class="dropdown-menu p-a-0" style="width: 300px;">
            <div id="navbar-messages" style="height: 280px; position: relative;">
              @include('layouts.includes.message') 
            </div>
            <a href="#" class="widget-more-link">MORE MESSAGES</a>
          </div> <!-- / .dropdown-menu -->
        </li>
        <!-- ======================= END: MESSAGE NAVBAR ===================================== -->

        <!-- ===================== BEGIN: SEARCH NAVBAR MENU ====================================-->
        <li>
          <form class="navbar-form" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" style="width: 140px;">
            </div>
          </form>
        </li>
        <!-- ===================== END: SEARCH NAVBAR MENU ====================================-->

        <!-- ===================== BEGIN: PROFILE NAVBAR MENU ====================================-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="assets/img/pic.png" alt="" class="px-navbar-image">
            <span class="hidden-md">John Doe</span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="pages-profile-v2.html"><span class="label label-warning pull-xs-right"><i class="fa fa-asterisk"></i></span>Profile</a></li>
            <li><a href="pages-account.html">Account</a></li>
            <li><a href="pages-messages-list.html"><i class="dropdown-icon fa fa-envelope"></i>&nbsp;&nbsp;Messages</a></li>
            <li class="divider"></li>
            <li><a href="/"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
          </ul>
        </li>
        <!-- ===================== END: PROFILE NAVBAR MENU ====================================-->

        <!-- ===================== BEGIN: SETTING NAVBAR MENU ====================================-->
        <li class="dropdown">
          <a href="#" data-toggle="sidebar" data-target="#sidebar-with-tabs" id="right_sidebar">
            <i class="px-navbar-icon fa fa-th font-size-14"></i>
            <span class="px-navbar-icon-label">Setting</span>
          </a>	                                      
        </li>
        <!-- ===================== END: SETTING NAVBAR MENU ====================================-->        

      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>