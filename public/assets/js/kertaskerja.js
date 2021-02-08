$(document).ready(function() {
    var overlay = $('.overlay');
    
    $('#right_sidebar').on('click', function() {
        if ($('.overlay').hasClass('active')) {
            $('.overlay').removeClass('active');
        } else {
            $('.overlay').addClass('active');
        }
    });

    $('#sidebar-with-tabs').on('expanded.px.sidebar', function(e) {
        $('.overlay').addClass('active');
        e.preventDefault();          
    });


    $('#sidebar-with-tabs').on('collapsed.px.sidebar', function(e) {
        $('.overlay').removeClass('active');
        e.preventDefault();
    });        

    /*--- Kalau gag boleh ditutup dicomment saja --*/
    overlay.on('click', function() {
        $(this).removeClass('active');
        $('#sidebar-with-tabs').removeClass('open');
    });


});