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

    function getFullscreenElement() {
        return document.fullscreenElement   //standard property
        || document.webkitFullscreenElement //safari/opera support
        || document.mozFullscreenElement    //firefox support
        || document.msFullscreenElement;    //ie/edge support
     }
   
     function toggleFullscreen() {
        if(getFullscreenElement()) {
           document.exitFullscreen();
        }else {
            document.documentElement.requestFullscreen().catch(console.log);
        }
     }

     function toggleWindowFullscreen(_obj) {
        if(getFullscreenElement()) {
            document.exitFullscreen();
         }else {
             document.getElementById(_obj).requestFullscreen().catch(console.log);
         }         
     }

     $('#btnFullscreen').on('click', function(e) {
        toggleFullscreen();
    });  
    
    $('#btnFullscreenObj').on('click', function(e) {
        toggleWindowFullscreen("objFullscreen");
    });       
         
     

     document.addEventListener('dblclick', () => {
        toggleFullscreen();
     });

});