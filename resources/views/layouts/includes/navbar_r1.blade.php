  <!-- ================= BEGIN: NAVBAR ============================= -->
  <nav class="navbar px-navbar">
    <!-- Header -->
    <div class="navbar-header">
      <a class="navbar-brand px-demo-brand" href="index.html"><span class="px-demo-logo bg-primary"><span class="px-demo-logo-1"></span><span class="px-demo-logo-2"></span><span class="px-demo-logo-3"></span><span class="px-demo-logo-4"></span><span class="px-demo-logo-5"></span><span class="px-demo-logo-6"></span><span class="px-demo-logo-7"></span><span class="px-demo-logo-8"></span><span class="px-demo-logo-9"></span></span>PixelAdmin</a>
    </div>

    <!-- Navbar togglers -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-demo-navbar-collapse" aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="px-demo-navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
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

        <li class="dropdown">
          <a href class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bookmark m-r-1"></i>Links</a>
          <ul class="dropdown-menu">
            <li class="dropdown-toggle">
              <a href>Products</a>
              <ul class="dropdown-menu">
                <li><a href="#">All</a></li>
                <li><a href="#">Popular</a></li>
                <li><a href="#">Recent</a></li>
                <li><a href="#">Featured</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-plus m-r-1"></i>Add product</a></li>
              </ul>
            </li>
            <li class="dropdown-toggle">
              <a href>Users</a>
              <ul class="dropdown-menu">
                <li><a href="#">All</a></li>
                <li><a href="#">Recent</a></li>
                <li><a href="#">Banned</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-user-plus m-r-1"></i>Create user</a></li>
              </ul>
            </li>
            <li class="dropdown-toggle">
              <a href>Blog</a>
              <ul class="dropdown-menu">
                <li><a href="#">All</a></li>
                <li><a href="#">Popular</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-edit m-r-1"></i>New blog post</a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li><a href="#">Overview</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="https://stackoverflow.com" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="px-navbar-icon fa fa-bullhorn font-size-14"></i>
            <span class="px-navbar-icon-label">Notifications</span>
            <span class="px-navbar-label label label-success">5</span>
          </a>
          <div class="dropdown-menu p-a-0" style="width: 300px">
            <div id="navbar-notifications" style="height: 280px; position: relative;">
              <div class="widget-notifications-item">
                <div class="widget-notifications-title text-danger">SYSTEM</div>
                <div class="widget-notifications-description"><strong>Error 500</strong>: Syntax error in index.php at line <strong>461</strong>.</div>
                <div class="widget-notifications-date">12h ago</div>
                <div class="widget-notifications-icon fa fa-hdd-o bg-danger"></div>
              </div>

              <div class="widget-notifications-item">
                <div class="widget-notifications-title text-info">STORE</div>
                <div class="widget-notifications-description">You have <strong>9</strong> new orders.</div>
                <div class="widget-notifications-date">12h ago</div>
                <div class="widget-notifications-icon fa fa-truck bg-info"></div>
              </div>

              <div class="widget-notifications-item">
                <div class="widget-notifications-title text-default">CRON DAEMON</div>
                <div class="widget-notifications-description">Job <strong>"Clean DB"</strong> has been completed.</div>
                <div class="widget-notifications-date">12h ago</div>
                <div class="widget-notifications-icon fa fa-clock-o bg-default"></div>
              </div>

              <div class="widget-notifications-item">
                <div class="widget-notifications-title text-success">SYSTEM</div>
                <div class="widget-notifications-description">Server <strong>up</strong>.</div>
                <div class="widget-notifications-date">12h ago</div>
                <div class="widget-notifications-icon fa fa-hdd-o bg-success"></div>
              </div>

              <div class="widget-notifications-item">
                <div class="widget-notifications-title text-warning">SYSTEM</div>
                <div class="widget-notifications-description"><strong>Warning</strong>: Processor load <strong>92%</strong>.</div>
                <div class="widget-notifications-date">12h ago</div>
                <div class="widget-notifications-icon fa fa-hdd-o bg-warning"></div>
              </div>
            </div>

            <a href="#" class="widget-more-link">MORE NOTIFICATIONS</a>
          </div>
        </li>

        <li class="dropdown">
          <a href="https://google.com" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="px-navbar-icon fa fa-envelope font-size-14"></i>
            <span class="px-navbar-icon-label">Income messages</span>
            <span class="px-navbar-label label label-danger">8</span>
          </a>
          <div class="dropdown-menu p-a-0" style="width: 300px;">
            <div id="navbar-messages" style="height: 280px; position: relative;">
              <div class="widget-messages-alt-item">
                <img src="assets/demo/avatars/2.jpg" alt="" class="widget-messages-alt-avatar">
                <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                <div class="widget-messages-alt-description">from <a href="#">Robert Jang</a></div>
                <div class="widget-messages-alt-date">2h ago</div>
              </div>

              <div class="widget-messages-alt-item">
                <img src="assets/demo/avatars/3.jpg" alt="" class="widget-messages-alt-avatar">
                <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class="widget-messages-alt-description">from <a href="#">Michelle Bortz</a></div>
                <div class="widget-messages-alt-date">2h ago</div>
              </div>

              <div class="widget-messages-alt-item">
                <img src="assets/demo/avatars/4.jpg" alt="" class="widget-messages-alt-avatar">
                <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet.</a>
                <div class="widget-messages-alt-description">from <a href="#">Timothy Owens</a></div>
                <div class="widget-messages-alt-date">2h ago</div>
              </div>

              <div class="widget-messages-alt-item">
                <img src="assets/demo/avatars/5.jpg" alt="" class="widget-messages-alt-avatar">
                <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class="widget-messages-alt-description">from <a href="#">Denise Steiner</a></div>
                <div class="widget-messages-alt-date">2h ago</div>
              </div>

              <div class="widget-messages-alt-item">
                <img src="assets/demo/avatars/2.jpg" alt="" class="widget-messages-alt-avatar">
                <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet.</a>
                <div class="widget-messages-alt-description">from <a href="#">Robert Jang</a></div>
                <div class="widget-messages-alt-date">2h ago</div>
              </div>

              <div class="widget-messages-alt-item">
                <img src="assets/demo/avatars/3.jpg" alt="" class="widget-messages-alt-avatar">
                <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class="widget-messages-alt-description">from <a href="#">Michelle Bortz</a></div>
                <div class="widget-messages-alt-date">2h ago</div>
              </div>

              <div class="widget-messages-alt-item">
                <img src="assets/demo/avatars/4.jpg" alt="" class="widget-messages-alt-avatar">
                <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet.</a>
                <div class="widget-messages-alt-description">from <a href="#">Timothy Owens</a></div>
                <div class="widget-messages-alt-date">2h ago</div>
              </div>

              <div class="widget-messages-alt-item">
                <img src="assets/demo/avatars/5.jpg" alt="" class="widget-messages-alt-avatar">
                <a href="#" class="widget-messages-alt-subject text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class="widget-messages-alt-description">from <a href="#">Denise Steiner</a></div>
                <div class="widget-messages-alt-date">2h ago</div>
              </div>
            </div>

            <a href="#" class="widget-more-link">MORE MESSAGES</a>
          </div> <!-- / .dropdown-menu -->
        </li>

        <li>
          <form class="navbar-form" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" style="width: 140px;">
            </div>
          </form>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="assets/demo/avatars/1.jpg" alt="" class="px-navbar-image">
            <span class="hidden-md">John Doe</span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="pages-profile-v2.html"><span class="label label-warning pull-xs-right"><i class="fa fa-asterisk"></i></span>Profile</a></li>
            <li><a href="pages-account.html">Account</a></li>
            <li><a href="pages-messages-list.html"><i class="dropdown-icon fa fa-envelope"></i>&nbsp;&nbsp;Messages</a></li>
            <li class="divider"></li>
            <li><a href="pages-signin-v1.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
  <!-- ================= END: NAVBAR ============================= -->
  