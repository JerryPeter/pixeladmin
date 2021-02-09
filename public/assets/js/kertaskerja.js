$(document).ready(function() {
    var overlay = $('.overlay');
    
    $('#right_sidebar').on('click', function() {
        if ($('.overlay').hasClass('active')) {
            $('.overlay').removeClass('active');
        } else {
            $('.overlay').addClass('active');
        }
    });

    $('#sidebar-right').on('expanded.px.sidebar', function(e) {
        $('.overlay').addClass('active');
        e.preventDefault();          
    });


    $('#sidebar-right').on('collapsed.px.sidebar', function(e) {
        $('.overlay').removeClass('active');
        $('#sidebar-right').removeClass('open');
        e.preventDefault();
    });        

    /*--- Kalau gag boleh ditutup dicomment saja --*/
    overlay.on('click', function() {
        $(this).removeClass('active');
        $('#sidebar-right').removeClass('open');
        $('#rightbar').removeClass('open');
    });
});