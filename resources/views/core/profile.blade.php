@extends('layouts/main')

@section('title','PixelAdmin :: Profile')

@section('header_additional')
  <!-- Custom styling -->
  <style>
    .page-profile-v2-header.page-header {
      border: none;
      margin-bottom: 0;
      border-radius: 0;
    }

    .page-profile-v2-header .box {
      background: none !important;
    }

    .page-profile-v2-subheader {
      background: rgba(0, 0, 0, .02);
    }

    .page-profile-v2-avatar {
      max-width: 80px;
      border: 4px solid #fff;
      position: relative;
    }

    @media (min-width: 768px) {
      .page-profile-v2-avatar { margin-top: -70px; }
    }
  </style>
  <!-- / Custom styling -->
@endsection()

@section('content')
<!-- ================= BEGIN: CONTENT ============================= -->
<div class="px-content">
  <div class="p-a-3">
    <div class="page-profile-v2-header page-header panel p-y-2">
      <div class="box m-a-0">
        <div class="box-cell col-md-6 valign-middle text-xs-center text-md-left">
          <a href="#" class="text-default m-r-1"><strong>126</strong> Likes</a>
          <a href="#" class="text-default m-r-1"><strong>579</strong> Followers</a>
          <a href="#" class="text-default"><strong>100</strong> Following</a>
        </div>

        <!-- Spacer -->
        <div class="m-t-2 visible-xs visible-sm"></div>

        <div class="box-cell col-md-6 valign-middle text-xs-center text-md-right">
          <a href="#" class="btn btn-sm m-r-1"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Message</a>
          <a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Following</a>
        </div>
      </div>
    </div>

    <hr class="page-wide-block m-y-0">

    <div class="page-profile-v2-subheader page-block p-y-3">
      <div class="text-xs-center"><img src="assets/img/pic.png" alt="" class="page-profile-v2-avatar border-round"></div>
      <h1 class="font-size-24 text-xs-center m-y-1">Denise Steiner</h1>
      <h3 class="m-t-0 m-b-1 text-xs-center text-muted font-weight-normal">@dsteiner</h3>
    </div>

    <hr class="page-wide-block m-t-0">

    <div class="row">
      <div class="col-md-8 col-xl-9">

        <ul class="nav nav-lg nav-tabs nav-tabs-simple" id="profile-tabs">
          <li class="active">
            <a href="#profile-liked" data-toggle="tab">
              Liked
            </a>
          </li>
          <li>
            <a href="#profile-activity" data-toggle="tab">
              Activity
            </a>
          </li>
          <li>
            <a href="#profile-followers" data-toggle="tab">
              Followers
            </a>
          </li>
          <li>
            <a href="#profile-following" data-toggle="tab">
              Following
            </a>
          </li>
        </ul>

        <div class="tab-content p-y-0">
          <div class="tab-pane fade in active" id="profile-liked">
            <div class="row p-t-4">
              <div class="clearfix">

                <div class="widget-products-item col-xs-12 col-sm-6 col-xl-4">
                  <a href="#" class="widget-products-image">
                    <img src="assets/demo/thumbs/1.jpg">
                    <span class="widget-products-overlay"></span>
                  </a>
                  <a href="#" class="widget-products-title">
                    Some product
                  </a>
                  <div class="widget-products-footer text-muted">
                    <i class="fa fa-shopping-cart"></i> 1,121
                    <i class="fa fa-thumbs-up p-l-1"></i> 2,423
                    <i class="fa fa-comments p-l-1"></i> 523
                  </div>
                </div>

                <div class="widget-products-item col-xs-12 col-sm-6 col-xl-4">
                  <a href="#" class="widget-products-image">
                    <img src="assets/demo/thumbs/2.jpg">
                    <span class="widget-products-overlay"></span>
                  </a>
                  <a href="#" class="widget-products-title">
                    Some product
                  </a>
                  <div class="widget-products-footer text-muted">
                    <i class="fa fa-shopping-cart"></i> 1,121
                    <i class="fa fa-thumbs-up p-l-1"></i> 2,423
                    <i class="fa fa-comments p-l-1"></i> 523
                  </div>
                </div>

                <div class="widget-products-item col-xs-12 col-sm-6 col-xl-4">
                  <a href="#" class="widget-products-image">
                    <img src="assets/demo/thumbs/3.jpg">
                    <span class="widget-products-overlay"></span>
                  </a>
                  <a href="#" class="widget-products-title">
                    Some product
                  </a>
                  <div class="widget-products-footer text-muted">
                    <i class="fa fa-shopping-cart"></i> 1,121
                    <i class="fa fa-thumbs-up p-l-1"></i> 2,423
                    <i class="fa fa-comments p-l-1"></i> 523
                  </div>
                </div>

                <div class="widget-products-item col-xs-12 col-sm-6 col-xl-4">
                  <a href="#" class="widget-products-image">
                    <img src="assets/demo/thumbs/4.jpg">
                    <span class="widget-products-overlay"></span>
                  </a>
                  <a href="#" class="widget-products-title">
                    Some product
                  </a>
                  <div class="widget-products-footer text-muted">
                    <i class="fa fa-shopping-cart"></i> 1,121
                    <i class="fa fa-thumbs-up p-l-1"></i> 2,423
                    <i class="fa fa-comments p-l-1"></i> 523
                  </div>
                </div>

                <div class="widget-products-item col-xs-12 col-sm-6 col-xl-4">
                  <a href="#" class="widget-products-image">
                    <img src="assets/demo/thumbs/5.jpg">
                    <span class="widget-products-overlay"></span>
                  </a>
                  <a href="#" class="widget-products-title">
                    Some product
                  </a>
                  <div class="widget-products-footer text-muted">
                    <i class="fa fa-shopping-cart"></i> 1,121
                    <i class="fa fa-thumbs-up p-l-1"></i> 2,423
                    <i class="fa fa-comments p-l-1"></i> 523
                  </div>
                </div>

                <div class="widget-products-item col-xs-12 col-sm-6 col-xl-4">
                  <a href="#" class="widget-products-image">
                    <img src="assets/demo/thumbs/6.jpg">
                    <span class="widget-products-overlay"></span>
                  </a>
                  <a href="#" class="widget-products-title">
                    Some product
                  </a>
                  <div class="widget-products-footer text-muted">
                    <i class="fa fa-shopping-cart"></i> 1,121
                    <i class="fa fa-thumbs-up p-l-1"></i> 2,423
                    <i class="fa fa-comments p-l-1"></i> 523
                  </div>
                </div>

                <div class="widget-products-item col-xs-12 col-sm-6 col-xl-4">
                  <a href="#" class="widget-products-image">
                    <img src="assets/demo/thumbs/7.jpg">
                    <span class="widget-products-overlay"></span>
                  </a>
                  <a href="#" class="widget-products-title">
                    Some product
                  </a>
                  <div class="widget-products-footer text-muted">
                    <i class="fa fa-shopping-cart"></i> 1,121
                    <i class="fa fa-thumbs-up p-l-1"></i> 2,423
                    <i class="fa fa-comments p-l-1"></i> 523
                  </div>
                </div>

                <div class="widget-products-item col-xs-12 col-sm-6 col-xl-4">
                  <a href="#" class="widget-products-image">
                    <img src="assets/demo/thumbs/8.jpg">
                    <span class="widget-products-overlay"></span>
                  </a>
                  <a href="#" class="widget-products-title">
                    Some product
                  </a>
                  <div class="widget-products-footer text-muted">
                    <i class="fa fa-shopping-cart"></i> 1,121
                    <i class="fa fa-thumbs-up p-l-1"></i> 2,423
                    <i class="fa fa-comments p-l-1"></i> 523
                  </div>
                </div>

              </div>
              <div class="col-xs-12">
                <a href="#" class="widget-more-link p-y-3 b-a-1 font-size-14 font-weight-normal">Load more</a>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="profile-activity">
            <div class="panel m-b-0 p-y-1 b-t-0">
              <div class="widget-activity-item">
                <div class="widget-activity-avatar">
                  <img src="assets/demo/avatars/5.jpg" alt="">
                  <div class="widget-activity-icon fa fa-thumbs-up bg-success"></div>
                </div>
                <div class="widget-activity-header">
                  <a href="#" title="">Denise Steiner</a> liked <a href="#" title="">Article Name</a>
                </div>
                <div class="widget-activity-footer">2 hours ago</div>
              </div>

              <div class="widget-activity-item">
                <div class="widget-activity-avatar">
                  <img src="assets/demo/avatars/5.jpg" alt="">
                  <div class="widget-activity-icon fa fa-comment bg-info"></div>
                </div>
                <div class="widget-activity-header">
                  <a href="#" title="">Denise Steiner</a> commented on <a href="#" title="">Article Name</a>
                </div>
                <div class="widget-activity-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                </div>
                <div class="widget-activity-footer">2 hours ago</div>
              </div>

              <div class="widget-activity-item">
                <div class="widget-activity-avatar">
                  <img src="assets/demo/avatars/5.jpg" alt="">
                  <div class="widget-activity-icon fa fa-thumbs-down bg-danger"></div>
                </div>
                <div class="widget-activity-header">
                  <a href="#" title="">Denise Steiner</a> disliked <a href="#" title="">Article Name</a>
                </div>
                <div class="widget-activity-footer">2 hours ago</div>
              </div>

              <div class="widget-activity-item">
                <div class="widget-activity-avatar">
                  <img src="assets/demo/avatars/4.jpg" alt="">
                  <div class="widget-activity-icon fa fa-check bg-warning"></div>
                </div>
                <div class="widget-activity-header">
                  <a href="#" title="">Timothy Owens</a> followed <a href="#" title="">Denise Steiner</a>
                </div>
                <div class="widget-activity-footer">2 hours ago</div>
              </div>
              <div class="widget-activity-item">
                <div class="widget-activity-avatar">
                  <img src="assets/demo/avatars/5.jpg" alt="">
                  <div class="widget-activity-icon fa fa-thumbs-up bg-success"></div>
                </div>
                <div class="widget-activity-header">
                  <a href="#" title="">Denise Steiner</a> liked <a href="#" title="">Article Name</a>
                </div>
                <div class="widget-activity-footer">2 hours ago</div>
              </div>

              <div class="widget-activity-item">
                <div class="widget-activity-avatar">
                  <img src="assets/demo/avatars/5.jpg" alt="">
                  <div class="widget-activity-icon fa fa-comment bg-info"></div>
                </div>
                <div class="widget-activity-header">
                  <a href="#" title="">Denise Steiner</a> commented on <a href="#" title="">Article Name</a>
                </div>
                <div class="widget-activity-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                </div>
                <div class="widget-activity-footer">2 hours ago</div>
              </div>

              <div class="widget-activity-item">
                <div class="widget-activity-avatar">
                  <img src="assets/demo/avatars/5.jpg" alt="">
                  <div class="widget-activity-icon fa fa-thumbs-down bg-danger"></div>
                </div>
                <div class="widget-activity-header">
                  <a href="#" title="">Denise Steiner</a> disliked <a href="#" title="">Article Name</a>
                </div>
                <div class="widget-activity-footer">2 hours ago</div>
              </div>

              <div class="widget-activity-item">
                <div class="widget-activity-avatar">
                  <img src="assets/demo/avatars/4.jpg" alt="">
                  <div class="widget-activity-icon fa fa-check bg-warning"></div>
                </div>
                <div class="widget-activity-header">
                  <a href="#" title="">Timothy Owens</a> followed <a href="#" title="">Denise Steiner</a>
                </div>
                <div class="widget-activity-footer">2 hours ago</div>
              </div>
            </div>
            <nav>
              <ul class="pagination pagination-sm m-b-0">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </nav>

          </div>

          <div class="tab-pane fade" id="profile-followers">
            <div class="panel m-b-0 p-y-1 b-t-0">
              <div class="row">
                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/2.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Following</a></div>
                    <a href="#" class="widget-followers-name">Robert Jang</a>
                    <a href="#" class="widget-followers-username">@rjang</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/3.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Michelle Bortz</a>
                    <a href="#" class="widget-followers-username">@mbortz</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/4.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Following</a></div>
                    <a href="#" class="widget-followers-name">Timothy Owens</a>
                    <a href="#" class="widget-followers-username">@towens</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/1.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">John Doe</a>
                    <a href="#" class="widget-followers-username">@jdoe</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/2.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Robert Jang</a>
                    <a href="#" class="widget-followers-username">@rjang</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/3.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Michelle Bortz</a>
                    <a href="#" class="widget-followers-username">@mbortz</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/4.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Timothy Owens</a>
                    <a href="#" class="widget-followers-username">@towens</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/1.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">John Doe</a>
                    <a href="#" class="widget-followers-username">@jdoe</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/2.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Robert Jang</a>
                    <a href="#" class="widget-followers-username">@rjang</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/3.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Michelle Bortz</a>
                    <a href="#" class="widget-followers-username">@mbortz</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/4.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Timothy Owens</a>
                    <a href="#" class="widget-followers-username">@towens</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/1.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">John Doe</a>
                    <a href="#" class="widget-followers-username">@jdoe</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="profile-following">
            <div class="panel m-b-0 p-y-1 b-t-0">
              <div class="row">
                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/2.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Following</a></div>
                    <a href="#" class="widget-followers-name">Robert Jang</a>
                    <a href="#" class="widget-followers-username">@rjang</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/3.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Michelle Bortz</a>
                    <a href="#" class="widget-followers-username">@mbortz</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/4.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Following</a></div>
                    <a href="#" class="widget-followers-name">Timothy Owens</a>
                    <a href="#" class="widget-followers-username">@towens</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/1.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">John Doe</a>
                    <a href="#" class="widget-followers-username">@jdoe</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/2.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Robert Jang</a>
                    <a href="#" class="widget-followers-username">@rjang</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/3.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Michelle Bortz</a>
                    <a href="#" class="widget-followers-username">@mbortz</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/4.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Timothy Owens</a>
                    <a href="#" class="widget-followers-username">@towens</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/1.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">John Doe</a>
                    <a href="#" class="widget-followers-username">@jdoe</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/2.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Robert Jang</a>
                    <a href="#" class="widget-followers-username">@rjang</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/3.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Michelle Bortz</a>
                    <a href="#" class="widget-followers-username">@mbortz</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/4.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">Timothy Owens</a>
                    <a href="#" class="widget-followers-username">@towens</a>
                  </div>
                </div>

                <div class="col-xs-12 col-xl-6">
                  <div class="widget-followers-item">
                    <img src="assets/demo/avatars/1.jpg" alt="" class="widget-followers-avatar">
                    <div class="widget-followers-controls"><a href="#" class="btn btn-sm btn-outline">Follow</a></div>
                    <a href="#" class="widget-followers-name">John Doe</a>
                    <a href="#" class="widget-followers-username">@jdoe</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <hr class="page-wide-block visible-xs visible-sm">

      <div class="col-md-4 col-xl-3">
        <div class="panel bg-transparent">
          <div class="panel-heading p-x-1 bg-transparent">
            <span class="panel-title">About me</span>
          </div>
          <div class="panel-body p-a-1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <a href="#">dolore magna</a> aliqua.
          </div>
        </div>
        <div class="panel bg-transparent">
          <div class="panel-heading p-x-1 bg-transparent">
            <span class="panel-title">Skills</span>
          </div>
          <div class="panel-body p-a-1">
            <span class="label label-primary">UI/UX</span>
            <span class="label label-primary">Web design</span>
            <span class="label label-primary">Photoshop</span>
            <span class="label label-primary">HTML</span>
            <span class="label label-primary">CSS</span>
          </div>
        </div>
        <div class="panel bg-transparent">
          <div class="panel-heading p-x-1 bg-transparent">
            <span class="panel-title">Social</span>
          </div>
          <div class="list-group">
            <a href="#" class="list-group-item p-x-1 b-a-0"><i class="profile-list-icon fa fa-twitter" style="color: #4ab6d5"></i>&nbsp;&nbsp;&nbsp;@dsteiner</a>
            <a href="#" class="list-group-item p-x-1 b-a-0"><i class="profile-list-icon fa fa-facebook-square" style="color: #1a7ab9"></i>&nbsp;&nbsp;&nbsp;Denise Steiner</a>
            <a href="#" class="list-group-item p-x-1 b-a-0"><i class="profile-list-icon fa fa-envelope" style="color: #888"></i>&nbsp;&nbsp;&nbsp;dsteiner@example.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ================= END: CONTENT ============================= -->
@endsection()