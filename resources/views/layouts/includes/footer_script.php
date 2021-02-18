
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

  <!-- POPUP ANIMATED -->
  <script src="assets/js/animatedModal.js"></script>

  <!-- EASY UI -->
  <!-- <script type="text/javascript" src="assets/easyui/js/jquery.min.js"></script> -->
  <script type="text/javascript" src="assets/easyui/js/jquery.easyui.min.js"></script>

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

  <!-- ================= END: FOOTER SCRIPT ============================= -->
