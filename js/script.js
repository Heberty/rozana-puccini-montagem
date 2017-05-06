$(document).ready(function() {
  
    function reservaFixed()
    { 
        var topo = $('#nav-fix')[0].offsetTop; // altura do topo
        var height = $('#nav-sidebar').height();
        var scrollTop = $(window).scrollTop(); // qto foi rolado a barra
        $('#nav-fix').css('height', height+'px') 
        if(scrollTop >= topo){
          $('#nav-sidebar').addClass('fixed')
        }else{
          $('#nav-sidebar').removeClass('fixed')
        }               
    }
    $(document).ready(reservaFixed);
    $(window).scroll(reservaFixed);
    $(window).resize(reservaFixed);
});

$(document).ready(function() {
 
    $("#owl-demo").owlCarousel({

      navigation : true, // показывать кнопки next и prev 
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      loop: true,
      itemsMobile : false,
      autoplay: true

    });
 
});

$('.button-fixed').on('click', function(e){
    $("html, body").animate({ scrollTop: $('#header').offset().top }, 1000);
});