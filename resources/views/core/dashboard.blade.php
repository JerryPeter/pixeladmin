@extends('layouts/main')

@section('title','PixelAdmin :: Dashboard')

@section('header_additional')
  <script src="assets/demo/demo.js"></script>
@endsection()

@section('footer_additional')

<script type="text/javascript">
    // -------------------------------------------------------------------------
    // Initialize DEMO

    $(function() {
      var file = String(document.location).split('/').pop();

      // Remove unnecessary file parts
      file = file.replace(/(\.html).*/i, '$1');

      if (!/.html$/i.test(file)) {
        file = 'index.html';
      }

      // Activate current nav item
      $('body > .px-nav')
        .find('.px-nav-item > a[href="' + file + '"]')
        .parent()
        .addClass('active');

      $('body > .px-nav').pxNav();
      $('body > .px-footer').pxFooter();

      $('#navbar-notifications').perfectScrollbar();
      $('#navbar-messages').perfectScrollbar();
    });
  </script>

  <script>
    // -------------------------------------------------------------------------
    // Initialize line chart

    $(function() {
      var data = [
        {
          label: 'Permanent',
          data: [
            [6, pxDemo.getRandomData(250, 150)], [7, pxDemo.getRandomData(250, 150)], [8, pxDemo.getRandomData(250, 150)], [9, pxDemo.getRandomData(250, 150)], [10, pxDemo.getRandomData(250, 150)], [11, pxDemo.getRandomData(250, 150)], [12, pxDemo.getRandomData(250, 150)], [13, pxDemo.getRandomData(250, 150)], [14, pxDemo.getRandomData(250, 150)], [15, pxDemo.getRandomData(250, 150)]
          ],
        },
        {
          label: 'Contract',
          data: [
            [6, pxDemo.getRandomData(100, 0)], [7, pxDemo.getRandomData(100, 0)], [8, pxDemo.getRandomData(100, 0)], [9, pxDemo.getRandomData(100, 0)], [10, pxDemo.getRandomData(100, 0)], [11, pxDemo.getRandomData(100, 0)], [12, pxDemo.getRandomData(100, 0)], [13, pxDemo.getRandomData(100, 0)], [14, pxDemo.getRandomData(100, 0)], [15, pxDemo.getRandomData(100, 0)]
          ],
        }
      ];

      $.plot($('#flot-graph'), data, {
        series: {
          shadowSize: 0,
          lines: {
            show: true,
          },
          points: {
            show:   true,
            radius: 4,
          },
        },

        grid: {
          color:       '#999',
          borderColor: 'rgba(255, 255, 255, 0)',
          borderWidth: 1,
          hoverable:   true,
          clickable:   true,
        },

        xaxis: { tickColor: 'rgba(255, 255, 255, 0)', },
        tooltip: { show: true },
        colors: pxDemo.getRandomColors(),
      });
    });

    // -------------------------------------------------------------------------
    // Initialize bars chart

    $(function() {
      var data = [
        {
          label: 'Male',
          data: [
            [6, pxDemo.getRandomData(250, 150)], [7, pxDemo.getRandomData(250, 150)], [8, pxDemo.getRandomData(250, 150)], [9, pxDemo.getRandomData(250, 150)], [10, pxDemo.getRandomData(250, 150)], [11, pxDemo.getRandomData(250, 150)], [12, pxDemo.getRandomData(250, 150)], [13, pxDemo.getRandomData(250, 150)], [14, pxDemo.getRandomData(250, 150)], [15, pxDemo.getRandomData(250, 150)]
          ],
        },
        {
          label: 'Female',
          data: [
            [6, pxDemo.getRandomData(100, 0)], [7, pxDemo.getRandomData(100, 0)], [8, pxDemo.getRandomData(100, 0)], [9, pxDemo.getRandomData(100, 0)], [10, pxDemo.getRandomData(100, 0)], [11, pxDemo.getRandomData(100, 0)], [12, pxDemo.getRandomData(100, 0)], [13, pxDemo.getRandomData(100, 0)], [14, pxDemo.getRandomData(100, 0)], [15, pxDemo.getRandomData(100, 0)]
          ],
        }
      ];

      $.plot($('#flot-bars'), data, {
        series: {
          shadowSize: 0,
          bars: {
            show: true,
            barWidth: .6,
            align: 'center',
            lineWidth: 1,
            fill: 0.25,
          },
        },

        grid: {
          color:       '#999',
          borderColor: 'rgba(255, 255, 255, 0)',
          borderWidth: 1,
          hoverable:   true,
          clickable:   true,
        },

        xaxis: {
          tickDecimals: 2,
          tickColor:    'rgba(255, 255, 255, 0)',
        },

        tooltip: { show: true },
        colors: pxDemo.getRandomColors(),
      });
    });

    // -------------------------------------------------------------------------
    // Initialize categories chart

    $(function() {
      var data = [
        {
          label: 'iPhone',
          data: [
            [ '2010.Q1', pxDemo.getRandomData() ],
            [ '2010.Q2', pxDemo.getRandomData() ],
            [ '2010.Q3', pxDemo.getRandomData() ],
            [ '2010.Q4', pxDemo.getRandomData() ],
          ],
        },
        {
          label: 'iPad',
          data: [
            [ '2010.Q1', pxDemo.getRandomData() ],
            [ '2010.Q2', pxDemo.getRandomData() ],
            [ '2010.Q3', pxDemo.getRandomData() ],
            [ '2010.Q4', pxDemo.getRandomData() ],
          ],
        },
        {
          label: 'iTouch',
          data: [
            [ '2010.Q1', pxDemo.getRandomData() ],
            [ '2010.Q2', pxDemo.getRandomData() ],
            [ '2010.Q3', pxDemo.getRandomData() ],
            [ '2010.Q4', pxDemo.getRandomData() ],
          ],
        },
      ];

      $.plot($('#flot-categories'), data, {
        series: {
          shadowSize: 0,
          lines: {
            show: true,
            fill: 0.1,
            lineWidth: 1
          },
        },

        grid: {
          color:       '#999',
          borderColor: 'rgba(255, 255, 255, 0)',
          borderWidth: 1,
          hoverable:   true,
          clickable:   true,
        },

        xaxis: {
          mode:      'categories',
          tickColor: 'rgba(255, 255, 255, 0)',
        },

        tooltip: {
          show: true,
          content: '%s: %y'
        },

        colors: pxDemo.getRandomColors(),
      });
    });

    // -------------------------------------------------------------------------
    // Initialize pie chart

    $(function() {
      var data = [
        { label: 'Finance', data: pxDemo.getRandomData() },
        { label: 'Internal Audit', data: pxDemo.getRandomData() },
        { label: 'MIS', data: pxDemo.getRandomData() },
        { label: 'HCM', data: pxDemo.getRandomData() },
        { label: 'Legal', data: pxDemo.getRandomData() },
        { label: 'Sales', data: pxDemo.getRandomData() },
        { label: 'Accounting', data: pxDemo.getRandomData() },
      ];

      $.plot($('#flot-pie'), data, {
        series: {
          shadowSize: 0,
          pie: {
            show:        true,
            radius:      1,
            innerRadius: 0.5,

            label: {
              show:       true,
              radius:     3 / 4,
              background: { opacity: 0 },

              formatter: function(label, series) {
                return '<div style="font-size:11px;text-align:center;color:white;">' + Math.round(series.percent) + '%</div>';
              },
            },
          },
        },

        grid: {
          color:       '#999',
          borderColor: 'rgba(255, 255, 255, 0)',
          borderWidth: 1,
          hoverable:   true,
          clickable:   true,
        },

        xaxis: { tickColor: 'rgba(255, 255, 255, 0)' },
        colors: pxDemo.getRandomColors(),
      });
    });
  </script>
