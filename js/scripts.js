$(function(){

  $('a').smoothScroll({
    speed: 200
  });


//waypoints for menu items (showing active state when scroll to particular section)

$(window).on('scroll', function() {
    var aboutTop = $('#about').offset().top;
    var portfolioTop = $('#portfolioSection').offset().top;
    var contactTop = $('#contactSection').offset().top;

    if ($(this).scrollTop() > contactTop) {
      $('.navItem').removeClass('selectedMenu');
      $('.contactNav').addClass('selectedMenu');
    
    } else if ($(this).scrollTop() > portfolioTop) {;
      $('.navItem').removeClass('selectedMenu');
      $('.portfolioNav').addClass('selectedMenu');
    
    } else if ($(this).scrollTop() > aboutTop) {
      $('.navItem').removeClass('selectedMenu');
      $('.aboutNav').addClass('selectedMenu');
    }
  });

//menu icon hamburger 
  $('#menuIcon').on('click', function() {
    $('.menufixed').toggleClass('showMenu');
    $(this).toggleClass('fa-times fa-bars');

  })

  $('#menu-primary-menu li').on('click', function(){
    $('.menufixed').removeClass('showMenu');
    $('#menuIcon').toggleClass('fa-times fa-bars');
  })


	console.log("It's working");

});