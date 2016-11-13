$(function(){

  $('a').smoothScroll({
    speed: 200
  });

  //scrollReveal for portfolio projects

  window.sr = ScrollReveal({duration: 500, viewFactor: 0.3});
  sr.reveal('.portfolioPiece');



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