@endsection()

@section('content')
<!-- ================= BEGIN: CONTENT ============================= -->
<div class="px-content">
    <div class="p-a-4">
      
      <div class="page-header">
        <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-stats-bars"></i>Dashboard / </span>Analytics</h1>      
      </div>

      <div class="row">

        <!-- Stats -->

        <div class="col-md-3">
          <a href="#" class="box bg-success darken">
            <div class="box-row">
              <div class="box-cell p-x-3 p-y-1 bg-success">
                <div class="pull-xs-left font-weight-semibold font-size-12">TOTAL EMPLOYEE</div>
              </div>
            </div>
            <div class="box-row">
              <div class="box-cell p-x-3 p-y-2">
                <i class="box-bg-icon middle left font-size-52 ion-ios-people-outline text-white"></i>
                <div class="pull-xs-right font-weight-semibold font-size-24 line-height-1">583</div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="#" class="panel box bg-white text-default">
            <div class="box-row">
              <div class="box-cell p-x-3 p-y-1">
                <div class="pull-xs-left font-weight-semibold font-size-12">PERMANENT</div>
              </div>
            </div>
            <div class="box-row">
              <div class="box-cell p-x-3 p-y-2">
                <i class="box-bg-icon middle left text-danger font-size-52 ion-ios-people-outline"></i>
                <div class="pull-xs-right font-weight-semibold font-size-24 line-height-1">410</div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="#" class="panel box bg-white text-default">
            <div class="box-row">
              <div class="box-cell p-x-3 p-y-1">
                <div class="pull-xs-left font-weight-semibold font-size-12">CONTRACT</div>
              </div>
            </div>
            <div class="box-row">
              <div class="box-cell p-x-3 p-y-2">
                <i class="box-bg-icon middle left text-info font-size-52 ion-ios-people-outline"></i>
                <div class="pull-xs-right font-weight-semibold font-size-24 line-height-1">153</div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="#" class="panel box bg-white text-default">
            <div class="box-row">
              <div class="box-cell p-x-3 p-y-1">
                <div class="pull-xs-left font-weight-semibold font-size-12">MAGANG</div>
              </div>
            </div>
            <div class="box-row">
              <div class="box-cell p-x-3 p-y-2">
                <i class="box-bg-icon middle left text-warning font-size-52 ion-ios-people-outline"></i>
                <div class="pull-xs-right font-weight-semibold font-size-24 line-height-1">20</div>
              </div>
            </div>
          </a>
        </div>

        <!-- / Stats -->

      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="panel">
            <div class="panel-title">Employee Status</div>
            <hr>

            <div class="panel-body">
              <div id="flot-graph" style="height: 250px"></div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="panel">
            <div class="panel-title">Gender</div>
            <hr>

            <div class="panel-body">
              <div id="flot-bars" style="height: 250px"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="panel">
            <div class="panel-title">Categories</div>
            <hr>

            <div class="panel-body">
              <div id="flot-categories" style="height: 250px"></div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="panel">
            <div class="panel-title">Employee per Department</div>
            <hr>

            <div class="panel-body">
              <div id="flot-pie" style="height: 250px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>
<!-- ================= END: CONTENT ============================= -->
@endsection()