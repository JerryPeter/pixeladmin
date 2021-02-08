
  <!-- ================= BEGIN: FOOTER SCRIPT ============================= -->
  <!-- ==============================================================================
  |
  |  SCRIPTS
  |
  =============================================================================== -->

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/pixeladmin.min.js"></script>
  <script src="assets/js/kertaskerja.js"></script>


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
    // Initialize background

    $(function() {
      $('.page-about-us-header').pxResponsiveBg({
        backgroundImage: 'assets/demo/bgs/7.jpg',
        overlay: '#000'
      });

    });
  </script>

  <!-- Google Maps -->
  <!-- NOTE: When using Google Maps on your own site you MUST get your own API key:
             https://developers.google.com/maps/documentation/javascript/get-api-key
             After you got the key paste it in the URL below. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHtdj4L66c05v1UZm-nte1FzUEAN6GKBI&callback=initMap&sensor=false" async defer></script>
  <!-- ================= END: FOOTER SCRIPT ============================= -->
